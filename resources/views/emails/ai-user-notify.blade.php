@extends('vendor.mail.html.layout')

@section('header', 'AI User Account Created')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <!-- <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;"> -->
</div>

  <!-- Candidate Details Section -->
  <h1>AI User Account Created</h1>
  <p>This is a notice that your account has been created. Find below the details of your login.</p>

  <!-- <hr> -->
  <h3>Details:</h3>
  <!-- <hr> -->

<div class="panel">
    <span>Name: {{ $message['name'] }}</span>
    <br>
    <span>Email: {{ $message['email'] }}</span>
    <br>
    <!-- <span>Password: {{ $message['password'] }}</span> -->
</div>

<hr>
<div class="panel">
    <span>You can change the following details in the web app, click on the link to access dashboard.</span>

    <br>
    <a href={{$url}} target="_blank" style="cursor: pointer;" rel="noopener noreferrer">Click here</a>
    <!-- <span>{{$url}}</span> -->
    <!-- <span> </span> -->
</div>
<hr>

<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
