<?php

namespace App\Livewire;

use App\Models\footer;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Str;
use App\Http\Controllers\Trait\Footertrait;
class Footertable extends Component
{
    use WithPagination,Footertrait;
    public function mount()
    {
        $this->pagename();
        $this->FooterExist();
    }
    public function FooterCreate()
    {
        $this->roles();
        $this->Savedata();
    }
    public function Footeredit()
    {
        $this->roles();
        $this->updatedata();
    }

    public function createFooter()
    {
        $this->checkfooterexist();
    }
    public function editFooter()
    {
        $this->calleditfooter();
    }

    public function render()
    {
        return view('livewire.Footer.FooterTable', [
            'footer' => footer::first()
        ]);
    }
}