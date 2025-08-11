@extends('vendor.mail.html.layout')

@section('header', 'Booking Cancellation')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

  <!-- Candidate Details Section -->
  <h1>Meeting Cancelled</h1>
  <p>This meeting was cancelled recently. Find below the details of the meeting.</p>
  <hr>

  <h3>Details:</h3>
<table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; margin-bottom: 20px;">
    <tr>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Field</th>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Details</th>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> Meeting Link</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $message['link']}} </td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> Start date</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $message['start_date']}} </td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> End date</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $message['end_date']}} </td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> Meeting Participants</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $message['participants']}} </td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> Start time</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ date('h:i A', strtotime($message['start_time'])) }}</td>
        {{-- <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $message['start_time']}} </td> --}}
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;"> End time</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ date('h:i A', strtotime($message['end_time'])) }} </td>
    </tr>

</table>


<hr>

<!-- Message Section -->
<h3>Description of the meeting:</h3>
<div class="panel">
    <span>{{ $message['details'] }}</span>
</div>

<hr>


<hr>

<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
