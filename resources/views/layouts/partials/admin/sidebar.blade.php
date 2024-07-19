{{-- @if (Session::has('emp_uuid')) --}}
<aside class="main-sidebar sidebar-light-primary elevation-4">
    {{-- Logo --}}
    {{-- <a href="{{ session('acc_website') }}" target="_blank" class="brand-link">
        <img src="{{ asset('images/accounts/' . session('acc_image')) }}" alt="Organization Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8; ">
        <span class="brand-text font-weight-light">{{ session('acc_name') }}</span>
    </a> --}}

    {{-- Sidebar --}}
    <div class="sidebar">
        {{-- Sidebar user panel (optional) --}}
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ session('emp_image') ? asset('images/employees/' . session('emp_image')) : asset('/images/default.png') }}"
                    class="img-circle elevation-2" alt="User Image"
                    style="
                    border-radius: 50%;
                    height: 35px;
                    width: 35px;
                    object-fit: cover;
                    object-position: center;">
            </div>
            <div class="info">
                <a href="{{ action('UserController@main') }}" class="d-block"> {{ session('emp_full_name') }}</a>
            </div>
        </div>

        {{-- Sidebar Menu --}}
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">


                <li class="nav-item">
                    <a href="{{ action('MainController@home') }}" class="nav-link">
                        <i class="nav-icon fa fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>

                <li class="nav-header text-lg text-bold">
                    CLIENTS
                </li>
                <li class="nav-item">
                    <a href="/clients" class="nav-link">
                        <i class="far nav-icon fas fa-users"></i>
                        <p>Clients</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/clients/create" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add Client</p>
                    </a>
                </li>


                {{-- BROKERS --}}
                <li class="nav-header text-lg text-bold">
                    BROKERS & AGENTS
                </li>
                <li class="nav-item">
                    <a href="/brokers" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-tie"></i>
                        <p>Brokers</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/agents" class="nav-link">
                        <i class="nav-icon fas fa-users"></i>
                        <p>Agents</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/brokers/create" class="nav-link">
                        <i class="nav-icon fas fa-user-plus"></i>
                        <p>Add Broker</p>
                    </a>
                </li>

                <li class="nav-header text-lg text-bold">
                    PROPERTIES
                </li>
                {{-- <li class="nav-item">
                    <a href="/reservations2" class="nav-link">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>Payment Schedules</p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="/properties" class="nav-link">
                        <i class="nav-icon fas fa-house-chimney"></i>
                        <p>Property List</p>
                    </a>
                </li> --}}

                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-house-chimney"></i>
                        <p>
                            View Properties
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/properties/in-house" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>In-House Properties</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/properties/hdmf-loan" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>HDMF Properties&nbsp;</p>
                            </a>
                        </li>
                    </ul>
                </li>
                {{-- <li class="nav-item">
                    <a href="/reservations" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Reservation List</p>
                    </a>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="/reservations/create" class="nav-link">
                        <i class="nav-icon fas fa-folder-plus"></i>
                        <p>Place Reservation</p>
                    </a>
                </li> --}}

                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link"> <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            Reservation List
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ action('BrokersController@index') }}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>In-House Payment</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ action('BrokersController@create')}}" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>HDMF Loan&nbsp;</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>
                            View Reservations
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/reservations/in-house" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>In-House Payments</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/hdmf-loan" class="nav-link">
                                <i class="fas nav-icon"></i>
                                <p>HDMF Loans&nbsp;</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-folder-plus"></i>
                        <p>
                            Place Reservation
                            <i class="right fas fa-flip-both fa-angle-left "></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/reservations/create/in-house" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>In-House Payment</p>
                                <i class="right fas fa-plus "></i>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/reservations/create/hdmf-loan" class="nav-link">
                                <i class="far nav-icon"></i>
                                <p>HDMF Loan&nbsp;</p>
                                <i class="right fas fa-plus "></i>
                            </a>
                        </li>
                    </ul>
                </li>


                {{-- 
                <li class="nav-header text-lg text-bold">
                    PAYMENTS
                </li>
                
                <li class="nav-item">
                    <a href="/reservations" class="nav-link">
                        <i class="nav-icon fas fa-file-alt"></i>
                        <p>Reservation List</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/reservations/create" class="nav-link">
                        <i class="nav-icon fas fa-folder-plus"></i>
                        <p>Place Reservation</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/properties" class="nav-link">
                        <i class="nav-icon fas fa-house-chimney"></i>
                        <p>Property List</p>
                    </a>
                </li> --}}



                {{-- <li class="nav-item">
                    <a href="{{ action('BrokersController@index')}}" class="nav-link">
                        <i class="nav-icon fa-solid fa-user-tie"></i>
                        <p>
                            Brokers
                        </p>
                    </a>
                </li> --}}
                <li class="nav-header text-lg text-bold">
                    OTHERS
                </li>
                <li class="nav-item">
                    <a href="{{ action('MessageController@main') }}" class="nav-link">
                        <i class="nav-icon fa fa-envelope"></i>
                        <p>Messages</p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{ action('EventController@main') }}" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>Calendar</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ action('DownloadController@main') }}" class="nav-link">
                        <i class="nav-icon fa fa-cloud"></i>
                        <p>File Downloads</p>
                    </a>
                </li>
                <li class="nav-item mb-5">
                    <a href="{{ action('UpdateController@main') }}" class="nav-link">
                        <i class="nav-icon fa fa-history"></i>
                        <p>
                            System Updates
                        </p>
                    </a>
                </li>

                {{-- @if (session('super_admin') == true or session('validator') == true)
                <li class="nav-item">
                    <a href="{{ action('ValidationController@validation') }}" class="nav-link">
                        <i class="nav-icon fa fa-star-o"></i>
                        <p>
                            For Validation
                            @if (countFeedbackForValidation() > 0)
                            <span class="right badge badge-danger">{{ countFeedbackForValidation() }}</span>
                            @endif
                        </p>
                    </a>
                </li>
                @endif --}}

                {{-- @if (session('department_head') == true)
                <li class="nav-header">FEEDBACKS FOR ACTION</li>
                @foreach (session('user_departments') as $dep_id)
                <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-institution"></i>
                        <p>
                            {{ getDepartmentShortName($dep_id) }}
                            <i class="right fas fa-angle-left"></i>
                            @if (countAllTicketForActionbyDept($dep_id) > 0)
                            <span class="right badge badge-danger">{{ countAllTicketForActionbyDept($dep_id) }}</span>
                            @endif
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{ action('TicketController@action',[$dep_id,'0']) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    New
                                    @if (countTicketForActionByDept($dep_id) > 0)
                                    <span class="right badge badge-danger">{{ countTicketForActionByDept($dep_id)
                                        }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ action('TicketController@action',[$dep_id,'-1']) }}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Returned
                                    @if (countTicketReturnedByDept($dep_id) > 0)
                                    <span class="right badge badge-danger">{{ countTicketReturnedByDept($dep_id)
                                        }}</span>
                                    @endif
                                </p>
                            </a>
                        </li>
                    </ul>
                </li>
                @endforeach
                @endif --}}






                {{-- <li class="nav-item has-treeview">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-circle"></i>
                        <p>
                            Level 1
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Level 2
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-dot-circle nav-icon"></i>
                                        <p>Level 3</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Level 2</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}

            </ul>
        </nav>
    </div>
</aside>
{{-- @else
<script type="text/javascript">
    window.location = "{{ url('/') }}";
</script>
@endif --}}
