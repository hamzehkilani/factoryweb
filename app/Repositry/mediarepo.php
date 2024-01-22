<?php 
namespace App\Repositry;
use App\IRepositry\Mediainterface;
class Mediarepo implements Mediainterface{
    public function imageGallary()
    {
        return view('dashborad.admin.body.ImageGallary.ImageGallary');
    }
    public function videoGallary()
    {
        return view('dashborad.admin.body.VideoGallary.VideoGallary');
    }
}