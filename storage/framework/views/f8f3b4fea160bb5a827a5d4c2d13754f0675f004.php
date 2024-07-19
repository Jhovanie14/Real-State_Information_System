<?php if(session('errorMessage')): ?>

<script>
    $(function() {
		Swal.fire({
            toast: 'true',
        position: 'top',
        icon: 'warning',
        title: '<?php echo session('errorMessage'); ?>',
        showConfirmButton: false,
        showCloseButton: true,
        width: '30em',
        timer: 2000 
        })
	});
</script>
<?php endif; ?>







<?php if(session('successMessage')): ?>
<script>
    $(function() {
		Swal.fire({
        title: 'Success',
        text: "<?php echo session('successMessage'); ?>",
        icon: 'success',
        confirmButtonText: 'OK'
    });
	});
</script>
<?php endif; ?>


<?php if(session('infoMessage')): ?>
<div class="alert alert-info alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-info"></i> Alert!</h5>
    <?php echo session('infoMessage'); ?>

</div>
<?php endif; ?>
<?php if(session('warningMessage')): ?>
<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
    <?php echo session('warningMessage'); ?>

</div>
<?php endif; ?>
<?php if($errors->has('g-recaptcha-response')): ?>
<div class="alert alert-danger alert-dismissible">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h5><i class="icon fa fa-exclamation-triangle"></i> Alert!</h5>
    <em>Invalid captcha response!</em>
</div>
<?php endif; ?><?php /**PATH C:\laragon\www\Infinit\maria-homes\resources\views/layouts/partials/alert.blade.php ENDPATH**/ ?>