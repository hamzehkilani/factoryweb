@php
  use App\Models\about;
  $about_data=about::first();
@endphp
<section id="about" class="about">
  <div class="container section-title" data-aos="fade-up" data-aos-delay="100">
    <h2>من نحن </h2>
</div>
      <div class="row align-items-xl-center gy-5" data-aos-delay="100">

        <div class="col-xl-12 content" data-aos="fade-up" data-aos-delay="100">
          <h2>{{$about_data->Title??""}}</h2>
          <p>{{$about_data->Descrption??""}}</p>
          <a href="#about" class="read-more"><span> قراءة المزيد</span><i class="bi bi-arrow-left"></i></a>
        </div>

        {{-- <div class="col-xl-7">
          <div class="row gy-4 icon-boxes">

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
              <div class="icon-box">
                <i class="bi bi-buildings"></i>
                <h3>Eius provident</h3>
                <p>Magni repellendus vel ullam hic officia accusantium ipsa dolor omnis dolor voluptatem</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="300">
              <div class="icon-box">
                <i class="bi bi-clipboard-pulse"></i>
                <h3>Rerum aperiam</h3>
                <p>Autem saepe animi et aut aspernatur culpa facere. Rerum saepe rerum voluptates quia</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="400">
              <div class="icon-box">
                <i class="bi bi-command"></i>
                <h3>Veniam omnis</h3>
                <p>Omnis perferendis molestias culpa sed. Recusandae quas possimus. Quod consequatur corrupti</p>
              </div>
            </div> <!-- End Icon Box -->

            <div class="col-md-6" data-aos="fade-up" data-aos-delay="500">
              <div class="icon-box">
                <i class="bi bi-graph-up-arrow"></i>
                <h3>Delares sapiente</h3>
                <p>Sint et dolor voluptas minus possimus nostrum. Reiciendis commodi eligendi omnis quideme lorenda</p>
              </div>
            </div> <!-- End Icon Box -->

          </div>
        </div> --}}

      </div>
    </div>

  </section><!-- End About Section -->
