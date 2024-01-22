<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-footer">
                    <div class="small">تم تسجيل الدخول كـ:</div>
                    {{ auth()->user()->name }} الدور (مشرف)
                </div>
                <div class="sb-sidenav-menu-heading">الأساسي</div>
              
                <a class="nav-link" href="{{ route('home') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-house fa-beat" style="color: white"></i></div>
                    الرئيسية
                </a>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt fa-beat" style="color: white"></i></div>
                    لوحة التحكم
                </a>

                <a class="nav-link" href="{{ route('footer') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-pager fa-beat " style="color: white"></i></div>
                    تذييل الصفحة
                </a>
                <a class="nav-link" href="{{ route('Contact') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-address-book fa-beat" style="color: white"></i></div>
                    الاتصال
                </a>
                <a class="nav-link" href="{{ route('Header') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-heading fa-beat" style="color: white"></i></div>
                    العنوان
                </a>
                <a class="nav-link" href="{{ route('AboutUs') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-address-card fa-beat" style="color: white"></i></div>
                    من نحن
                </a>
                <div class="sb-sidenav-menu-heading" style="display: flex;">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-icons fa-beat" style="color: white;margin-right:3px"></i></div>
                    الوسائط
                </div>
                <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-solid fa-video fa-beat" style="color: white"></i></div>
                    الفيديوهات
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: white">></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('VideoGallary') }}">إنشاء فيديو جديد</a>
                    </nav>
                </div>
                <a class="nav-link collapsed"  data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-regular fa-image fa-beat" style="color: white"></i></div>
                    الصور
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down" style="color: white">></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link" href="{{ route('ImageGallary') }}">إنشاء صور جديدة</a>
                    </nav>
                </div>
            </div>
        </div>
    </nav>
</div>
