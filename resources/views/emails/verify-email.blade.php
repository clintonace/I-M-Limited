@extends('vendor.mail.html.layout')

@section('header', 'Email Verification')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

<hr>

<!-- Verification Email Content -->
<h3>Hello, {{ $user->name }}</h3>

<p>
    Please verify your email address to complete your registration and access all features. Click the button below to verify your email:
</p>

<!-- Verification Button -->
<div style="text-align: center; margin: 20px 0;">
    <a href="{{ $url }}"
       style="display: inline-block; padding: 10px 20px; font-size: 16px; font-weight: bold; color: #ffffff; background-color: #007bff; border-radius: 5px; text-decoration: none;">
        Verify Email Address
    </a>
</div>

<p>
    If you did not create an account, no further action is required.
</p>

<hr>

<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection

