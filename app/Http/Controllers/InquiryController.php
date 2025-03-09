<?php

namespace App\Http\Controllers;

use App\Mail\FeedbackEmail;
use App\Mail\InquiryEmail;
use App\Models\Inquiry;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use League\Csv\Writer;
use RealRashid\SweetAlert\Facades\Alert;

class InquiryController extends Controller
{
    //save  form details
    public function store(Request $request)
    {
        $inquiry = new Inquiry;

        $inquiry->name = $request->name;
        $inquiry->email = $request->email;
        $inquiry->message = $request->message;
        $inquiry->phone = $request->phone;
        
        $inquiry->save();

        $csvPath = 'inquiry.csv';
        $csv_file = Writer::createFromPath(storage_path('app\\' . $csvPath), 'a+');
        $csv_file->insertOne([$inquiry->name, $inquiry->email, $inquiry->message, $inquiry->phone]);
        $csv = Storage::url($csv_file);

        $details = [
            'title' => 'Inquiry from ' .  $inquiry->name,
            'body' => 'Inquiry from '. $inquiry->name ,
            'phone' => 'Phone: ' .  $inquiry->phone,
            'email' => 'Email: ' . $inquiry->email,
            'message' => 'Message: ' . $inquiry->message
        ];

        $subject = 'Inquiry from: ' . $inquiry->name;
        $name = $inquiry->name;
        $message = 'message';

        $feedback_subject = 'Your Inquiry is Important to Us at Alexo Consults';
        $email = ['info@alexoconsults.com','alexiyen18@gmail.com','pat4allgen@gmail.com'];



        // Send email
        Mail::to($email)->send(new InquiryEmail($details, $subject, $csv, $inquiry));
        Mail::to($inquiry->email)->send(new FeedbackEmail($details, $feedback_subject, $name, $message));

        // Flash success message to trigger SweetAlert toast
        Alert::toast('Message sent successfully!', 'success');

        return back()->with('success', 'Message sent successfully!');

    }
}
