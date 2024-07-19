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


{{-- <body onload="window.print();"> --}}

<body>
    {{-- <body> --}}
    <div class="container">
        <div class="wrapper">
            <div class="d-flex justify-content-start align-items-center">
                <img class="roundedSmallImage mr-5 border" src="{{ asset('/storage/icons/mariahomes.png') }}"
                    alt="">
                <div>

                    <h5 class="h1">Maria Homes Development Corporation</h5>
                    <h5 class="pl-1">{{ Carbon\Carbon::now()->format('F d, Y') }}</h5>
                </div>
                <div class="text-center">
                    {{-- <h5>Client Image</h5> --}}
                </div>
            </div>

            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;'>
                <strong>SALES AGENCY/BROKERS AGREEMENT</strong>
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;'>
                <strong>&nbsp;</strong>
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;'>
                <strong>KNOW ALL MEN BY THESE PRESENTS:</strong>
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                &nbsp;</p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                This SALES AGENCY/BROKER AGREEMENT is entered into this
                <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('jS') }}</b> day of
                <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('F') }}</b>,
                <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y') }}</b> in Davao
                City, Philippines, by and between:
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                <strong>MARIA HOMES DEVELOPMENT CORPORATION</strong>, a corporation duly organized and existing under
                and by virtue of the laws of the Republic of the Philippines, with office address at Door 5 Yolanda
                bldg., Sobrecarey St., B.O Obrero, Davao City, herein represented by its President, <strong>MARIA LINDA
                    V. JOCSON</strong>, hereinafter referred to as the <strong>&quot;DEVELOPER&rsquo;&apos;</strong>;
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;'>
                and</p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                <b><u>{{ $broker->name }}</u></b>, of legal age, Filipino, single / married, with residential address
                at <b><u>{{ $broker->address }}</u></b>, a Licensed Real Estate Broker with PRC License
                No. <b><u>{{ $broker->prc_license }}</u></b>, hereinafter referred to as the <strong>&quot;ACCREDITED
                    BROKER&quot;</strong>;
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:center;'>
                <strong>WITNESSETH:</strong>
            </p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                1. WHEREAS, the ACCREDITED BROKER has offered to provide sales agency services, and the DEVELOPER has
                confirmed his acceptance, for the sale and marketing of all projects of the DEVELOPER;</p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                2. WHEREAS, the ACCREDITED BROKER hereby undertakes and binds himself to do the following scope of
                works:</p>
            <div class="ml-2">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    a. Pre-qualify the Client</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    b. Market the projects according to the specifications and pre-determined selling price only</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    c. Perform on-site &quot;manning&quot; based on the agreed schedule</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    d. Accompany the Client during demonstration or tripping to the projects using his own
                    transportation
                    service</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    e. Coordinate with the DEVELOPER all matters concerning the marketing of the projects</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;m0cm-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    f. Register the information of Client using the DEVELOPER&apos;s Customer Information Form</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    g. Explain the reservation process, Cancellation &amp; for assumed units.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    h. Require the Client to sign the corresponding Reservation Agreement and other related documents
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    i.Close the sale</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    j. Strictly follow the price, specifications, and terms of payment set forth by the DEVELOPER</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    k. Remind the follow-up from the Client all equity payments schedule due</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    l. Assist the Client in preparing the documentary requirements of HDMF </p>

                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    m. Require the Client to submit all documentary requirements to the DEVELOPER strictly within
                    fifteen
                    (15) days from the date of notice for process of loan.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    n. Assist their Clients on assume accounts</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    o. &nbsp;Assist the Client and the DEVELOPER during house acceptance</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    p. Assist the Client with their concerns related to the projects</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    q. Maintain good relationship with the Client</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    r. Perform excellent customer service to the Client</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    s. Maintain professionalism at all times</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    t. Abide by the terms and conditions set forth by the DEVELOPER</p>
            </div>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                3. NOW, THEREFORE, for and in consideration of the foregoing premises, the parties have mutually agreed
                as follows:</p>
            <div class="ml-2">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    a. This AGREEMENT shall be valid for <strong>TWELVE (12) MONTHS</strong> from the date of
                    notarization of this
                    documents, and can be renewed according to the terms and conditions of the DEVELOPER and subject for
                    re-approval by the DEVELOPER;
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    b. The AGREEMENT shall be a <strong>NON-EXCLUSIVE</strong> and shall be open to all ACCREDITED
                    BROKERS of the
                    DEVELOPER on a first-come-first-serve basis;

                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:0cm;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    c. The ACCREDITED BROKER shall be entitled for a <strong>FIVE PERCENT (5%) COMMISSION</strong> based
                    on the final
                    loanable from HDMF, wherein the commission of the ACCREDITED BROKER is based on the final contract
                    price and the ACCREDITED BROKER shall not offer the projects below or above the pre-determined
                    selling price;

                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    d. The commission shall be paid in check and shall be released as follows:</p>

                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    <strong>Advance Commission:</strong>
                </p>
                <div class="ml-5">
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <strong>Model Maria Marcela / Lorenza 10,000.00</strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <strong>Model Maria Delfina 5,000.00</strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <strong>Less: withholding tax (8% for vatable, 5% not vat with sworn statement)</strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <strong>80% - upon every equity payment of the client (factorial rate)</strong>
                    </p>
                    <p
                        style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:72.0pt;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <strong>20%- upon takeout</strong>
                    </p>
                </div>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    e. Upon every payment of the COMMISSION , the ACCREDITED BROKER shall issue a BIR-registered
                    Official Receipt to the DEVELOPER, and the DEVELOPER shall deduct the corresponding withholding tax
                    from the COMMISSION as a required by law. The DEVELOPER shall also issue to the ACCREDITED BROKER
                    the corresponding BIR Form for the tax withheld ;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    f. The ACCREDITED BROKER shall pay for their own transportation expenses during tripping’s,
                    photocopy of documents for their own perusal, representation expenses with the Client, and salaries
                    and commissions of their sales agents and referrals;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    g. The ACCREDITED BROKER shall not collect from the Client any additional payments such as
                    processing fees, facilitation fees, and commissions, as these payments are deemed covered in the
                    commission of the ACCREDITED BROKER from the DEVELOPER;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    h. The ACCREDITED BROKER shall not collect any payments from the Client without the written
                    authorization from the DEVELOPER. In case the ACCREDITED BROKER is authorized, it is the obligation
                    of the ACCREDITED BROKER to issue to the Client an acknowledgement receipt as proof of their receipt
                    of payment from the Client, and it is the responsibility of the ACCREDITED BROKER to secure an
                    official receipt from the DEVELOPER as proof of conveyance of the Client’s payment to the DEVELOPER;
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    i. The ACCREDITED BROKER is not authorized to make their own brochures, leaflets, flyers, on-site
                    tarpaulins and signage, and other marketing and advertising materials of the projects. Only the
                    marketing and advertising materials prepared by the DEVELOPER shall be used at all times;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    j. In the event that the Client voluntarily cancels the purchase of the property , the ACCREDITED
                    BROKER shall ensure that a Cancellation Request Letter duly signed by the Client is secured and
                    submitted to the DEVELOPER;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    k. In the event that the sale with the Client is cancelled due to his non-compliance with the
                    Reservation Agreement and Contract to Sell, wherein all payments of the Client is forfeited, the
                    DEVELOPER shall pay the ACCREDITED BROKER the same commission percentage based only on the payments
                    received by the DEVELOPER;</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    l. In the event that the Client if the broker is granted to offer its unit for assume, the broker is
                    given priority to look for new client within 15 days only. Failure to comply the concerned units
                    will automatically be offered to all.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    In the event that the ACCREDITED BROKER fails to comply with any of the terms and conditions set
                    forth under this Agreement, the DEVELOPER reserves the right to terminate this Agreement, in which
                    case all commission due to the ACCREDITED BROKER shall be deemed forfeited;</p>
            </div>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                <strong><u>SECTION 1 - CONFIDENTIALITY</u></strong>
            </p>
            <p class="ml-2"
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                1.1 The parties, unless required to do so by law, hereby undertake that they will not at any time
                hereafter divulge or communicate to any person, any confidential information concerning the business
                accounts, financial arrangements, contractual arrangements, or other transactions or affairs of the
                other which may come to their knowledge and that they will use their best efforts to prevent the
                publication or disclosure of any confidential information concerning such matters.</p>
            <p
                style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                <strong><u>SECTION 2 - MISCELLANEOUS</u></strong>
            </p>
            <div class="ml-2">
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    1.1 The parties, unless required to do so by law, hereby undertake that they will not at any time
                    hereafter divulge or communicate to any person, any confidential information concerning the business
                    accounts, financial arrangements, contractual arrangements, or other transactions or affairs of the
                    other which may come to their knowledge and that they will use their best efforts to prevent the
                    publication or disclosure of any confidential information concerning such matters.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    2.2 No terms, conditions and stipulations in this agreement shall be deemed modified or notated,
                    unless it appears in writing and signed by the parties.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    2.3 This agreement shall be binding to the parties’ assigns, heirs and successors in interest.
                </p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    2.4 Word denoting persons shall include individuals and juridical entities, and references to the
                    masculine or feminine gender shall apply equally to all.</p>
                <p
                    style='margin-top:0cm;margin-right:0cm;margin-bottom:8.0pt;margin-left:0cm;font-size:11.0pt;font-family:"Calibri",sans-serif;text-align:justify;'>
                    &nbsp;</p>
            </div>
            <div style="margin-bottom:720.0pt;"><br></div>
            {{-- <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div>
            <div class="mb-5"><br></div> --}}
            <p class="mt-4"
                style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;margin-left:36.0pt;text-align:justify;text-indent:18.0pt;'>
                <strong><span style="font-size:16px;">IN WITNESS WHEREOF</span></strong><span
                    style="font-size:16px;">, the parties hereto have executed this Sales Agency Agreement on the date
                    and at the place first above-written.</span>
                <span>
                    <strong>{{ Carbon\Carbon::parse(Carbon\Carbon::now())->format('F d,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Y') }}</strong>
                    Davao City,
                    Philippines.</span>
            </p>
            <br><br>
            <div class="d-flex justify-content-center mb-5 pb-5">
                <div class="d-flex flex-column align-items-center mx-5">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold"><u>MARIA HOMES DEVELOPMENT
                                CORPORATION</u></span>
                    </p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold">MARIA LINDA V. JOCSON</span>
                    </p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;">DEVELOPER</span>
                    </p>
                    <br>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold">TIN: ________________________</span>
                    </p>
                </div>
                <div class="d-flex flex-column align-items-center mx-5">
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold "><u>{{ $broker->name }}</u></span>
                    </p>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold">ACCREDITED BROKER</span>
                    </p>
                    <br><br>
                    <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                        <span style="font-size:16px;" class="text-bold">TIN: ________________________</span>
                    </p>
                </div>
            </div>
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
                        ME</strong>, this <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('jS') }}</b> day
                    of <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('F') }}</b>,
                    <b>{{ \Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y') }}</b>, personally appeared the
                    following:</span>
            </p>
            <br>
            <div class="d-flex justify-content-between text-bold">
                <p>Name</p>
                <p>PRC License No</p>
                <p>Issued at/on</p>
            </div>
            <div class="d-flex justify-content-between">
                <p>{{ $broker->name }}</p>
                <p>{{ $broker->prc_license }}</p>
                <p>{{ Carbon\Carbon::now()->format('F d, Y') }}</p>
            </div>

            <p style='margin:0cm;font-size:15px;font-family:"Calibri",sans-serif;text-align:justify;'>
                <span style="font-size:16px;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;This instrument,
                    consisting of (3) page(s), including the page on which this acknowledgment is written, has been
                    signed on the left margin of each and every page thereof by the concerned parties and their
                    witnesses, and sealed with my notarial seal.</span>
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
</body>

</html>
