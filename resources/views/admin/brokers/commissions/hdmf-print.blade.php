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
        <div class="d-flex justify-content-start align-items-center">
            <img class="roundedSmallImage mr-5 border" src="{{ asset('/storage/icons/mariahomes.png') }}"
                alt="">
            <div class="">

                <h5 class="h1">Maria Homes Development Corporation</h5>
                <h5 class="h4 pl-1 pb-0 mb-0">Broker Commissions</h5>
                <h5 class="h6 pl-1">In-House Payment Properties</h5>
                <h5 class="pl-1">{{ Carbon\Carbon::now()->format('F d, Y') }}</h5>
            </div>
        </div>

        <div class="mb-2">
            <h5 class="display-5 text-center">BROKER INFORMATION</h5>
           

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Full Name:</label>
                    <label class="my-0">
                        {{ $broker->name ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Brokerage Firm:</label>
                    <label class="my-0">
                        {{ $broker->brokerage_firm ?? null }}
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Address:</label>
                    <label class="my-0">
                        {{ $broker->address ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Brokerage Address:</label>
                    <label class="my-0">
                        {{ $broker->brokerage_address ?? null }}
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Email Address:</label>
                    <label class="my-0">{{ $broker->email ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Brokerage Contact No:</label>
                    <label class="my-0">
                        {{ $broker->brokerage_contact_no ?? 'None' }}
                    </label>
                </div>
            </div>


            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Contact No:</label>
                    <label class="my-0">
                        {{ $broker->contact_no ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Brokerage Email:</label>
                    <label class="my-0">
                        {{ $broker->brokerage_email ?? null }}
                    </label>
                </div>
            </div>

            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">PRC License:</label>
                    <label class="my-0">
                        {{ $broker->prc_license ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Brokerage Tin No:</label>
                    <label class="my-0">
                        {{ $broker->brokerage_tin_no ?? null }}
                    </label>
                </div>
            </div>
            <div class="d-flex justify-content-start align-items-start ">
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0">Tin No:</label>
                    <label class="my-0">
                        {{ $broker->tin_no ?? null }}
                    </label>
                </div>
                <div class="col d-flex justify-content-between">
                    <label class="control-label mr-5 my-0"></label>
                    <label class="my-0">
                    </label>
                </div>
            </div>
        </div>

        <div class="mx-1 mb-3" style="flex-grow: 1; height: 1px; background-color:lightgray;">
        </div>
        <div class="table-responsive">
            <table class="table table-hover table-bordered table-lg ">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" class="py-2 h6 text-bold text-center">#
                        </th>
                        <th scope="col" class="py-2 h6 text-bold ">
                            Property</th>
                        </th>
                        <th scope="col" class="py-2 h6 text-bold ">
                            Client</th>
                        </th>
                        <th scope="col" class=" py-2 h6 text-bold">
                            Date Released
                        </th>
                        <th scope="col" class=" py-2 h6 text-bold">
                            Status
                        </th>
                        <th scope="col" class=" py-2 h6 text-bold">
                            (%)
                        </th>
                        <th scope="col" class=" py-2 h6 text-bold">
                            Commission
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($hdmf_commissions as $commission)
                        <tr class="text-bold">
                            <td class="text-bold h6 text-center">
                                {{ $loop->iteration }}
                            </td>
                            <td class="text-bold h6">
                                {{ $commission->model ?? '' }}
                            </td>
                            <td class="text-bold h6">
                                {{ $commission->first_name ?? '' }}
                                {{ $commission->last_name ?? '' }}
                            </td>
                            <td class="h6">
                                @if ($commission->released == 0)
                                    <h6>---</h6>
                                @else
                                    {{ Carbon\Carbon::parse($commission->updated_at)->format('F d, Y') }}
                                @endif
                            </td>
                            <td class="h6">
                                @if ($commission->released == 0)
                                    <h6>--</h6>
                                @else
                                    <h6>Released</h6>
                                @endif
                            </td>
                            <td class="text-bold h6">
                                {{ $commission->percent }}%
                            </td>
                            <td class="text-bold h6">
                                &#8369;
                                {{ number_format($commission->commission, 2) ?? '' }}
                            </td>
                        </tr>
                    @endforeach
                    <tr class="text-bold">
                        <td class="text-bold h6" colspan="6">
                            Remaining
                        </td>

                        <td class="h6 text-bold">
                            &#8369;
                            {{ number_format($remaining, 2) ?? '' }}
                        </td>
                    </tr>
                    <tr class="text-bold">
                        <td class="text-bold h6" colspan="6">
                            Total
                        </td>

                        <td class="h6 text-bold">
                            &#8369;
                            {{ number_format($total, 2) ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
