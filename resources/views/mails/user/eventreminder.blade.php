<!DOCTYPE html>
<html>
<head>
    <title>Event Reminder</title>
</head>
<body>
    <h1>Hello {{ $first_name }} {{ $last_name }},</h1>
    <p>This is a reminder for your upcoming event:</p>
    <p><strong>Event:</strong> {{ $event_title }}</p>
    <p><strong>Date:</strong> {{ \Carbon\Carbon::parse($event_date)->format('F d, Y') }}</p>
    <p>Don't forget to attend!</p>
</body>
</html>
