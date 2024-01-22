@php
  use App\Models\image;
  use App\Models\video;
  $images = image::limit(9)->inRandomOrder()->get();
  $videos = video::limit(8)->inRandomOrder()->get();
@endphp
<style>
video {
    max-width: 100%;
    height: 100%;
}
</style>
<section id="portfolio" class="portfolio">
  <div class="container section-title" data-aos="fade-up">
      <h2>المعرض</h2>
      <p>يسعدني أن أشارككم مجموعة مختارة من أفضل أعمالي. استكشف المشاريع المميزة أدناه للحصول على لمحة عن مهاراتي وإبداعي</p>
  </div>
  <div class="container">
      <div class="isotope-layout" data-default-filter=".filter-image" data-layout="masonry" data-sort="original-order">
          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
              <li data-filter=".filter-image" class="filter-active">صور</li>
              <li data-filter=".filter-video">فيديوهات</li>
          </ul>
          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
              @foreach ($images as $image)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $image->type??'image' }}">
                  <img src="{{ asset('/assets/imagemedia/' . $image->Image_Url) }}" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4></h4>
                      <a href="{{ asset('/assets/imagemedia/' . $image->Image_Url) }}" title="" data-gallery="portfolio-gallery-{{ strtolower($image->type??'image') }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="{{ asset('/assets/imagemedia/' . $image->Image_Url) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>
              @endforeach

              @foreach ($videos as $video)
              <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-{{ $video->type??'video' }}">
                <video autoplay muted loop >
                  <source src="{{ asset('/assets/videomedia/' . $video->Video_Url) }}"
                      type="video/mp4" style="    
                      max-width: 100%;
                      height: auto;"> 
              </video>
                  <div class="portfolio-info">
                      <h4></h4>
                      <a href="{{ asset('/assets/videomedia/' . $video->Video_Url) }}"  data-gallery="portfolio-gallery-{{ $video->type??'video' }}" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      <a href="{{ asset('/assets/videomedia/' . $video->Video_Url) }}" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a>
                  </div>
              </div>
              @endforeach
          </div>
      </div>
  </div>
</section>
