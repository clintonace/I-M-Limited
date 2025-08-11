@extends('vendor.mail.html.layout')

@section('header', 'Candidate Reschedule mail')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

  <!-- Candidate Details Section -->
  <h1>Meeting Reschedule Mail</h1>

<hr>

<!-- Message Section -->
<h3>Message:</h3>
<div class="panel">
    <span>{{ $message['message'] }}</span>
</div>
<h3>Email:</h3>
<div class="panel">
    <span>{{ $message['user'] }}</span>
</div>
<h3>Event Id:</h3>
<div class="panel">
    <span>{{ $message['event'] }}</span>
</div>


<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
