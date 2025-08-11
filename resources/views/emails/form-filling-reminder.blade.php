@extends('vendor.mail.html.layout')

@section('header', 'Prompt Notification')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="https://res.cloudinary.com/dkwbhwkzn/image/upload/v1735925403/IandM-black-bg-logo-removebg-preview_tf4ay4.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

  <!-- Candidate Details Section -->
  <h1>Prompt To Users.</h1>

<!-- Message Section -->
<h3>Message:</h3>
<div class="panel">
    <span>{!! $usersPrompt['message'] !!}</span>
</div>

<hr>



<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
