<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Booking Confirmation</title>
</head>

<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f9f9f9;">
    <table width="100%" cellpadding="0" cellspacing="0" style="border-collapse: collapse; padding: 20px;">
        <tr>
            <td align="center">
                <table width="600px" cellpadding="0" cellspacing="0" style="background-color: #ffffff; padding: 20px; border-radius: 8px;">
                    
                    <!-- Logo Section -->
                    <tr>
                        <td style="text-align: center; padding-bottom: 20px;">
                            <img src="https://your-logo-url.com/logo.png" alt="Your Company Logo" width="150px" style="border-radius: 8px;">
                        </td>
                    </tr>

                    <!-- Greeting Section -->
                    <tr>
                        <td style="text-align: center;">
                            <h1 style="font-size: 26px; color: #333333;">Your Event Booking is Confirmed!</h1>
                        </td>
                    </tr>

                    <!-- Booking Confirmation Section -->
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-size: 16px; color: #666666;">Hello <strong>{{ $first_name }} {{ $last_name }}</strong>,</p>
                            <p style="font-size: 16px; color: #666666;">Thank you for booking your spot at <strong>{{ $eventName }}</strong>.</p>
                        </td>
                    </tr>

                    <!-- Event Details Section -->
                    <tr>
                        <td style="padding-top: 20px; text-align: center;">
                            <p style="font-size: 16px; color: #666666;">Event Date: <strong>{{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</strong></p>
                            <p style="font-size: 16px; color: #666666;">Your booking ID is: <strong>{{ $booking_id }}</strong>.</p>
                        </td>
                    </tr>

                    <!-- Call to Action -->
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <a href="#" style="background-color: #f05537; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; display: inline-block;">View Event Details</a>
                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <p style="font-size: 16px; color: #666666;">We look forward to seeing you at the event!</p>
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
