<?php
namespace App\Repositry;

use App\IRepositry\AdminInterface;
use App\Models\header;
use Illuminate\Support\Str;
class AdminRepo implements AdminInterface
{
    public function index()
    {
        $currentUrl = url()->current();
        if (Str::contains($currentUrl, 'admin/dashboard')) {
           $pageLoaded = true;
        }
        else{
            $pageLoaded = false;
        }
        $header = header::all()->first();
        if ($header) {
            $header_exist = true;
         
        } else {
            $header_exist = false;
        }
        return view('dashborad.admin.dashborad', [
            'header' => header::first(),
            'pageLoaded' => $pageLoaded,
            'header_exist' => $header_exist,
        ]);
    }
    public function footer()
    {
        return view('dashborad.admin.body.Footer.createfooter');
    }
    public function contact()
    {
        return view('dashborad.admin.body.Contact.createContact');
    }
    public function aboutUs()
    {
        return view('dashborad.admin.body.AboutUs.AboutUs');
    }
}




