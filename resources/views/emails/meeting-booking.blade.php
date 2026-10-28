<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Meeting Booking</title>
</head>
<body style="font-family: Arial, sans-serif; color: #222; line-height: 1.6;">

    @if ($recipientType === 'admin')
        <h2 style="color: #E94E1B;">New Meeting Booking</h2>

        <p>A client has successfully booked a meeting.</p>
    @else
        <h2 style="color: #E94E1B;">Meeting Booking Confirmed</h2>

        <p>Your meeting has been booked successfully. Here are your meeting details.</p>
    @endif

    <p><strong>Client Email:</strong> {{ $clientEmail }}</p>
    <p><strong>Date:</strong> {{ $meetingDate }}</p>
    <p><strong>Start Time:</strong> {{ $startTime }}</p>
    <p><strong>End Time:</strong> {{ $endTime }}</p>

    @if ($notes)
        <p><strong>Notes:</strong> {{ $notes }}</p>
    @endif

    @if ($recipientType !== 'admin')
        <p>Thank you for booking with us. We look forward to meeting with you.</p>
    @endif

    <p style="color: #777;">This is an automated email from I&M Limited.</p>

</body>
</html>