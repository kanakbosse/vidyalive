@extends('dashboard.master')
@section('title', 'Edit Page')

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit University</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route("dashboard.home") }}">Dashboard</a></li>
                        <li class="breadcrumb-item"><a href="{{ route("dashboard.unipages.index") }}">All Universities</a></li>
                        <li class="breadcrumb-item active">Edit University</li>
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
                            <h3 class="card-title">Edit University</h3>
                        </div>
                        <div class="card-body">
                            {{-- Display errors --}}
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            {{-- Display success message --}}
                            @if (session('success'))
                                <div class="alert alert-success">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- Form --}}
                            <form action="{{ route('dashboard.unipages.update', $unipage->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')

                                {{-- Title and Slug --}}
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ old('title', $unipage->title) }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="slug">Slug</label>
                                    <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter slug" value="{{ old('slug', $unipage->slug) }}" required>
                                </div>

                                {{-- Content --}}
                                <div class="form-group">
                                    <label for="content">Content</label>
                                    <textarea class="form-control" id="content" name="content" placeholder="Write content" required>{{ old('content', $unipage->content) }}</textarea>
                                </div>

                                {{-- Tabs --}}
                                <div id="tabs">
                                    <h3>Tabs</h3>
                                    <div id="tab-container">
                                        @foreach ($unipage->tabs as $index => $tab)
                                            <div class="tab">
                                                <input type="text" name="tabs[{{ $index }}][name]" value="{{ $tab->name }}" placeholder="Tab Name" required>
                                                <textarea name="tabs[{{ $index }}][content]" placeholder="Tab Content" required>{{ $tab->content }}</textarea>
                                                <button type="button" class="btn btn-danger btn-sm" onclick="removeTab(this)">Remove Tab</button>
                                            </div>
                                        @endforeach
                                    </div>
                                    <button type="button" class="btn btn-primary mt-2" onclick="addTab()">Add More Tab</button>
                                </div>

                                {{-- Images --}}
                                <!-- Existing Images -->
                                <div class="form-group">
                                    <label for="existing-images">Existing Images</label>
                                    <div id="existing-images">
                                        @foreach ($unipage->images as $image)
                                            <div class="image-wrapper" id="image-{{ $image->id }}">
                                                <img  src="{{ asset("uploads/imagess/".($image->image_path ?? "default.webp")) }}" />
 
                                           
                                            </div>
                                        @endforeach
                                    </div>
                                </div>

                                <!-- Upload New Images -->
                                <div class="form-group">
                                    <label for="images">Upload Images</label>
                                    <input type="file" class="form-control" id="images" name="images[]" multiple>
                                </div>

                                <!-- Status -->
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" id="status" name="status">
                                        <option value="1" {{ $unipage->status ? 'selected' : '' }}>Publish</option>
                                        <option value="0" {{ !$unipage->status ? 'selected' : '' }}>Draft</option>
                                    </select>
                                </div>

                                {{-- Status --}}
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control" name="status" id="status">
                                        <option value="1" {{ $unipage->status ? 'selected' : '' }}>Publish</option>
                                        <option value="0" {{ !$unipage->status ? 'selected' : '' }}>Draft</option>
                                    </select>
                                </div>

                                {{-- Category --}}
                                <div class="form-group">
                                    <label for="category">Category</label>
                                    <select class="form-control" name="category" id="category" style="width: 100%;">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}" {{ $unipage->category_id == $category->id ? 'selected' : '' }}>{{ $category->title }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Tags --}}
                                <div class="form-group">
                                    <label for="tags">Tags</label>
                                    <select class="form-control" name="tags[]" id="tags" multiple>
                                        @foreach ($tags as $tag)
                                            <option value="{{ $tag->name }}" {{ $unipage->tags->contains('name', $tag->name) ? 'selected' : '' }}>{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                {{-- Submit Button --}}
                                <button type="submit" class="btn btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section('style')
<link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/dashboard/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<style>
    .tab { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; background-color: #f9f9f9; }
    #existing-images img { display: block; margin-bottom: 5px; }
</style>
@endsection

@section('script')
<script src="{{ asset('assets/dashboard/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
    $(document).ready(function() {
        // Slugify
        $('#title').on('input', function() {
            $('#slug').val($(this).val().toLowerCase().replace(/[^a-z0-9]+/g, '-').replace(/(^-|-$)/g, ''));
        });

        // Select2
        $('#category').select2({ theme: 'bootstrap4' });
        $('#tags').select2({ tags: true });

        // Add/Remove Tabs
        let tabIndex = {{ count($unipage->tabs) }};
        function addTab() {
            $('#tab-container').append(`
                <div class="tab">
                    <input type="text" name="tabs[${tabIndex}][name]" placeholder="Tab Name" required>
                    <textarea name="tabs[${tabIndex}][content]" placeholder="Tab Content" required></textarea>
                    <button type="button" class="btn btn-danger btn-sm" onclick="removeTab(this)">Remove Tab</button>
                </div>
            `);
            tabIndex++;
        }
        function removeTab(button) {
            $(button).closest('.tab').remove();
        }
        window.addTab = addTab;
        window.removeTab = removeTab;
    });
</script>

@endsection
