@php
  use App\Models\Header;
  $header_data=Header::first();
@endphp
  <section id="hero" class="hero">
    @if($header_data!='')
  @if($header_data->Image_Url!='')
    <img src="{{asset('assets/ForHeaderMedia/Images/'.$header_data->Image_Url)}}??'assets/img/hero-bg.jpg'" alt="" data-aos="fade-in">
    @else

    <video autoplay muted loop alt="" data-aos="fade-in">
      <source src="{{asset('assets/ForHeaderMedia/Videos/'.$header_data->Vedio_Url)}}" type="video/mp4">
  </video> 
  @endif
  @else
  <img src="'assets/img/hero-bg.jpg'" alt="" data-aos="fade-in">

  @endif

    <div class="container">
      <div class="row hero-text-elemnts" >
        <div class="col-lg-10">
          
          <h2 data-aos="fade-up" data-aos-delay="100" class="btn-shine"> {{$header_data->Title??""}}</h2>
          <p data-aos="fade-up" data-aos-delay="200">{{$header_data->Descrption??""}}</p>
        </div>
      
      </div>
    </div>

  </section><!-- End Hero Section -->