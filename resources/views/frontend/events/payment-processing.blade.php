@extends('layouts.frontend-dashboard')
@section('title')
    Processing Payment
@endsection

@section('body')
<style>
    .container {
        text-align: center;
        margin-top: 50px;
    }
    .loading-gif {
        width: 100px;
        margin: 20px auto;
    }
    .message {
        font-size: 18px;
        font-weight: bold;
        color: #555;
    }
</style>

<div class="container">
    <h1>Processing Payment</h1>
    <p class="message">Don't refresh. Confirm your payment request in email.</p>
    <img id="status-gif" class="loading-gif" src="{{ URL::asset('build/media/Loading Animation.gif') }}" alt="Loading...">
    <div id="status-message">Checking payment status...</div>
</div>

<script>
    let checkCount = 0;
    const maxCheckTime = 300; // 5 minutes (300 seconds)
    const checkInterval = 10; // Fetch every 10 seconds

    function checkPaymentStatus() {
        fetch(`/check-payment-status/{{ $event->id }}/{{ $invoiceId }}`)
            .then(response => response.json())
            .then(data => {
                if (data.status === 'PAID') {
                    document.getElementById('status-message').innerText = "Payment confirmed! Redirecting...";
                    document.getElementById('status-gif').src = "{{ URL::asset('build/media/Success.gif') }}";
                    setTimeout(() => {
                        window.location.href = '{{ route('booking-confirmation') }}';
                    }, 2000);
                } else if (data.status === 'FAILED' || checkCount >= (maxCheckTime / checkInterval)) {
                    document.getElementById('status-message').innerText = "Payment failed. Please try again.";
                    document.getElementById('status-gif').src = "{{ URL::asset('build/media/Failed Cross.gif') }}";
                } else {
                    checkCount++;
                    setTimeout(checkPaymentStatus, checkInterval * 1000);
                }
            })
            .catch(() => {
                document.getElementById('status-message').innerText = "Error checking payment status. Please try again later.";
            });
    }

    checkPaymentStatus();
</script>
@endsection
