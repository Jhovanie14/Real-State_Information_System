@extends('layouts.themes.admin.main')
@section('content')
    <div class="content-wrapper">
        @include('layouts.partials.alert')
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6 d-flex align-items-center">
                        <h1 class="m-0 text-dark">Reservations</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/home/main">Home</a></li>
                            <li class="breadcrumb-item">Reservations</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <section class="content">
            <div class="container-fluid">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-4 mt-3">
                            <div class="card rounded">
                                <div class="card-header text-bold bg-primary">
                                    <i class="fa-solid fa-house pr-2"></i>
                                    In-House Payments
                                </div>

                                <div class="card-body text-center">
                                    <h1>In-House Payments</h1>
                                </div>
                                <div class="card-footer text-right">
                                    <a class="btn btn-primary text-white">
                                        View
                                        <i class="fa-solid fa-arrow-right pl-2"></i>
                                    </a>
                                </div>
                            </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <div class="card rounded">
                            <div class="card-header text-bold bg-success">
                                <i class="fa-solid fa-credit-card pr-2"></i>
                                HDMF Loan
                            </div>

                            <div class="card-body text-center">
                                <h1>In-House Payments</h1>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </section>
    </div>


    @foreach ($reservations as $reservation)
        <div class="modal fade" id="confirmCancel{{ $reservation->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-warning">
                        <h5 class="modal-title">Cancel Reservation</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to cancel this reservation?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/reservations/{{ $reservation->id }}/cancel" method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa-solid fa-cancel"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="confirmDelete{{ $reservation->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-danger">
                        <h5 class="modal-title">Delete Reservation</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to delete this reservation?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/reservations/{{ $reservation->id }}/delete" method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa-solid fa-cancel"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="confirmRestore{{ $reservation->id }}" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header bg-success">
                        <h5 class="modal-title">Resume Reservation</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="h5">
                            Are you sure you want to resume this reservation?
                        </div>
                    </div>
                    <div class="modal-footer">
                        <form action="/reservations/{{ $reservation->id }}/restore" method="POST">
                            @csrf
                            @method('PATCH')

                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-check"></i>
                            </button>
                        </form>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">
                            <i class="fa-solid fa-cancel"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
