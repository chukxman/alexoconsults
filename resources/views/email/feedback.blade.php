<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #dddddd;
            border-radius: 8px;
        }
        .header {
            text-align: center;
            padding: 10px;
            background-color: #091E3E;
            color: white;
        }
        .header img {
            width: 250px;
            height: auto;
        }
        .content {
            padding: 20px;
            color: #333333;
        }
        .content h1 {
            font-size: 24px;
            color: #091E3E;
        }
        .content p {
            font-size: 16px;
            line-height: 1.6;
        }
        .footer {
            text-align: center;
            /* padding: 10px; */
            font-size: 14px;
            /* color: #888888; */
        }
        .social-media {
            margin: 20px 0;
        }
        .social-media a {
            margin: 0 10px;
            text-decoration: none;
            color: #0073e6;
        }
        .social-media img {
            width: 40px;
            height: 40px;
        }
        
    </style>
</head>
<body>

    <div class="email-container">
        <!-- Email Header -->
        <div class="header">
            <img src="https://alexoconsults.com/img/alexwhite.png" alt="Company Logo">
        </div>

        <!-- Email Content -->
        <div class="content">
            <br>
            <br>
            <p>Dear {{ $name }},</p>

            <p>Thank you for reaching out to us. We have received your {{ $message }} and our team is currently reviewing your {{ $message }}.</p>


            <p>We will get back to you as soon as possible. If you have any further questions, feel free to reply to this email or call us directly at +2348130350663.</p>

            <p>Best regards,</p>
            <p><strong>Alexo Consults Team</strong></p>
        </div>

        <!-- Email Footer -->
        <div class="footer">
            <p>Follow us on social media for the latest updates:</p>
            <div class="social-media">
                <a href="https://web.facebook.com/profile.php?id=61561232475483">
                    <img src="https://img.icons8.com/?size=100&id=uLWV5A9vXIPu&format=png&color=000000" alt="Facebook">
                </a>
                <a href="https://x.com/alexoconsults">
                    <img src="https://img.icons8.com/?size=100&id=phOKFKYpe00C&format=png&color=000000" alt="Twitter">
                </a>
                <a href="https://www.instagram.com/alexoconsults/">
                    <img src="https://img.icons8.com/?size=100&id=32323&format=png&color=000000" alt="Instagram"> 
                </a>
                <a href="https://www.youtube.com/channel/UCD3PqkBBwU9h3cJvmQizGPg">
                    <img src="https://img.icons8.com/?size=100&id=19318&format=png&color=000000" alt="Youtube"> 
                </a>
            </div>
            <p>&copy; 2024 Alexo Consults. All rights reserved.</p>
        </div>
    </div>

</body>
</html>

