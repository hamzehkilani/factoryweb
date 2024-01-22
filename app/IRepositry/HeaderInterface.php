<?php 
namespace App\IRepositry;
use Illuminate\Http\Request;

interface HeaderInterface{
    public function header();
    public function editHeader(request $request);
    public function createHeader(request $request);
}