<!-- jQuery -->
<script src="{{ asset('bootstrap/admin/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script>
	$.widget.bridge('uibutton', $.ui.button)
</script>

<script src="{{ asset('bootstrap/admin/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/sparklines/sparkline.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
</script>
<script src="{{ asset('bootstrap/admin/plugins/summernote/summernote-bs4.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/dist/js/adminlte.js') }}"></script>
<script src="{{ asset('bootstrap/admin/dist/js/pages/dashboard.js') }}"></script>
<script src="{{ asset('bootstrap/admin/dist/js/demo.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('bootstrap/admin/plugins/select2/js/select2.full.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.js"></script>

<!-- page script -->
<script>
	$(function () {
        $('#datatable').DataTable({
			"paging": true,
			"lengthChange": false,
			"searching": false,
			"ordering": true,
			"info": true,
			"autoWidth": false,
			"responsive": true,
        });
    });

	$(function () {
		//Initialize Select2 Elements
		$('.select2').select2()

		//Initialize Select2 Elements
		$('.select2bs4').select2({
			theme: 'bootstrap4'
		})
	});

	$(function () {
    var url = window.location;
    // for single sidebar menu
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for sidebar menu and treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview")
        .css({'display': 'block'})
        .addClass('menu-open').prev('a')
        .addClass('active');
	});
</script>