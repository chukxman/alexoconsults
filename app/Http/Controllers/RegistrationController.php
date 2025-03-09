<?php

namespace App\Http\Controllers;

use App\Mail\EmailResponse;
use App\Mail\FeedbackEmail;
use App\Models\Registration;
use Cloudinary\Api\Upload\UploadApi;
use Cloudinary\Configuration\Configuration;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use League\Csv\Writer;
use RealRashid\SweetAlert\Facades\Alert;

class RegistrationController extends Controller
{
    //save  form details
    public function store(Request $request)
    {
        $request->validate([
            'cv' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:2048',
            'certificate' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx,txt|max:2048'
        ]);


        $registration = new Registration;
        $registration->firstname = $request->firstname;
        $registration->lastname = $request->lastname;
        $registration->othername = $request->othername;
        $registration->email = $request->email;
        $registration->address = $request->address;
        $registration->address2 = $request->address2;
        $registration->phone = $request->phone;
        $registration->dob = $request->dob;
        $registration->gender = $request->gender;
        $registration->country = $request->country;
        $registration->state = $request->state;
        $registration->lga = $request->lga;
        $registration->qualification = $request->qualification;
        $registration->specialization = $request->specialization;
        $registration->certifications = $request->certifications;
        $registration->experience = $request->experience;
        $registration->info = $request->info;

        $registration->save();

        // Create a directory for the person based on their name
        $name = $registration->firstname . " " . $registration->lastname;
        $folderName = preg_replace('/\s+/', '_', $name); // Replace spaces with underscores
        $directoryPath = 'people/' . $folderName;

        // Store the files in the person's directory within the home directory

        $request->file('cv')->store('people/' . $folderName, 'public');
        $file1Path = $request->file('cv')->store($directoryPath, 'public');
        $file2Path = $request->file('certificate')->store($directoryPath, 'public');

        // Create URLs for accessing the files
        $file1Url = Storage::url($file1Path);
        // $file1url = urlencode($file1Path);
        $file2Url = Storage::url($file2Path);
        // $file2url = urlencode($file2Path);


        // $uploadedFileUrl = Cloudinary::upload($request->file('certificate')->getRealPath())->getSecurePath();
        // $this->sendEmailWithDownloadLink($uploadedFileUrl);

        // Append the details to a CSV file
        $csvPath = 'app/'.'registrations.csv';
        $csv_file = Writer::createFromPath(storage_path($csvPath), 'a+');

        $csv_file->insertOne([
            $registration->firstname,
            $registration->lastname,
            $registration->othername,
            $registration->email,
            $registration->address,
            $registration->address2,
            $registration->phone,
            $registration->dob,
            $registration->gender,
            $registration->country,
            $registration->state,
            $registration->lga,
            $registration->qualification,
            $registration->specialization,
            $registration->certifications,
            $registration->experience,
            $registration->info,
            $file1Url,  // Document link 1
            $file2Url   // Document link 2
        ]);

        $csv3 = Storage::url($csvPath);
        $csv = url($csv3);

       

        $details = [
            'title' => 'Registration details for ' . $name,
            'file1url' => url($file1Url),
            'file2url' => url($file2Url)
        ];

        $subject = 'Registration details for ' . $name;
        $feedback_subject = 'Application recieved';
        $message = 'application';
        
        $email = ['info@alexoconsults.com','alexiyen18@gmail.com','pat4allgen@gmail.com'];

        // Send email
        Mail::to($email)->send(new EmailResponse($details, $subject, $registration, $file1Url, $file2Url, $csv));

        Mail::to($registration->email)->send(new FeedbackEmail($details, $feedback_subject, $name, $message));
     

        // Flash success message to trigger SweetAlert toast
        Alert::toast('Application sent successfully!', 'success');


        return back()->with('success', 'Application sent successfully!');
    }

    protected function sendEmailWithDownloadLink($url)
    {
        $email = 'pat4allgen@gmail.com'; // Replace with the recipient's email address

        Mail::send([], [], function ($message) use ($email, $url) {
            $message->to($email)
                ->subject('Download Link')
                ->setBody('Click the link to download the file: <a href="' . $url . '">Download</a>', 'text/html');
        });
    }
}
