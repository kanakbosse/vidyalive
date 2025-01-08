@extends('dashboard.master')
@section('title', 'Edit Page')
@section('content')

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Page</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("dashboard.home") }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("dashboard.location.index") }}">All Pages</a></li>
                        <li class="breadcrumb-item active">Edit Page</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Page</h3>
                        </div>
                        <div class="card-body">
                            @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-ban"></i> Error!</h5>
                                @foreach ($errors->all() as $error)
                                <p class="m-0">{{ $error }}</p>
                                @endforeach
                            </div>
                            @endif
                            @if (session("success"))
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                <h5><i class="icon fas fa-check"></i> Success!</h5>
                                <p class="m-0">{{ session("success") }}</p>
                            </div>
                            @endif
                            <form action="{{ route("dashboard.location.update", $location->id) }}" method="POST">
                                @csrf
                                @method("PUT")
                                <div class="row">
                                    <div class="col-md-8 mx-auto">
                                        <div class="form-group">
                                            <label for="title">Title</label>
                                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $location->title }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="slug">Slug</label>
                                            <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ $location->slug }}"/>
                                        </div>
                                        <div class="form-group">
                                            <label for="content">Content</label>
                                            <textarea class="form-control" id="content" name="content" placeholder="Write content">{{ $location->content }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Status</label>
                                            <select class="form-control" name="status" id="status">
                                                <option value="1" {{ $location->status ? "selected" : "" }}>Publish</option>
                                                <option value="0" {{ !$location->status ? "selected" : "" }}>Draft</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4 mx-auto">
                                        <div class="form-group">
                                            <label for="category">Category</label>
                                            <select class="form-control" name="category" id="category" style="width: 100%;">
                                                @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" {{ $location->category_id == $category->id ? "selected" : "" }}>{{ $category->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        {{-- <div class="form-group">
                                            <label for="tags">Tags</label>
                                            <div class="select2-purple">
                                                <div class="select2-purple">
                                                    <select multiple="multiple" data-placeholder="Select tag" data-dropdown-css-class="select2-purple" class="form-control" name="tags[]" id="tags" style="width: 100%;">
                                                        @foreach ($tags as $tag)
                                                        <option value="{{ $tag->name }}">{{ $tag->name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div> --}}
                                    </div>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section("style")
{{-- <link rel="stylesheet" href="{{ asset("assets/dashboard/plugins/select2/css/select2.min.css") }}"/>
<link rel="stylesheet"                                                                                                                       href="{{ asset("assets/dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css") }}"/> --}}
@endsection

@section("script")
{{-- <script src="{{ asset("assets/dashboard/plugins/sweetalert2/sweetalert2.all.js") }}"></script>
<script src="{{ asset("assets/dashboard/plugins/select2/js/select2.full.min.js") }}"></script>
<script src="{{ asset("assets/dashboard/plugins/speakingurl/speakingurl.min.js") }}"></script>
<script src="{{ asset("assets/dashboard/plugins/slugify/slugify.min.js") }}"></script>
<script>
    $(document).ready(function() {
        $('#title').on("input", () => {
            $('#slug').val($.slugify($('#title').val()));
        });
        $('#category').select2({
            theme: 'bootstrap4'
        });

        $('#tags').select2({
            tags: true,
        });
        @if ($page->tags_count > 0)
        var tags = [];
        @foreach ($page->tags as $tag)
        tags.push('{{ $tag->name }}');
        @endforeach
        $('#tags').val(tags).trigger('change');
        @endif
        $("#content").summernote({
            placeholder: 'Write content...',
            height: 200,
        });
        function readURL(input) {
            if (input.files && input.files[0] && input.files[0].type.includes("image")) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#thumbnailpreview').removeClass("d-none");
                    $('#thumbnailpreview').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            } else {
                $("#thumbnail").val('');
                $('#thumbnailpreview').addClass("d-none");
                Swal.fire({
                    icon: "error",
                    text: "Select a valid image!"
                });
            }
        }
        $("#thumbnail").change(function(){
            readURL(this);
        });
    });
</script> --}}
@endsection