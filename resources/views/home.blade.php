@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <br><br><br>
            <div class="card shadow-lg">
                <div class="card-header bg-success text-white"><h1>{{ __('Dashboard') }}</h1></div>

                <div class="card-body">
                

                    <center>
                        <h4>Welcome, {{ Auth::user()->name }}</h4>
                        <hr>
                        <p>Name: {{ Auth::user()->name }}</p>
                        <p>Email: {{ Auth::user()->email }}</p>

                        <!-- checking if otp is still active -->
                        @if( isset($otp) )
                        <h4 id='token'>Generated OTP: {{ $otp }}</h4>
                        <h2 id="countdown">30</h2>
                        @else
                        <h2>Token Expired</h2>

                        @endif

                        
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>



<script>
document.addEventListener("DOMContentLoaded", function() {
    // Set the initial time
    let timeRemaining = 30;

    // Get the countdown element
    const countdownElement = document.getElementById('countdown');

    // Function to update the countdown
    function updateCountdown() {
        // Update the countdown text
        countdownElement.textContent = timeRemaining;

        // Check if time has expired
        if (timeRemaining <= 0) {
            clearInterval(countdownInterval);
            countdownElement.textContent = 'Token Expired';
            document.getElementById('token').textContent='';
        } else {
            // Decrement the remaining time
            timeRemaining--;
        }
    }

    // Update the countdown initially
    updateCountdown();

    // Set up the interval to update the countdown every second
    const countdownInterval = setInterval(updateCountdown, 1000);
});
</script>

@endsection
