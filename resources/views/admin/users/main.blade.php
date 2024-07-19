@extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      @include('layouts.partials.alert')
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">
      <div class="d-lg-flex justify-content-between">
        <div class="col-lg-3 col-md-12 col-sm-12">
          <div class="card rounded-0 h-100 border border-0">
            <div class="card-header rounded-0 text-center text-md-left">
              Basic Information
            </div>
            <div class="card-body">

              <div class="d-flex-column justify-content-center">
                <div class="imgContainer d-flex justify-content-center mb-4">
                  <div class="d-flex justify-content-center">
                    <div class="col-12 d-flex justify-content-center">
                      <img class="roundedLargeImage" id="imagePreview"
                        src="{{ session('emp_image') ? asset('/images/employees/' . session('emp_image')) : asset('/images/default.png') }}"
                        alt="User Image">
                      <a href="#" class="btn m-0 p-0" data-toggle="modal" data-target="#editImageModal"><i
                          class="fas fa-solid fa-camera"></i></a>
                    </div>
                  </div>
                </div>

                <div class="text-center text-bold h3 mb-0">
                  {{ session('emp_full_name') ? session('emp_full_name') : ''}}
                </div>
                <div class="text-center h5">
                  <span> Client ID: <b>#</b></span>
                  <span> {{ session('emp_id') ? session('emp_id') : ''}} </span>
                </div>
                <div class="text-center h5">
                  <span> {{ session('emp_mobile') ? session('emp_mobile') : ''}} </span>
                </div>
                <div class="text-center h5">
                  <span class="px-2 py-1 h6 rounded {{ session('emp_active') == 1 ? 
                                        " bg-success" : "bg-danger" }}">
                    {{ session('emp_active') == 1 ? 'Active' : 'Inactive'}}
                  </span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-9 col-lg-8">
          <div class="card bg-transparent shadow-none h-100">
            <div class="card-header show-card bg-transparent pt-0 px-2" style="margin-left: 0.1rem;">
              <ul class="nav nav-tabs card-header-tabs d-flex justify-content">
                <li class="nav-item "><a class="nav-link active " href="#personalInfo" data-toggle="tab"
                    id="tab_personalInfo">Personal
                    Information</a>
                </li>
                {{-- <li class="nav-item">
                  <a class="nav-link" href="#security" data-toggle="tab" id="tab_security">Security</a>
                </li> --}}
              </ul>
            </div>
            <div class="card-body bg-white px-0 shadow-lg border border-transparent">
              <div class="container-fluid">
                <div class="tab-content">
                  {{-- PERSONAL INFORMATION --}}
                  <div class="active tab-pane" id="personalInfo">
                    <div class="container-fluid">
                      <div class="d-md-flex flex-column ">
                        <div class="d-flex justify-content-sm-end justify-content-center">

                          <button class="btn btn-primary btn-sm" id="personalInfoFormEdit">
                            <i class="fa-solid fa-pencil"></i>
                          </button>

                        </div>
                        <form id="personalInfoForm" action="/users/{{ session('emp_id')}}" method="POST">
                          @csrf
                          @method('PATCH')
                          <div class="col-sm-12 mt-2">
                            <label for="lastName" class="control-label">Last
                              Name:</label>
                            <input type="text" class="form-control" name="personalInfo_lastName"
                              value="{{ session('emp_last_name') ? session('emp_last_name') : ''}}" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="firstName" class="control-label">First
                              Name:</label>
                            <input type="text" class="form-control" name="personalInfo_firstName"
                              value="{{ session('emp_first_name') ? session('emp_first_name') : ''}}" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="middleName" class="control-label">
                              Middle Name:
                            </label>
                            <input type="text" class="form-control" name="personalInfo_middleName"
                              value="{{ session('emp_middle_name') ? session('emp_middle_name') : ''}}" disabled
                              required>
                          </div>

                          <div class="col-sm-12">
                            <label for="address" class="control-label">Address:</label>
                            <input type="textarea" class="form-control" name="personalInfo_address"
                              value="{{ session('emp_address') ? session('emp_address') : ''}}" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="personalInfo_genderSelect" class="form-label">Gender:</label>

                            <select disabled class="custom-select" id="personalInfo_gender" name="personalInfo_gender">

                              @if(session('emp_gender') == 'Male')
                              <option value="Male" selected hidden>Male</option>
                              @elseif(session('emp_gender') == 'Female')
                              <option value="Female" selected hidden>Female
                              </option>
                              @elseif(session('emp_gender') == 'Secret')
                              <option value="Secret" selected hidden>Prefer not to
                                say
                              </option>
                              @else
                              <option disabled hidden selected>Choose...
                              </option>
                              @endif

                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Secret">Prefer not to say
                              </option>
                            </select>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="contactNo" class="control-label">Contact
                              No:</label>
                            <input type="text" class="form-control" name="personalInfo_contactNo"
                              value="{{ session('emp_mobile') ? session('emp_mobile') : ''}}" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="dateOfBirth" class="control-label">Date of
                              Birth:</label>
                            <input type="date" class="form-control" name="personalInfo_dateOfBirth"
                              value="{{ session('emp_date_of_birth') ? session('emp_date_of_birth') : ''}}" disabled
                              required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="placeOfBirth" class="control-label">Place of
                              Birth:</label>
                            <input type="text" class="form-control" name="personalInfo_placeOfBirth"
                              value="{{ session('emp_place_of_birth') ? session('emp_place_of_birth') : ''}}" disabled
                              required>
                          </div>

                          <div class="d-flex justify-content-sm-end justify-content-center mt-3">
                            <button class="btn btn-danger px-3 my-3 mx-2" type="button" id="personalInfoCancelButton"
                              disabled hidden>
                              Cancel
                            </button>
                            <button class="btn btn-success px-3 my-3 mx-2" type="submit" id="personalInfoSaveButton"
                              disabled hidden>Save
                              Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                  {{-- SECURITY --}}
                  <div class="tab-pane" id="security">
                    <div class="container-fluid">
                      <div class="d-md-flex flex-column">
                        <form action="/users/security/{{ session('emp_id') }}/edit" method="POST">
                          @csrf
                          @method('PATCH')
                          <div class="d-flex-column align-items-end">
                            <div class="col-md-6 mb-2">
                              <label for="email" class="control-label">Email
                                Address:</label>
                              <input type="email" class="form-control" name="email"
                                value="{{ session('emp_email') ? session('emp_email') : ''}}" required>
                            </div>
                            <div class="col-md-6 mb-2">
                              <label for="password" class="control-label">
                                Password:
                              </label>
                              <input type="password" class="form-control" name="password" required>
                            </div>
                            <div class="col-md-6 mb-3">
                              <label for="password_confirmation" class="control-label">
                                Confirm Password:
                              </label>
                              <input type="password" class="form-control" name="password_confirmation" required>
                            </div>
                          </div>
                          <div class="d-flex justify-content-sm-start justify-content-center mt-3">
                            <button class="btn btn-success px-3 my-3 mx-2" type="submit">Save Changes</button>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <div class="modal fade" id="editImageModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered " role="document">
      <div class="modal-content">
        <div class="modal-header bg-primary">
          <h5 class="modal-title" id="employmentOccupation">
            {{ session('emp_image') ? "Edit User Image" : "Upload Image"}}
          </h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/users/image/{{ session('emp_id')}}/edit" method="POST" enctype="multipart/form-data">
          @csrf
          @method('PATCH')
          <div class="modal-body">
            <div class="container-fluid">
              <div class="d-flex flex-column">
                <div class="text-center">
                  <img class="my-4 text-center roundedLargeImage" id="newImagePreview"
                    src="{{ session('emp_image') ? asset('/images/employees/' . session('emp_image')) : asset('images/default.png')}}"
                    alt=" User Image">
                </div>
                <div class="text-center my-3">
                  <input type="file" class="border border-dark rounded p-2" name="user_image" id="newImage" value="">
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="submit" class="btn btn-success" id="addEmployement">
              <span>Save Changes </span>&nbsp;
              <i class="fa-solid fa-arrow-right"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<script>
  $(document).ready(function (e) {
        $('#newImage').change(function(){  
        let reader = new FileReader();
        reader.onload = (e) => { 
            $('#newImagePreview').attr('src', e.target.result); 
            }
        reader.readAsDataURL(this.files[0]); 
        });
    });

    // document.getElementById("tab_personalInfo").addEventListener("click" , personalInfo);
    // document.getElementById("tab_security").addEventListener("click" , security);

    // function personalInfo(){
    //     document.getElementById("headerTab").style.backgroundColor = "#007bff";  
    //     document.getElementById("bodyTab").style.borderColor = "#007bff";  
    // }
    // function security(){
    //     document.getElementById("headerTab").style.backgroundColor = "#dc3545";
    //     document.getElementById("bodyTab").style.borderColor = "#dc3545";
    // }

    $('#personalInfoFormEdit').click(function(){
        $("#personalInfoForm :input").prop("disabled", false);
        $("#personalInfoSaveButton").prop("hidden", false).prop("disabled", false);
        $("#personalInfoCancelButton").prop("hidden", false).prop("disabled", false);
        $("#personalInfoFormEdit").prop("disabled", true).text("EDIT MODE");
    });   

    $('#editPersonalInfo').click(function(){
        $("#personalInfoForm :input").prop("disabled", false);
        $("#personalInfoSaveButton").prop("hidden", false).prop("disabled", false);
        $("#personalInfoCancelButton").prop("hidden", false).prop("disabled", false);
        $("#editPersonalInfo").prop("disabled", true).text("EDIT MODE");
    });   

    $('#personalInfoCancelButton').click(function(){
        $("#personalInfoForm :input").prop("disabled", true);
        $("#personalInfoSaveButton").prop("hidden", true).prop("disabled", true);
        $("#personalInfoCancelButton").prop("hidden", true).prop("disabled", true);
        $("#personalInfoFormEdit").prop("disabled", false).html("<span class='fa-solid fa-pencil'> </span>");
    });
