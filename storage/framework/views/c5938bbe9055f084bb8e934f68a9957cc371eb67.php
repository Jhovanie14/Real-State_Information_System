
<?php $__env->startSection('content'); ?>
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <?php echo $__env->make('layouts.partials.alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
                        src="<?php echo e(session('emp_image') ? asset('/images/employees/' . session('emp_image')) : asset('/images/default.png')); ?>"
                        alt="User Image">
                      <a href="#" class="btn m-0 p-0" data-toggle="modal" data-target="#editImageModal"><i
                          class="fas fa-solid fa-camera"></i></a>
                    </div>
                  </div>
                </div>

                <div class="text-center text-bold h3 mb-0">
                  <?php echo e(session('emp_full_name') ? session('emp_full_name') : ''); ?>

                </div>
                <div class="text-center h5">
                  <span> Client ID: <b>#</b></span>
                  <span> <?php echo e(session('emp_id') ? session('emp_id') : ''); ?> </span>
                </div>
                <div class="text-center h5">
                  <span> <?php echo e(session('emp_mobile') ? session('emp_mobile') : ''); ?> </span>
                </div>
                <div class="text-center h5">
                  <span class="px-2 py-1 h6 rounded <?php echo e(session('emp_active') == 1 ? 
                                        " bg-success" : "bg-danger"); ?>">
                    <?php echo e(session('emp_active') == 1 ? 'Active' : 'Inactive'); ?>

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
                
              </ul>
            </div>
            <div class="card-body bg-white px-0 shadow-lg border border-transparent">
              <div class="container-fluid">
                <div class="tab-content">
                  
                  <div class="active tab-pane" id="personalInfo">
                    <div class="container-fluid">
                      <div class="d-md-flex flex-column ">
                        <div class="d-flex justify-content-sm-end justify-content-center">

                          <button class="btn btn-primary btn-sm" id="personalInfoFormEdit">
                            <i class="fa-solid fa-pencil"></i>
                          </button>

                        </div>
                        <form id="personalInfoForm" action="/users/<?php echo e(session('emp_id')); ?>" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PATCH'); ?>
                          <div class="col-sm-12 mt-2">
                            <label for="lastName" class="control-label">Last
                              Name:</label>
                            <input type="text" class="form-control" name="personalInfo_lastName"
                              value="<?php echo e(session('emp_last_name') ? session('emp_last_name') : ''); ?>" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="firstName" class="control-label">First
                              Name:</label>
                            <input type="text" class="form-control" name="personalInfo_firstName"
                              value="<?php echo e(session('emp_first_name') ? session('emp_first_name') : ''); ?>" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="middleName" class="control-label">
                              Middle Name:
                            </label>
                            <input type="text" class="form-control" name="personalInfo_middleName"
                              value="<?php echo e(session('emp_middle_name') ? session('emp_middle_name') : ''); ?>" disabled
                              required>
                          </div>

                          <div class="col-sm-12">
                            <label for="address" class="control-label">Address:</label>
                            <input type="textarea" class="form-control" name="personalInfo_address"
                              value="<?php echo e(session('emp_address') ? session('emp_address') : ''); ?>" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="personalInfo_genderSelect" class="form-label">Gender:</label>

                            <select disabled class="custom-select" id="personalInfo_gender" name="personalInfo_gender">

                              <?php if(session('emp_gender') == 'Male'): ?>
                              <option value="Male" selected hidden>Male</option>
                              <?php elseif(session('emp_gender') == 'Female'): ?>
                              <option value="Female" selected hidden>Female
                              </option>
                              <?php elseif(session('emp_gender') == 'Secret'): ?>
                              <option value="Secret" selected hidden>Prefer not to
                                say
                              </option>
                              <?php else: ?>
                              <option disabled hidden selected>Choose...
                              </option>
                              <?php endif; ?>

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
                              value="<?php echo e(session('emp_mobile') ? session('emp_mobile') : ''); ?>" disabled required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="dateOfBirth" class="control-label">Date of
                              Birth:</label>
                            <input type="date" class="form-control" name="personalInfo_dateOfBirth"
                              value="<?php echo e(session('emp_date_of_birth') ? session('emp_date_of_birth') : ''); ?>" disabled
                              required>
                          </div>

                          <div class="col-sm-12 mt-2">
                            <label for="placeOfBirth" class="control-label">Place of
                              Birth:</label>
                            <input type="text" class="form-control" name="personalInfo_placeOfBirth"
                              value="<?php echo e(session('emp_place_of_birth') ? session('emp_place_of_birth') : ''); ?>" disabled
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

                  
                  <div class="tab-pane" id="security">
                    <div class="container-fluid">
                      <div class="d-md-flex flex-column">
                        <form action="/users/security/<?php echo e(session('emp_id')); ?>/edit" method="POST">
                          <?php echo csrf_field(); ?>
                          <?php echo method_field('PATCH'); ?>
                          <div class="d-flex-column align-items-end">
                            <div class="col-md-6 mb-2">
                              <label for="email" class="control-label">Email
                                Address:</label>
                              <input type="email" class="form-control" name="email"
                                value="<?php echo e(session('emp_email') ? session('emp_email') : ''); ?>" required>
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
            <?php echo e(session('emp_image') ? "Edit User Image" : "Upload Image"); ?>

          </h5>
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form action="/users/image/<?php echo e(session('emp_id')); ?>/edit" method="POST" enctype="multipart/form-data">
          <?php echo csrf_field(); ?>
          <?php echo method_field('PATCH'); ?>
          <div class="modal-body">
            <div class="container-fluid">
              <div class="d-flex flex-column">
                <div class="text-center">
                  <img class="my-4 text-center roundedLargeImage" id="newImagePreview"
                    src="<?php echo e(session('emp_image') ? asset('/images/employees/' . session('emp_image')) : asset('images/default.png')); ?>"
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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.themes.admin.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/admin/users/main.blade.php ENDPATH**/ ?>