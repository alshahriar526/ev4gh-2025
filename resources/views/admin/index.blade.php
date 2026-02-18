@extends('admin.layout.admin-master')
@section('styles')
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet"
        href="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
@endsection
@section('content')
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Dashboard</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        @if ($message = Session::get('success'))
                            <div class="alert alert-success">
                                <p class="m-0">{{ $message }}</p>
                            </div>
                        @endif
                        @if ($message = Session::get('deleted'))
                            <div class="alert alert-warning">
                                <p class="m-0">{{ $message }}</p>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-12">
                        
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Button trigger modal -->
    <aside class="control-sidebar control-sidebar-dark">
    </aside>
@endsection
@section('scripts')
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-responsive/js/dataTables.responsive.min.js">
    </script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js">
    </script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/jszip/jszip.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="{{ asset('assets/vendor/admin-lte/') }}/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(function() {
            //  blog datatable
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
        // Delete blog
        $('.delete_blog').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            event.preventDefault();
            Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        toastr.success(
                            "Selected blod deleted",
                            'Deleted!', {
                                timeOut: 500,
                                fadeOut: 500,
                                onHidden: function() {
                                    form.submit();
                                }
                            }
                        );
                    }
                })
        });
        // Update blog status
        $('.update-status').click(function(event) {
            event.preventDefault();
            var form = $(this).parents('form:first');
            var url = $(this).parents('form:first').attr("action");
            var value = $(this).parents('form:first').serialize();
            $.ajax({
                data: value,
                url: url,
                type: "PUT",
                success: function(response) {
                    if (response.status == true) {
                        toastr.success(
                            response.message,
                            'Staus Updated!', {
                                timeOut: 500,
                                fadeOut: 500,
                                onHidden: function() {
                                    window.location.reload();
                                }
                            }
                        );
                        //  toastr.success(response.message)
                    } else {
                        toastr.error("Please try again")
                    }
                },
                error: function(response) {
                    toastr.error("Please try again")
                }
            });
        })
    </script>
@endsection
