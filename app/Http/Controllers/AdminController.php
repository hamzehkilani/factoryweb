<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IRepositry\AdminInterface;

class AdminController extends Controller
{
    protected $AdminPages;
    public function __construct(AdminInterface $_AdminPages)
    {
        $this->AdminPages = $_AdminPages;
    }

    public function index()
    {
        return $this->AdminPages->index();
    }

    public function footer()
    {
        return $this->AdminPages->footer();

    }
    public function contact()
    {
        return $this->AdminPages->contact();

    }
    public function aboutUs()
    {
        return $this->AdminPages->AboutUs();
    }
  


}
