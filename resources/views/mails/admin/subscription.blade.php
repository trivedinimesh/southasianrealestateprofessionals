<!DOCTYPE html>
<html>
<head>
    <title>New Subscription Alert</title>
</head>
<body>
    <h1>New Subscription</h1>
    <p>User <strong>{{ $first_name }} {{ $last_name }}</strong> has subscribed to the plan <strong>{{ $planName }}</strong>.</p>
    <p>Email ID: {{ $email }}</p>
    <p>Subscription starts at: {{ \Carbon\Carbon::parse($startsAt)->format('F d, Y') }}</p>
    <p>Subscription ends at: {{ \Carbon\Carbon::parse($endsAt)->format('F d, Y') }}</p>
</body>
</html>
