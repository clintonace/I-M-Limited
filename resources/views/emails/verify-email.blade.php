@extends('vendor.mail.html.layout')

@section('header', 'Email Verification')

@section('content')

<hr>

<!-- Verification Email Content -->
<h3>Hello, {{ $user->name }}</h3>

<p>
    Please verify your email address to complete your registration and access all features.
</p>

<p>
    Use the 5-digit verification code below to complete the verification process.
    This code will expire in <strong>5 minutes</strong>.
</p>

<!-- Verification Code Box -->
<div style="text-align: center; margin: 30px 0;">
    <div style="
        display: inline-block;
        padding: 15px 25px;
        font-size: 28px;
        font-weight: bold;
        letter-spacing: 10px;
        color: #333333;
        background-color: #f4f6f8;
        border: 1px dashed #cccccc;
        border-radius: 8px;
        font-family: 'Courier New', monospace;
    ">
       
    </div>
</div>

<p style="text-align: center; color: #666666;">
    Enter this code on the verification screen to continue.
</p>

<p>
    If you did not create an account, no further action is required.
</p>

<hr>

<p>Thank you,</p>
<p><strong>I&amp;M Limited</strong></p>

@endsection