</script>
@endsection

{{-- @extends('layouts.themes.admin.main')
@section('content')
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">User Account</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ action('MainController@home') }}">Home</a></li>
            <li class="breadcrumb-item">User Account</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <section class="content">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12">
          @include('layouts.partials.alert')
        </div>
      </div>

      <div class="row">
        <div class="col-md-3">

          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                  src="{{ asset('images/employees/' . session('emp_image')) }}" alt="User profile picture">
              </div>
              <h3 class="profile-username text-center">{{ session('emp_full_name') }}</h3>
              <p class="text-muted text-center">{{ session('pos_name') }}</p>
              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Employed Since</b> <a class="float-right">mm/dd/yyyy</a>
                </li>
                <li class="list-group-item">
                  <b>Years in Service</b> <a class="float-right">00</a>
                </li>
              </ul>
            </div>
          </div>

          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Contact Details</h3>
            </div>

            <div class="card-body">
              <strong><i class="fa fa-envelope mr-1"></i> E-mail</strong>
              <p class="text-muted">{{ session('emp_email') }} <a href="#"><span class="fa fa-edit"></span></a></p>
              <hr>

              <strong><i class="fa fa-phone mr-1"></i> Mobile</strong>
              <p class="text-muted">{{ session('emp_mobile') }} <a href="#"><span class="fa fa-edit"></span></a></p>
              <hr>

              <strong><i class="fa fa-map-marker mr-1"></i> Address</strong>
              <p class="text-muted">{{ session('emp_address') }} <a href="#"><span class="fa fa-edit"></span></a></p>
              <hr>
            </div>
          </div>
        </div>

        <div class="col-md-9">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Activity</a></li>
                <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Timeline</a></li>
                <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Settings</a></li>
              </ul>
            </div><!-- /.card-header -->
            <div class="card-body">
              <div class="tab-content">
                <div class="active tab-pane" id="activity">
                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                      <span class="username">
                        <a href="#">Jonathan Burke Jr.</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Shared publicly - 7:30 PM today</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Lorem ipsum represents a long-held tradition for designers,
                      typographers and the like. Some people hate it and argue for
                      its demise, but others ignore the hate as they create awesome
                      tools to help create filler text for everyone from bacon lovers
                      to Charlie Sheen fans.
                    </p>

                    <p>
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                          <i class="far fa-comments mr-1"></i> Comments (5)
                        </a>
                      </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                  </div>
                  <!-- /.post -->

                  <!-- Post -->
                  <div class="post clearfix">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Sarah Ross</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Sent you a message - 3 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <p>
                      Lorem ipsum represents a long-held tradition for designers,
                      typographers and the like. Some people hate it and argue for
                      its demise, but others ignore the hate as they create awesome
                      tools to help create filler text for everyone from bacon lovers
                      to Charlie Sheen fans.
                    </p>

                    <form class="form-horizontal">
                      <div class="input-group input-group-sm mb-0">
                        <input class="form-control form-control-sm" placeholder="Response">
                        <div class="input-group-append">
                          <button type="submit" class="btn btn-danger">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.post -->

                  <!-- Post -->
                  <div class="post">
                    <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                      <span class="username">
                        <a href="#">Adam Jones</a>
                        <a href="#" class="float-right btn-tool"><i class="fas fa-times"></i></a>
                      </span>
                      <span class="description">Posted 5 photos - 5 days ago</span>
                    </div>
                    <!-- /.user-block -->
                    <div class="row mb-3">
                      <div class="col-sm-6">
                        <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6">
                        <div class="row">
                          <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="../../dist/img/photo2.png" alt="Photo">
                            <img class="img-fluid" src="../../dist/img/photo3.jpg" alt="Photo">
                          </div>
                          <!-- /.col -->
                          <div class="col-sm-6">
                            <img class="img-fluid mb-3" src="../../dist/img/photo4.jpg" alt="Photo">
                            <img class="img-fluid" src="../../dist/img/photo1.png" alt="Photo">
                          </div>
                          <!-- /.col -->
                        </div>
                        <!-- /.row -->
                      </div>
                      <!-- /.col -->
                    </div>
                    <!-- /.row -->

                    <p>
                      <a href="#" class="link-black text-sm mr-2"><i class="fas fa-share mr-1"></i> Share</a>
                      <a href="#" class="link-black text-sm"><i class="far fa-thumbs-up mr-1"></i> Like</a>
                      <span class="float-right">
                        <a href="#" class="link-black text-sm">
                          <i class="far fa-comments mr-1"></i> Comments (5)
                        </a>
                      </span>
                    </p>

                    <input class="form-control form-control-sm" type="text" placeholder="Type a comment">
                  </div>
                  <!-- /.post -->
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                  <!-- The timeline -->
                  <div class="timeline timeline-inverse">
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-danger">
                        10 Feb. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-envelope bg-primary"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 12:05</span>

                        <h3 class="timeline-header"><a href="#">Support Team</a> sent you an email</h3>

                        <div class="timeline-body">
                          Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles,
                          weebly ning heekya handango imeem plugg dopplr jibjab, movity
                          jajah plickers sifteo edmodo ifttt zimbra. Babblely odeo kaboodle
                          quora plaxo ideeli hulu weebly balihoo...
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-primary btn-sm">Read more</a>
                          <a href="#" class="btn btn-danger btn-sm">Delete</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-user bg-info"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 5 mins ago</span>

                        <h3 class="timeline-header border-0"><a href="#">Sarah Young</a> accepted your friend request
                        </h3>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-comments bg-warning"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 27 mins ago</span>

                        <h3 class="timeline-header"><a href="#">Jay White</a> commented on your post</h3>

                        <div class="timeline-body">
                          Take me to your leader!
                          Switzerland is small and neutral!
                          We are more like Germany, ambitious and misunderstood!
                        </div>
                        <div class="timeline-footer">
                          <a href="#" class="btn btn-warning btn-flat btn-sm">View comment</a>
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <!-- timeline time label -->
                    <div class="time-label">
                      <span class="bg-success">
                        3 Jan. 2014
                      </span>
                    </div>
                    <!-- /.timeline-label -->
                    <!-- timeline item -->
                    <div>
                      <i class="fas fa-camera bg-purple"></i>

                      <div class="timeline-item">
                        <span class="time"><i class="far fa-clock"></i> 2 days ago</span>

                        <h3 class="timeline-header"><a href="#">Mina Lee</a> uploaded new photos</h3>

                        <div class="timeline-body">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                          <img src="http://placehold.it/150x100" alt="...">
                        </div>
                      </div>
                    </div>
                    <!-- END timeline item -->
                    <div>
                      <i class="far fa-clock bg-gray"></i>
                    </div>
                  </div>
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                  <form class="form-horizontal">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputName" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputName2" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                      <div class="col-sm-10">
                        <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <div class="checkbox">
                          <label>
                            <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                          </label>
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="offset-sm-2 col-sm-10">
                        <button type="submit" class="btn btn-danger">Submit</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection --}}