<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IRepositry\Mediainterface;
class MediaController extends Controller
{
    protected $mediapages;
    public function __construct(Mediainterface $_mediapages) {
        $this->mediapages = $_mediapages;
    }
    public function imageGallary()
    {
        return $this->mediapages->imageGallary();
    }
    public function videoGallary()
    {
        return $this->mediapages->VideoGallary();
    }
}
