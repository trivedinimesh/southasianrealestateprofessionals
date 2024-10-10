<!DOCTYPE html>
<html>
<head>
    <title>Event Reminder</title>
</head>
<body>
    <h1>Hello {{ $user_name }},</h1>
    <p>This is a reminder for your upcoming event:</p>
    <p><strong>Event:</strong> {{ $event_name }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event_date)->format('F d, Y') }}</p>
    <p>Don't forget to attend!</p>
</body>
</html>
