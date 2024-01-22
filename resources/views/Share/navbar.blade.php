@php
  use App\Models\header;
  $header_data=header::first();
@endphp

<header id="header" class="header fixed-top d-flex align-items-center">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <a href="" class="logo d-flex align-items-center  me-xl-0">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <h1>{{$header_data->Factory_Name??"Please Enter Factory Name From Header Table"}}</h1>
        <span>.</span>
      </a>

      <!-- Nav Menu -->
      <nav id="navmenu" class="navmenu">
        <ul>
          @auth
          <li><a href="{{route('dashboard')}}">لوحة تحكم المشرف</a></li>
          @endauth
          <li><a href="#contact">تواصل معنا</a></li>
          <li><a href="#portfolio">المعرض</a></li>
          <li><a href="#about">من نحن</a></li>
          <li><a href="#hero" class="active">الصفحه الرئيسيه</a></li>
        

        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav><!-- End Nav Menu -->

      <a  href="#about" style="" class="hideinphonemobile"></a>
   

    </div>
  </header><!-- End Header -->