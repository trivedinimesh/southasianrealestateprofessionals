<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscription Alert</title>
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
                            <h1 style="font-size: 26px; color: #333333;">New Subscription</h1>
                        </td>
                    </tr>
                    <tr>
                        <td style="text-align: center;">
                            <p style="font-size: 16px; color: #666666;">User <strong>{{ $first_name }} {{ $last_name }}</strong> has subscribed to the plan <strong>{{ $planName }}</strong>.</p>
                        </td>
                    </tr>

                    <!-- Subscription Details with Card Design -->
                    <tr>
                        <td style="padding-top: 20px; text-align: center;">
                            <div style="background-color: #f9f9f9; border: 1px solid #dddddd; border-radius: 8px; padding: 20px; display: inline-block;">
                                <h2 style="font-size: 22px; color: #333333;">Subscription Details</h2>
                                <p style="font-size: 16px; color: #666666;">Email ID: {{ $email }}</p>
                                <p style="font-size: 16px; color: #666666;">Starts at: {{ \Carbon\Carbon::parse($startsAt)->format('F d, Y') }}</p>
                                <p style="font-size: 16px; color: #666666;">Ends at: {{ \Carbon\Carbon::parse($endsAt)->format('F d, Y') }}</p>
                            </div>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding-top: 20px;">
                            <hr style="border: 1px solid #eeeeee;">
                        </td>
                    </tr>

                    <!-- Call to Action -->
                    <tr>
                        <td style="text-align: center; padding-top: 20px;">
                            <a href="https://sarep.aliabcybersecurity.co.in/admin/membership/list" style="background-color: #f05537; color: white; padding: 10px 20px; border-radius: 4px; text-decoration: none; display: inline-block;">Manage Subscription</a>
                        </td>
                    </tr>

                    <!-- Footer Section -->
                    <tr>
                        <td style="padding-top: 40px; text-align: center;">
                            <p style="font-size: 14px; color: #999999;">If you have any questions, contact us at <a href="mailto:support@example.com" style="color: #3f60e7;">support@example.com</a>.</p>
                            <p style="font-size: 14px; color: #999999;">Thank you for subscribing!</p>
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
