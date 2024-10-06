<!DOCTYPE html>
<html>
<head>
    <title>New Event Booking Alert</title>
</head>
<body>
    <h1>New Event Booking</h1>
    <p>User <strong>{{ $first_name }} {{ $last_name }}</strong> has booked to the event <strong>{{ $eventName }}</strong>.</p>
    <p>Email ID: {{ $email }}</p>
    <p>Event Date: {{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</p>
</body>
</html>
