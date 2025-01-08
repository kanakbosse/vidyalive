@extends('dashboard.master')
@section('title', 'All Banner - ' . config('app.name'))

@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">All Banners</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('dashboard.home') }}">Dashboard</a></li>
                        <li class="breadcrumb-item active">All Banners</li>
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
                            <h3 class="card-title">All Banners</h3>
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
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">#</th>
                                            <th class="text-center">Image</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Total Posts</th>
                                            <th class="text-center">Status</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($banner as $banners)
                                        <tr>
                                            <td class="text-center">{{ $loop->index + $banner->firstItem() }}</td>
                                            <td class="text-center">
                                                <img width="100px" height="100px" src="{{ asset("uploads/banner/".($banners->image ?? "default.webp")) }}" alt="{{ $banners->title }}"/>
                                            </td>
                                            <td class="text-center">{{ $banners->title }}</td>
                                            <td class="text-center">{{ $banners->posts_count }}</td>
                                            <td class="text-center"><a href="{{ route("dashboard.banner.status", $banners->id) }}"><span class="badge bg-{{ $banners->status ? "success" : "warning" }}">{{ $banners->status ? "Active" : "Inactive" }}</span></a></td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center gap-2">
                                                    <a target="_blank" href="{{ $banners->status ? route("frontend.banner", $banners->slug) : "" }}" class="btn btn-success {{ $banners->status ? "" : " disabled" }}"><i class="fas fa-eye"></i></a>
                                                    <a href="{{ route("dashboard.banner.edit", $banners->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                                    <form action="{{ route("dashboard.banner.destroy", $banners->id) }}" method="POST">
                                                        @method("DELETE")
                                                        @csrf
                                                        <button type="submit" class="btn btn-danger deletebtn"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">No banner found!</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                            {{ $banner->links() }}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

@section("script")
<script src="{{ asset("assets/dashboard/plugins/sweetalert2/sweetalert2.all.js") }}"></script>
<script>
$('.deletebtn').on('click',function(e){
    e.preventDefault();
    var form = $(this).parents('form');
    Swal.fire({
        title: 'Are you sure?',
        type: 'warning',
        icon: 'warning',
        text: 'All posts of this banner will delete!',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            form.submit();
        }
    });
});
</script>
@endsection
