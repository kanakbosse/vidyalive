

@if ($banners->count() > 0)
<section class="blog blog-home4 d-flex align-items-center justify-content-center">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel">
                @foreach ($banners as $banner)
                    <div class="blog-item" style="background-image: url('{{ asset("uploads/banner/".($banner->image ?? "default.webp")) }}')">
                        <div class="blog-banner">
                            <div class="post-overly">
                                <div class="post-overly-content">
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endif
 