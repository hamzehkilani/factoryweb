@php
  use App\Models\footer;
  use App\Models\Contact;
  $footer_data=footer::first();
  $Contact_data=Contact::first();
@endphp

<footer id="footer" class="footer">

    <div class="container footer-top" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="#hero" class="logo d-flex align-items-center">
            <span>{{$footer_data->Factory_name??"Append"}}</span>
          </a>
          <p style="    text-align: end;">{{$footer_data->desciption??""}}</p>
          <div class="social-links d-flex mt-4">
            <a href="{{$footer_data->twitter_Url??''}}"><i class="bi bi-twitter"></i></a>
            <a href="{{$footer_data->Facebook_Url??''}}"><i class="bi bi-facebook"></i></a>
            <a href="{{$footer_data->Instagram_Url??''}}"><i class="bi bi-instagram"></i></a>
            <a href="{{$footer_data->Youtube_Url??''}}"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>روابط مفيده</h4>
          <ul>
            <li><a href="#hero">الصفحه الرئيسيه</a></li>
            <li><a href="#about">معلومات عنا </a></li>
            <li><a href="#portfolio">المعرض</a></li>

          </ul>
        </div>


        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>تواصل معنا</h4>
          <div class="d-flex" style="flex-direction:row-reverse" >
            <div class="d-flex ml-1" style="flex-direction:row-reverse">
              <strong>الموقع</strong>
              <strong>:</strong>

            </div>
            <div style="margin-right: 5px;">
              <span>{{$Contact_data->Street_name??""}}</span>
              <span>{{$Contact_data->City??""}}</span>
            </div>
          </div>
          <p ><strong>رقم الجوال:</strong> <span>{{$Contact_data->Factory_Phone??""}}</span></p>
          <p style="text-align: end !important;width: 167px;     margin-top: 18px;"><strong>البريد الالكتروني:</strong> <span>{{$Contact_data->Factory_Email??""}}</span></p>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>&copy; <span>Copyright</span> <strong class="px-1">{{$Contact_data->Factory_name??""}}</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
      
        Designed by <a href="https://www.linkedin.com/in/hamzeh-kilani-ba689523b/" style="color: #e84545;">{{$footer_data->Designed_by??''}}</a>
      </div>
    </div>

  </footer>