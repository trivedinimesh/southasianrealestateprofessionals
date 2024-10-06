<!DOCTYPE html>
<html>
<head>
    <title>New Event Alert</title>
</head>
<body>
    <h1>New Event</h1>
    <p>A new event has been added <strong>{{ $eventTitle }}</strong>.</p>
    <p>Event Location: {{ $address }}, {{ $city }}, {{ $state }}, {{ $country }}, {{ $pincode }}</p>
    <p>Event Date: {{ \Carbon\Carbon::parse($date)->format('F d, Y') }}</p>
    <p>Book you seats now!</p>
</body>
</html>
