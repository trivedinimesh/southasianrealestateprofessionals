<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Event Booking Alert</title>
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
                            <h1 style="font-size: 26px; color: #333333;">New Event Booking Alert</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-size: 16px; color: #666666;">User <strong>{{ $first_name }} {{ $last_name }}</strong> has booked the event <strong>{{ $eventName }}</strong>.</p>
                        </td>
                    </tr>

                    <!-- Event Details Section -->
                    <tr>
                        <td style="padding-top: 20px; text-align: center;">
                            <p style="font-size: 16px; color: #666666;">Email ID: {{ $email }}</p>
                            <p style="font-size: 16px; color: #666666;">Event Date: {{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</p>
                        </td>
                    </tr>

                    <!-- Call to Action with concatenated URL -->
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <a href="https://sarep.aliabcybersecurity.co.in/admin/events/attandee/{{ $eventId }}" style="background-color: #f05537; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; display: inline-block;">View Booking Details</a>
                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <p style="font-size: 16px; color: #666666;">Thank you for using our services!</p>
                            <p style="font-size: 14px; color: #999999;">Best regards,</p>
                            <p style="font-size: 14px; color: #999999;"><strong>The Event Team</strong></p>
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
