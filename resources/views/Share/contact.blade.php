@php
  use App\Models\Contact;
  $Contact_data=Contact::first()
@endphp
<style>
  .info-item.aos-init.aos-animate {
    text-align: end;
}
</style>
<section id="contact" class="contact">

<!--  Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>تواصل معنا </h2>
  <p>نحن هنا لمساعدتك وتقديم المعلومات التي تحتاجها. سواء كانت لديك استفسارات عامة، أو تحتاج إلى دعم العملاء، أو ترغب في استكشاف فرص الشراكة، فلا تتردد في التواصل معنا باستخدام نموذج الاتصال أدناه. يلتزم فريقنا المتفاني بتقديم المساعدة السريعة والمهنية. رضاكم هو أولويتنا. شكرا لاختيارك لنا، ونحن نتطلع إلى الاستماع منك!</p>
</div><!-- End Section Title -->

<div class="container" data-aos="fade-up" data-aos-delay="100">

  <div class="row gy-4">

    <div class="col-lg-12">

      <div class="row gy-4">
        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="200">
            <i class="bi bi-geo-alt"></i>
            <h3>الموقع</h3>
            <p>{{$Contact_data->Street_name??''}}</p>
            <p>{{$Contact_data->City??''}}</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="300">
            <i class="bi bi-telephone"></i>
            <h3>اتصل بنا</h3>
            <p>{{$Contact_data->Factory_Phone??''}}</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="400">
            <i class="bi bi-envelope"></i>
            <h3>البريد الالكتروني</h3>
            <p>{{$Contact_data->Factory_Email??''}}</p>
          </div>
        </div><!-- End Info Item -->

        <div class="col-md-6">
          <div class="info-item" data-aos="fade" data-aos-delay="500">
            <i class="bi bi-clock"></i>
            <h3>ساعات العمل</h3>
            <p>{{($Contact_data->Start_Working_Days??'')}} - {{$Contact_data->End_Working_Days??''}}</p>
            <p>{{$Contact_data->Start_Working_Hours??''}} - {{$Contact_data->End_Working_Hours??''}}</p>
          </div>
        </div><!-- End Info Item -->

      </div>

    </div>

   

  </div>

</div>

</section><!-- End Contact Section -->