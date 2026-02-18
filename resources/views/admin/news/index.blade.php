@extends('admin.layout.admin-master')

@section('styles')
<link rel="stylesheet" href="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
@endsection

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <h1 class="m-0">News & Events</h1>
            <a href="{{ route('news-events.create') }}" class="btn btn-danger">
                + Add News
            </a>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            <div class="card">
                <div class="card-body">
                    <table id="newsTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="80">Image</th>
                                <th>Title</th>
                                <th width="150">Link</th>
                                <th width="150">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($news as $item)
                            <tr>
                                <td>
                                    <img src="{{ asset($item->image) }}" width="80" class="img-fluid rounded">
                                </td>

                                <td>{!! Str::limit(strip_tags($item->title), 60) !!}</td>

                                <td>
                                    @if($item->link)
                                        <a href="{{ $item->link }}" target="_blank">Visit</a>
                                    @endif
                                </td>

                                <td>
                                    <a href="{{ route('news-events.edit',$item->id) }}"
                                       class="btn btn-sm btn-info">Edit</a>

                                    <form action="{{ route('news-events.destroy',$item->id) }}"
                                          method="POST"
                                          class="d-inline deleteForm">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Delete</button>
                                    </form>
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{ asset('assets/back/vendor/admin-lte/') }}/plugins/sweetalert2/sweetalert2.min.js"></script>

<script>
$(function () {

    $('#newsTable').DataTable();

    $('.deleteForm').on('submit', function(e) {
        e.preventDefault();
        let form = this;

        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#e40000',
            confirmButtonText: 'Yes, Delete'
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    });

});
</script>
@endsection
