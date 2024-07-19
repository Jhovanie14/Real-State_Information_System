@if(session('errorMessage'))
{{-- <div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-exclamation-triangle"></i> tangina!</h5>
    {!! session('errorMessage') !!}
</div> --}}
<script>
    $(function() {
		Swal.fire({
            toast: 'true',
        position: 'top',
        icon: 'warning',
        title: '{!! session('errorMessage') !!}',
        showConfirmButton: false,
        showCloseButton: true,
        width: '30em',
        timer: 2000 
        })
	});
</script>
@endif

{{-- @if(session('errorMessage'))
<script>
    $(function() {
		Swal.fire({
        title: 'Error',
        text: "{!! session('errorMessage') !!}",
        icon: 'error',
        confirmButtonText: 'OK'
    });
	});
</script>
@endif --}}
{{-- @if(session('successMessage'))
<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-check"></i> Alert!</h5>
    {!! session('successMessage') !!}
</div>
@endif --}}


{{-- @if(session('successMessage'))
<div class="modal fade modal show" id="successModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">Success</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="container p-4">
                <div class="h5">
                    <i class="icon fa fa-check"></i>&nbsp;
                    <span class="ml-2">{!! session('successMessage') !!}</span>
                </div>
            </div>
        </div>
    </div>
</div>
@endif --}}

@if(session('successMessage'))
<script>
    $(function() {
		Swal.fire({
        title: 'Success',
        text: "{!! session('successMessage') !!}",
        icon: 'success',
        confirmButtonText: 'OK'
    });
	});
</script>
@endif


@if(session('infoMessage'))
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-info"></i> Alert!</h5>
    {!! session('infoMessage') !!}
</div>
@endif
@if(session('warningMessage'))
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
    {!! session('warningMessage') !!}
</div>
@endif
@if($errors->has('g-recaptcha-response'))
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
    <em>Invalid captcha response!</em>
</div>
@endif