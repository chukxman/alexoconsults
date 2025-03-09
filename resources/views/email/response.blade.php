<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['title'] }}</title>
    <style>
        body {
            font-family: 'Helvetica', Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            background-color: #091E3E;
            padding: 20px;
            text-align: center;
            color: #ffffff;
        }
        .header img {
            max-width: 250px;
            margin-bottom: 10px;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
            letter-spacing: 2px;
        }
        .content {
            padding: 20px;
        }
        .content h2 {
            color: #333333;
            font-size: 22px;
            border-bottom: 2px solid #091E3E;
            padding-bottom: 10px;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        table th, table td {
            text-align: left;
            padding: 12px 15px;
            border-bottom: 1px solid #ddd;
        }
        table th {
            background-color: #091E3E;
            color: #ffffff;
            font-weight: bold;
        }
        table tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        a {
            color: #007bff;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer {
            background-color: #f8f9fa;
            padding: 15px;
            text-align: center;
            color: #777;
            font-size: 14px;
        }
        .footer p {
            margin: 0;
        }
    </style>
</head>
<body>

    <div class="container">
        <!-- Header Section -->
        <div class="header">
            <!-- Company Logo -->
            <img src='https://alexoconsults.com/img/alexblue.png' alt="Company Logo">
            <!-- Company Name -->
        </div>

        <!-- Content Section -->
        <div class="content">
            <!-- Title -->
            <h2>{{ $details['title'] }}</h2>

            <!-- Registration Details Table -->
            <table>
                <tr>
                    <th>Name</th>
                    <td>{{ $registration->firstname }} {{ $registration->lastname }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>{{ $registration->email }}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{ $registration->address }}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{ $registration->phone }}</td>
                </tr>
                <tr>
                    <th>Date of Birth</th>
                    <td>{{ $registration->dob }}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{ $registration->gender }}</td>
                </tr>
                <tr>
                    <th>Country</th>
                    <td>{{ $registration->country }}</td>
                </tr>
                <tr>
                    <th>State</th>
                    <td>{{ $registration->state }}</td>
                </tr>
                <tr>
                    <th>LGA</th>
                    <td>{{ $registration->lga }}</td>
                </tr>
                <tr>
                    <th>Qualification</th>
                    <td>{{ $registration->qualification }}</td>
                </tr>
                <tr>
                    <th>Certification</th>
                    <td>{{ $registration->certifications }}</td>
                </tr>
                <tr>
                    <th>Experience</th>
                    <td>{{ $registration->experience }}</td>
                </tr>
                <tr>
                    <th>Specialization</th>
                    <td>{{ $registration->specialization }}</td>
                </tr>
                <tr>
                    <th>Bio</th>
                    <td>{{ $registration->info }}</td>
                </tr>
                <tr>
                    <th>Document Link 1</th>
                    <td><a href="{{ $details['file1url'] }}">Download Document 1</a></td>
                </tr>
                <tr>
                    <th>Document Link 2</th>
                    <td><a href="{{ $details['file2url'] }}">Download Document 2</a></td>
                </tr>
                <tr>
                    <th>Follow up</th>
                    <td><a href="{{ $csv }}">Sheets for all candidate</a></td>
                </tr>
            </table>
        </div>

        <!-- Footer Section -->
        <div class="footer">
            <p>&copy; {{ date('Y') }} Alexo consults. All rights reserved.</p>
        </div>
    </div>

</body>
</html>

{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $details['title'] }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            background-color: #ffffff;
            margin: 0 auto;
            padding: 20px;
            width: 80%;
            max-width: 600px;
            border: 1px solid #dddddd;
            border-radius: 5px;
        }
        h2 {
            color: #333333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #dddddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
        a {
            color: #0066cc;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
        .footer {
            margin-top: 20px;
            text-align: center;
            font-size: 12px;
            color: #888888;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h2>{{ $details['title'] }}</h2>
        <table>
            <tr>
                <th>Name:</th>
                <td>{{ $registration->firstname }} {{ $registration->lastname }}</td>
            </tr>
            <tr>
                <th>Email:</th>
                <td>{{ $registration->email }}</td>
            </tr>
            <tr>
                <th>Address:</th>
                <td>{{ $registration->address }}</td>
            </tr>
            <tr>
                <th>Phone:</th>
                <td>{{ $registration->phone }}</td>
            </tr>
            <tr>
                <th>Date of Birth:</th>
                <td>{{ $registration->dob }}</td>
            </tr>
            <tr>
                <th>Gender:</th>
                <td>{{ $registration->gender }}</td>
            </tr>
            <tr>
                <th>Country:</th>
                <td>{{ $registration->country }}</td>
            </tr>
            <tr>
                <th>State:</th>
                <td>{{ $registration->state }}</td>
            </tr>
            <tr>
                <th>LGA:</th>
                <td>{{ $registration->lga }}</td>
            </tr>
            <tr>
                <th>Qualification:</th>
                <td>{{ $registration->qualification }}</td>
            </tr>
            <tr>
                <th>Certification:</th>
                <td>{{ $registration->certification }}</td>
            </tr>
            <tr>
                <th>Specialization:</th>
                <td>{{ $registration->specialization }}</td>
            </tr>
            <tr>
                <th>Bio:</th>
                <td>{{ $registration->bio }}</td>
            </tr>
            <tr>
                <th>Document Link 1:</th>
                <td><a href="{{ $file1url }}">Download Document 1</a></td>
            </tr>
            <tr>
                <th>Document Link 2:</th>
                <td><a href="{{ $file2url }}">Download Document 2</a></td>
            </tr>
        </table>

        <div class="footer">
            <p>Thank you for registering with us!</p>
            <p>&copy; {{ date('Y') }} Your Company Name. All rights reserved.</p>
        </div>
    </div>
</body>
</html> --}}
