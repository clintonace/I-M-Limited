<!DOCTYPE html
    PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>{{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="color-scheme" content="light">
    <meta name="supported-color-schemes" content="light">
    <style>
        @media only screen and (max-width: 600px) {
            .inner-body {
                width: 100% !important;
            }

            .footer {
                width: 100% !important;
            }
        }

        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>

<style>
    /* Basic styling for the email */
    body {
        font-family: Arial, sans-serif;
        color: #333;
        line-height: 1.5;
        margin: 0;
        padding: 0;
    }
    .container {
        width: 100%;
        padding: 20px;
    }
    .table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
    }
    .table th, .table td {
        padding: 8px;
        border: 1px solid #ddd;
        text-align: left;
    }
    .table th {
        background-color: #f2f2f2;
    }
    h1, h2, h3 {
        color: #333;
    }
    .panel {
        padding: 10px;
        border: 1px solid #ddd;
        background-color: #f9f9f9;
        margin-bottom: 20px;
    }
    .footer {
        margin-top: 20px;
    }
</style>
</head>

<body>

    <body>
        <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center">
                    <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                        <!-- Header -->
                        {{ $header ?? '' }}

                        <!-- Email Body -->
                        <tr>
                            <td class="body" width="100%" cellpadding="0" cellspacing="0"
                                style="border: hidden !important;">
                                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0"
                                    role="presentation">
                                    <!-- Body content -->
                                    <tr>
                                        <td class="content-cell">
                                            @yield('content')
                                            <!-- This replaces $slot -->
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>

                        <!-- Footer -->
                        {{ $footer ?? '' }}
                    </table>
                </td>
            </tr>
        </table>
    </body>

</html>
