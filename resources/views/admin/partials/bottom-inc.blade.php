<!-- jQuery -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Bootstrap 4 -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/moment/moment.min.js"></script>
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script
    src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js">
</script>
<!-- Summernote -->
<script src="{{ asset('assets/back/vendor/summernote-0.8.18-dist/summernote-bs4.min.js') }}"></script>
<!-- overlayScrollbars -->
<script
    src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js">
</script>

<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/toastr/toastr.min.js"></script>

<!-- Select2 -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/select2/js/select2.full.min.js"></script>


<!-- bs-custom-file-input -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/bs-custom-file-input/bs-custom-file-input.min.js"> </script>

<!-- SweetAlert2 -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/sweetalert2/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/dist/js/pages/dashboard.js"></script>


@yield('scripts')
<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(2000, 0).slideUp(2000, function() {
            $(this).remove();
        });
    }, 5000);
</script>
