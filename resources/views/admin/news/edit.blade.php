@extends('admin.layout.admin-master')

@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="content-wrapper">

    <div class="content-header">
        <div class="container-fluid d-flex justify-content-between align-items-center mb-3">
            <h1>Edit News / Event</h1>
            <a href="{{ route('news-events.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card card-danger">
                        <div class="card-body">

                            <form action="{{ route('news-events.update', $news_event->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                {{-- Current Image --}}
                                <div class="form-group mb-3">
                                    <label>Current Image</label><br>
                                    <img src="{{ asset($news_event->image) }}" class="img-fluid mb-2" style="max-width: 100%;">
                                </div>

                                {{-- Replace Image --}}
                                <div class="form-group mb-3">
                                    <label>Replace Image (Optional)</label>
                                    <input type="file" name="image" class="form-control">
                                    <small class="text-muted">Leave empty to keep existing image. Recommended: 1900x600 px</small>
                                </div>

                                {{-- Row: Type + Title --}}
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label>Type</label>
                                        <select name="type" id="typeSelect" class="form-control" required>
                                            <option value="{{ $news_event->type }}" selected>{{ $news_event->type }}</option>
                                            <option>Latest News</option>
                                            <option>News</option>
                                            <option>Update</option>
                                            <option>Workshop</option>
                                            <option>Event</option>
                                            <option>Webinar</option>
                                        </select>
                                        <small class="text-muted">You can type if missing</small>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <label>Title</label>
                                        <textarea name="title" id="titleEditor" class="form-control">{!! old('title', $news_event->title) !!}</textarea>
                                    </div>
                                </div>

                                {{-- Description --}}
                                <div class="form-group mb-3">
                                    <label>Description</label>
                                    <textarea name="description" id="descriptionEditor" class="form-control">{!! old('description', $news_event->description) !!}</textarea>
                                </div>

                                {{-- Row: Button Text + Link --}}
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <label>Button Text</label>
                                        <select name="button_text" id="buttonTextSelect" class="form-control">
                                            @if($news_event->button_text)
                                                <option value="{{ $news_event->button_text }}" selected>{{ $news_event->button_text }}</option>
                                            @endif
                                            <option>Read More</option>
                                            <option>Learn More</option>
                                            <option>Apply Now</option>
                                            <option>Watch Now</option>
                                        </select>
                                    </div>
                                    <div class="col-md-9 mb-3">
                                        <label>External Link</label>
                                        <input type="url" name="link" value="{{ old('link', $news_event->link) }}" class="form-control">
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-danger">Update News</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0/dist/js/select2.min.js"></script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

<script>
document.addEventListener("DOMContentLoaded", function() {

    // Type Select2
    $('#typeSelect').select2({
        tags: true,
        placeholder: "Select or type type",
        width: '100%'
    });

    // Button Text Select2
    $('#buttonTextSelect').select2({
        tags: true,
        placeholder: "Select or type button text",
        width: '100%'
    });

    // Title CKEditor (Minimal)
    ClassicEditor
        .create(document.querySelector('#titleEditor'), {
            toolbar: ['bold', 'italic', '|', 'undo', 'redo']
        })
        .then(editor => { window.titleEditor = editor; });

    // Description CKEditor (Full)
    ClassicEditor
        .create(document.querySelector('#descriptionEditor'), {
            toolbar: [
                'heading', '|', 'bold', 'italic', 'underline',
                'link', 'bulletedList', 'numberedList',
                '|', 'blockQuote', 'insertTable', '|',
                'undo', 'redo'
            ]
        })
        .then(editor => { window.descriptionEditor = editor; });

});
</script>
@endsection
