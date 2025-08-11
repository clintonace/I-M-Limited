@extends('vendor.mail.html.layout')

@section('header', 'Booking Notification')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

  <!-- Candidate Details Section -->
  <h1>Mail Recieved Response</h1>
 
<hr>

<!-- Message Section -->
<h3>Message:</h3>
<div class="panel">
    <span>{{ $message['response'] }}</span>
</div>

<hr>


<hr>

<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
