@extends('vendor.mail.html.layout')

@section('header', 'Candidate Request')

@section('content')

<div style="text-align: center; margin-bottom: 20px;">
    <img src="cid:IandM-no-white-bg-logo.png" alt="IandM Logo" style="max-width: 100%; height: auto;">
</div>

  <!-- Candidate Details Section -->
  <h1>Candidate Details Request</h1>
  <p>A client is interested in the service of the following candidate:</p>
  <hr>

  <h3>Candidate Details:</h3>
<table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; margin-bottom: 20px;">
    <tr>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Field</th>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Details</th>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Name</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $information->first_name }} {{ $information->last_name }}</td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Email</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $user->email }}</td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Phone Number</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $information->phone }}</td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Skills</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ implode(', ', explode(',', $information->professional_skills)) }}</td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Country</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $information->country }}</td>
    </tr>

</table>


<hr>

<!-- Message Section -->
<h3>Message from the Company Requesting the Candidate:</h3>
<div class="panel">
    <span>{{ $message }}</span>
</div>

<hr>

 <!-- Client Contact Details -->
 <h3>Client Contact Details:</h3>
<table style="width: 100%; border-collapse: collapse; border: 1px solid #ddd; margin-bottom: 20px;">
    <tr>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Field</th>
        <th style="text-align: left; padding: 8px; border: 1px solid #ddd; background-color: #f2f2f2;">Details</th>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Company Name</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $req->company_name }}</td>
    </tr>
    <tr>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">Company Email</td>
        <td style="text-align: left; padding: 8px; border: 1px solid #ddd;">{{ $req->company_email }}</td>
    </tr>
</table>

<hr>

<p>Thank you,</p>
<p><strong>IandM Limited</strong></p>

@endsection
