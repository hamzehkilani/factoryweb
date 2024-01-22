<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\IRepositry\HeaderInterface;
class HeaderController extends Controller
{
   public $header_workshop;
   public function __construct(HeaderInterface $_header_workshop) {
    $this->header_workshop = $_header_workshop;
   }
   public function header()
   {
       return $this->header_workshop->header();

   }
   public function editHeader(request $request)
   {
       return $this->header_workshop->editHeader($request);

   }
   public function createHeader(request $request)
   {
       return $this->header_workshop->createHeader($request);

   }
}
