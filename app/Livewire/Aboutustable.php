<?php
namespace App\Livewire;

use App\Models\About;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use App\Http\Controllers\Trait\AboutusTrait;

class Aboutustable extends Component
{
    use WithPagination, WithFileUploads, AboutusTrait;
    public function mount()
    {
        $this->pagename();
        $this->aboutExist();
    }
    public function aboutExist()
    {
        $this->CheackAboutUsExist();
    }

    public function AboutCreate()
    {
        $this->savedata();
    }
    public function AboutEdit()
    {
        $this->editdata();
    }
    public function render()
    {
        return view('livewire.About.Aboutus-Table', [
            'about' => About::first()
        ]);
    }
}