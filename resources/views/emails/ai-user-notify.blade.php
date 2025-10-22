@extends('vendor.mail.html.layout')

@section('header', 'PDF CONVERTER USER CREATION ALERT')

@section('content')
    <div style="font-family: 'Segoe UI', Arial, sans-serif; color: #333; background-color: #f9fafb; padding: 30px; border-radius: 12px;">
        
        <!-- Header -->
        <h1 style="color: #ff7a00; font-size: 24px; font-weight: 700; margin-bottom: 10px;">
            PDF CONVERTER USER CREATED
        </h1>
        <p style="font-size: 15px; color: #555; line-height: 1.6;">
            We’re excited to let you know that your PDF CONVERTER user account has been successfully created.
            Below are your login details:
        </p>

        <!-- Details Card -->
        <div style="background: #ffffff; border: 1px solid #e5e7eb; border-radius: 10px; padding: 20px; margin-top: 20px; margin-bottom: 25px; box-shadow: 0 2px 6px rgba(0,0,0,0.05);">
            <h3 style="font-size: 18px; color: #111827; margin-bottom: 10px;">Account Details</h3>
            <p style="margin: 5px 0;"><strong>Name:</strong> {{ $message['name'] }}</p>
            <p style="margin: 5px 0;"><strong>Email:</strong> {{ $message['email'] }}</p>
            {{-- <p style="margin: 5px 0;"><strong>Password:</strong> {{ $message['password'] }}</p> --}}
        </div>

        <!-- Dashboard Access -->
        <div style="background: #fff3e6; border-left: 4px solid #ff7a00; border-radius: 8px; padding: 20px; margin-bottom: 25px;">
            <p style="font-size: 15px; color: #444;">
                You can update your details and access your dashboard via the link below:
            </p>
            <a href="{{ $url }}" target="_blank" rel="noopener noreferrer"
               style="display: inline-block; margin-top: 10px; background-color: #ff7a00; color: #fff; text-decoration: none; padding: 10px 22px; border-radius: 8px; font-weight: 600;">
                Access Dashboard
            </a>
        </div>

        <!-- Footer -->
        <p style="margin-top: 25px; font-size: 15px; color: #555;">
            Thank you,<br>
            <strong style="color: #ff7a00;">IandM Limited</strong>
        </p>
    </div>
@endsection
