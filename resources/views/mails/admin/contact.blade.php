<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form Submission</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
    <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600px" cellpadding="0" cellspacing="0" style="background-color: #ffffff; padding: 20px; border-radius: 8px;">

                    <!-- Logo Section -->
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <img src="https://sarep.aliabcybersecurity.co.in/build/media/logo.png" alt="Your Company Logo" width="150px" style="border-radius: 8px;">
                        </td>
                    </tr>

                    <!-- Greeting Section -->
                    <tr>
                        <td style="text-align: center;">
                            <h1 style="font-size: 26px; color: #333333;">New Contact Form Submission</h1>
                        </td>
                    </tr>

                    <!-- Contact Details -->
                    <tr>
                        <td style="text-align: left; padding: 10px 0;">
                            <h2 style="font-size: 20px; color: #333333;">Contact Details:</h2>
                            <p style="font-size: 16px; color: #666666;">
                                <strong>First Name:</strong> {{ $first_name }}<br>
                                <strong>Last Name:</strong> {{ $last_name }}<br>
                                <strong>Email:</strong> {{ $email }}<br>
                                <strong>ISD Code:</strong> {{ $isd_code }}<br>
                                <strong>Phone Number:</strong> {{ $phone_number }}
                            </p>
                        </td>
                    </tr>

                

                    <tr>
                        <td style="padding-top: 20px;">
                            <hr style="border: 1px solid #eeeeee;">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>

</html>
