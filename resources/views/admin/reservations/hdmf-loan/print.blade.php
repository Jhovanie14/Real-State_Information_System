<!DOCTYPE html>
<html>

<head>
    <title>Maria Homes | REIS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Infinit Real Estate Information System">
    <meta name="author" content="Infinit Solutions">
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    {{-- <script src="https://kit.fontawesome.com/98ae61a98f.js" crossorigin="anonymous"></script> --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" />
    <link rel="stylesheet"
        href="{{ asset('bootstrap/admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/admin/plugins/jqvmap/jqvmap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/admin/plugins/select2/css/select2.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('bootstrap/admin/dist/css/adminlte.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/admin/plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/admin/plugins/summernote/summernote-bs4.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('bootstrap/admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">

    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
{{--

<body onload="window.print();"> --}}

<body>
    <div class="container">

        <div class="wrapper">
            <section class="invoice">
                <div class="d-flex justify-content-between align-items-center">
                    <div>

                        <h5 class="h1" style="font-size: 40px">Maria Homes Development Corporation</h5>
                        <h5 class="h5 pl-1">RESERVATION, EQUITY AND PROCESSING CONTRACT</h5>
                        <h5 class="pl-1">{{ Carbon\Carbon::now()->format('F d, Y') }}</h5>
                    </div>
                    <img class="roundedSmallImage border" src="{{ asset('/storage/icons/mariahomes.png') }}"
                        alt="">
                </div>
                <div class="d-flex justify-content-center">

                    <div class="col-12">
                        <div>
                            {{-- <p
                                    style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong><span style="font-size:19px;">RESERVATION, EQUITY AND PROCESSING
                                            CONTRACT</span></strong>
                                </p>
                                <p
                                    style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                    <strong><span style="font-size:19px;">(IN-HOUSE ACCOUNT ONLY)</span></strong>
                                </p> --}}
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong><span style="font-size:19px;">&nbsp;</span></strong>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong><span style="font-size:19px;">&nbsp;</span></strong>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">PROJECT&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;_____________________________</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">LOCATION&nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp;_____________________________</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;_____________________________</span>
                            </p>
                            <br><br>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <ol start="1"
                                    style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:26px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <strong><span style="font-size:16px;">Name of the
                                                Buyer/s&nbsp;:</span></strong><span style="font-size:16px;">&nbsp;
                                            {{ $reservation->client->first_name }}&nbsp;{{ $reservation->client->middle_name }}&nbsp;{{ $reservation->client->last_name }}&nbsp;{{ $reservation->client->suffix }}
                                        </span>
                                    </li>
                                </ol>
                            </div>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Address&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;:
                                    &nbsp;{{ $reservation->client->present_address }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Contact No&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp;&nbsp;: &nbsp;{{ $reservation->client->contact_no }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">TIN No.&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:
                                    &nbsp;{{ $reservation->client->tin_no }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Passport No.&nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:
                                    &nbsp;{{ $reservation->client->passport_no }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Passport Validity&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
                                    &nbsp;:
                                    &nbsp;{{ Carbon\Carbon::parse($reservation->client->passport_validity)->format('F
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        d, Y') }}</span>
                            </p>

                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Other ID&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:&nbsp;&nbsp;_____________________________________________</span>
                            </p>
                            <br>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Broker&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:&nbsp;&nbsp;{{ $reservation->client->agent->broker->name }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Contact No.: &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:&nbsp;&nbsp;{{ $reservation->client->agent->broker->contact_no }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Agent&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:&nbsp;&nbsp;{{ $reservation->client->agent->name }}</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Contact No.: &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:&nbsp;&nbsp;{{ $reservation->client->agent->contact }}</span>
                            </p>
                            {{-- <p
                                    style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                    <span style="font-size:16px;">Broker&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
                                        &nbsp; &nbsp; &nbsp;
                                        &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:
                                        &nbsp;{{$reservation->client->broker->name}}
                                        &nbsp;Contact No.:
                                        _____________</span>
                                </p>
                                <p
                                    style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                    <span style="font-size:16px;">Agent &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;: &nbsp;____________________
                                        &nbsp;Contact No.: _____________ &nbsp; &nbsp; &nbsp;</span>
                                </p> --}}
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <ol start="2"
                                    style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:26px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <strong><span style="font-size:16px;">PROPERTY DESCRIPTIONS:</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">LOT:</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Lot
                                    Area&nbsp;&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;{{ $reservation->floor_area }}m&#178;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Block
                                    No.&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;{{ $reservation->blk_no }}</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Lot
                                    No.&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;{{ $reservation->lot_no }}</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Title
                                    No.&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;{{ $reservation->title_no }}</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">HOUSE:</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;Model&nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;:&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp;{{ $reservation->model }}</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;Floor
                                    Area&nbsp;
                                    &nbsp; &nbsp; &nbsp;:&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;{{ $reservation->floor_area }}m&#178;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <ol start="3"
                                    style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:26px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <strong><span style="font-size:16px;">CONTRACT PRICE AND TERMS OF
                                                PAYMENTS:</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <br>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Reservation Fee&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;:
                                    &nbsp;
                                    <strong>&#8369; {{ number_format($reservation->reservation_fee, 2) }}</strong>
                                    &nbsp; &nbsp; &nbsp; &nbsp;Holding Date from:&nbsp;
                                    <strong>{{ Carbon\Carbon::parse($reservation->created_at)->format('F d, Y') }}</strong>
                                    &nbsp;to:&nbsp;
                                    <strong>{{ Carbon\Carbon::parse($reservation->created_at)->addMonth()->format('F d, Y') }}
                                    </strong></span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Contract Price &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;: &nbsp;
                                    {{-- change to word --}}
                                    _____________________ (
                                    <strong>Php {{ number_format($reservation->total_contract_price, 2) }}
                                    </strong>

                                    )
                                </span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">Equity &nbsp; :
                                    <strong>
                                        &#8369; {{ number_format($reservation->equity_total, 2) }}
                                    </strong>
                                    &nbsp;Due Date:&nbsp;
                                    <strong>
                                        {{ Carbon\Carbon::parse($reservation->equity_end)->format('F d, Y') }}
                                    </strong>
                                </span>
                            </p>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <ul style="list-style-type: disc;margin-left:44px;">
                                @if ($reservation->equity_term == 1)
                                    <li><span style="font-size:16px;">Spot Cash
                                            ___________________________________________(
                                            <strong>
                                                Php
                                                {{ number_format($reservation->equity_monthly, 2) }}/mo.
                                            </strong>)
                                        </span></li>
                                @elseif($reservation->equity_term == 6)
                                    <li><span style="font-size:16px;">Six (6) months to pay @
                                            <strong>
                                                &#8369;
                                                {{ number_format($reservation->equity_monthly, 2) }}/mo.
                                            </strong>
                                            Starting
                                            <strong>
                                                {{ Carbon\Carbon::parse($reservation->equity_start)->format('F d, Y') }}
                                            </strong>
                                            with Post-dated Checks (PDC) duly issued to cover the following
                                            installments up to
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_end)->format('F d, Y') }}
                                            </strong>.
                                        </span></li>
                                @elseif($reservation->equity_term == 12)
                                    <li><span style="font-size:16px;">Twelve (12) months to pay @
                                            <strong>
                                                &#8369;
                                                {{ number_format($reservation->equity_monthly, 2) }}/mo. </strong>
                                            Starting
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_start)->format('F d, Y') }}
                                            </strong>
                                            with Post-dated Checks (PDC) duly issued to cover the
                                            following
                                            installments up to
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_end)->format('F d, Y') }}
                                            </strong>.
                                        </span></li>
                                @elseif($reservation->equity_term == 18)
                                    <li><span style="font-size:16px;">Eighteen (18) months to pay @
                                            <strong>
                                                &#8369;
                                                {{ number_format($reservation->equity_monthly, 2) }}/mo.</strong>
                                            Starting
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_start)->format('F d, Y') }}
                                            </strong>
                                            with Post-dated Checks (PDC) duly issued to cover the
                                            following
                                            installments up to
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_end)->format('F d, Y') }}
                                            </strong>.
                                        </span></li>
                                @else
                                    <li><span style="font-size:16px;">({{ $reservation->equity_term }}) months to pay
                                            @
                                            <strong>
                                                &#8369;
                                                {{ number_format($reservation->equity_monthly, 2) }}/mo.</strong>
                                            Starting
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_start)->format('F d, Y') }}
                                            </strong>
                                            with Post-dated Checks (PDC) duly issued to cover the
                                            following
                                            installments up to
                                            <strong>

                                                {{ Carbon\Carbon::parse($reservation->equity_end)->format('F d, Y') }}
                                            </strong>.
                                        </span></li>
                                @endif
                            </ul>
                            <br>

                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <ol start="4"
                                    style="margin-bottom:0cm;list-style-type: upper-alpha;margin-left:26px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <strong><span style="font-size:16px;">OTHER TERMS AND
                                                CONDITIONS:</span></strong>
                                    </li>
                                </ol>
                            </div>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <div
                                style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                <ol style="margin-bottom:0cm;list-style-type: decimal;margin-left:44px;">
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">The above-named VENDEE/s are jointly and
                                            severally liable in the performance of their obligations as provided for
                                            under this contract.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">The holding period of reservation fee is valid
                                            only
                                            for <strong>THIRTY DAYS</strong> from the date of reservation.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">In the event of failure of the VENDEE to pay 3
                                            succeeding months equity on the scheduled due dates as indicated herein
                                            above, then this Contract shall expire by itself without the need to notify
                                            the VENDEE, and the VENDOR shall be at liberty to sell/dispose the subject
                                            property/properties of this contract to another party. In such a case, any
                                            amount paid under this contract shall be FORFEITED in favor of the VENDOR as
                                            liquidated damages, without the benefit of refund to the VENDEE.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">In the event of default or delay in the
                                            payment of any stipulated amount or amounts due under this contract, a
                                            penalty shall be due thereon at the rate equivalent to three (3%) compounded
                                            interest per month until full payment thereof without the need of any demand
                                            or the performance of further acts on the part of <strong>MARIA HOMES
                                                DEVELOPMENT
                                                CORPORATION.</strong></span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">The VENDOR will automatically deposit all PDC
                                            to its corresponding due dates, any penalties incurred by the VENDEE due to
                                            insufficient funds or non-submission of written letter of request to delay
                                            the check for deposit, the VENDOR is no way be held liable for such
                                            penalties incurred by the VENDOR to its bank account.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">That in the event of holding the checks due
                                            for
                                            deposit, the VENDOR will only hold the payment for strictly five (5)
                                            working
                                            days.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">That in the event of withdrawal from the
                                            transaction-subject of this contract by the VENDEE due to change of heart,
                                            marital issues , emergency circumstances, unemployment
                                            (resignation/retrenchment/closing of business) and migration, signified the
                                            VENDOR either; verbally or in writing , any and all payments made prior to
                                            said withdrawal shall be considered 100% FORFIETURED in favor of the VENDOR
                                            as LIQUIDATED DAMAGES without the benefit of refund and without the need of
                                            any notice, demand, or any other act or in part of the VENDOR.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">That in the event of withdrawal from this
                                            transition, the VENDOR is given the option to look for new buyer to assume
                                            the unit within 30 days from the last payment transaction. A written letter
                                            of intention must be submitted to the VENDOR, subject for approval.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">That only during equity schedule, the option for
                                            assume is offered. When the VENDOR has not yet started processing the
                                            housing loan.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">If granted approval, the original VENDEE must pay
                                            an additional twenty thousand pesos (20,000.00) as additional administrative
                                            fee on top of the contract price.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">Strict compliance that all VENDEE granted to
                                            offer their units for assumed must be strictly coordinated and done in Davao
                                            main office only. Failure to comply will result to forfeiture of all
                                            original VENDEE payments and denied of the new assumer claims.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">All official receipt (OR) issued to the original
                                            VENDEE must be surrendered to Davao main office only.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">Commission released to the broker will be
                                            deducted against the account of the VENDEE. After such deduction, the net
                                            total payment will be determined as basis for assumed units.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">All payments shall be paid directly to
                                            <strong>MARIA
                                                HOMES DEVELOPMENT CORPORATION</strong> Davao office. And always require
                                            the Official
                                            Receipt of the corresponding payment. Or direct deposit to the VENDORS bank
                                            account. Presentation of original deposit slip is required before an
                                            official receipt will be issued.
                                        </span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">It is understood that any representation/s or
                                            warranty made to the VENDEE by the broker or agent who brokered the sale not
                                            embodied herein shall not be binding upon the VENDOR unless made in writing
                                            and signed by the VENDOR.</span>
                                    </li>
                                    <br><br><br><br><br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">Any provision to the contrary notwithstanding,
                                            the VENDEE agrees and acknowledge that the VENDOR has the right to cancel
                                            and rescind this Reservation, Equity And Processing Contract, for any cause
                                            whatsoever at any time before issuance of the House and Lot Purchase
                                            Agreement Contract or Deed of Sale, by giving written notice of its
                                            intention to do so, subject to the refund of all payment/s made by the
                                            Buyer/s.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">Further, it is hereby understood that this
                                            Contract between the VENDEE and the VENDOR, any oral stipulations,
                                            representations, agreements or promises shall not bind the VENDOR.</span>
                                    </li>
                                    <br><br>
                                    <li
                                        style='margin-top:0cm;margin-right:0cm;margin-bottom:10.0pt;margin-left:0cm;line-height:115%;font-size:15px;font-family:"Calibri",sans-serif;'>
                                        <span style="font-size:16px;">If vendee unit is taken out with existing equity
                                            to the vendor, the client is given three(3) months from the date of take out
                                            to fully pay their balance. Otherwise, assumption of mortgage contract will
                                            prevail.
                                        </span>
                                    </li>
                                </ol>
                            </div>


                            <br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <br><br><br><br><br><br>
                            <p
                                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;text-indent:18.0pt;'>
                                <strong><span style="font-size:16px;">IN WITNESS WHEREOF</span></strong><span
                                    style="font-size:16px;">, the parties hereto have signed this Reservation and
                                    Down Payment Contract this</span>
                                <span>
                                    <strong>{{ Carbon\Carbon::parse(Carbon\Carbon::now())->format('F d,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            Y') }}</strong>
                                    Davao City,
                                    Philippines.</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <div class="d-flex justify-content-center mb-5 pb-5">
                                <div class="d-flex flex-column align-items-center mx-5">
                                    <p
                                        style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                        <span style="font-size:16px;">_________________________</span>
                                    </p>
                                    <p
                                        style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                        <span style="font-size:16px;"> Principal VENDEE</span>
                                    </p>
                                </div>
                                <div class="d-flex flex-column align-items-center mx-5">
                                    <p
                                        style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                        <span style="font-size:16px;">_________________________</span>
                                    </p>
                                    <p
                                        style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                        <span style="font-size:16px;"> Spouse VENDEE</span>
                                    </p>
                                </div>
                            </div>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong><span style="font-size:16px;">MARIA HOMES DEVELOPMENT
                                        CORPORATION</span></strong>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">Herein represented by:</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong><span style="font-size:16px;">Maria Linda V. Jocson</span></strong>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">President/CEO</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">Signed in the presence of:</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">____________________ and ____________________</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:center;'>
                                <strong><span style="font-size:16px;">ACKNOWLEDGEMENT</span></strong>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;'><span
                                    style="font-size:16px;">&nbsp;</span></p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">REPUBLIC OF THE PHILIPPINES)</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">CITY &nbsp; &nbsp;OF &nbsp; &nbsp; &nbsp;DAVAO &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;)S.S.</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">x--------------------------------------x</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;<strong>BEFORE
                                        ME</strong>, this _____________________________personally appeared the
                                    following
                                    persons with their Community Tax Certificated/Identification Number, to
                                    wit:</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Name&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;TIN/SSS/Driver License&nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp;Issued on/Issued at</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Maria Linda V. Jocson&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;___________________&nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp;&nbsp;____________________</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">_______________________&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp;&nbsp;___________________&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;____________________</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;All
                                    known to me
                                    known to be the same persons who executed the foregoing Reservation and Down
                                    Payment
                                    Contract and that they have acknowledge that the same is their own free and
                                    voluntary
                                    act and deed.</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;This
                                    instrument,
                                    consisting, of three (3) pages including this page on which this acknowledgment
                                    is
                                    written has been signed on the left margin of each page thereof by the parties
                                    and their
                                    instrumental witnesses sealed with my notarial seal.</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp; &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Doc. No.&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;_______;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Page No.&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;&nbsp;_______;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Book No.&nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;_______;</span>
                            </p>
                            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                                <span style="font-size:16px;">Series of &nbsp; &nbsp; &nbsp; &nbsp;
                                    &nbsp;_______.</span>
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
