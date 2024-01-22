<!DOCTYPE html>
<html lang="en">
@include('dashborad.admin.Layouts.head')

<body class="sb-nav-fixed" data-bs-spy="scroll" data-bs-target="#navmenu">
    @include('dashborad.admin.Layouts.header')
    <div id="layoutSidenav">
        <div id="layoutSidenav_content">
            @include('dashborad.admin.Layouts.sidebar')
            @yield('conetnt')
            @include('share.footer')
            <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"
                style="background: black"><i class="fas fa-solid fa-arrow-up" style="color: white"></i></a>
        </div>
    </div>
    @include('dashborad.admin.Layouts.scripts')
</body>

</html>
