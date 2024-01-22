<?php
namespace App\Livewire;

use App\Models\Contact;
use Livewire\Component;
use Livewire\WithPagination;
use App\Http\Controllers\Trait\ContuctTrait;

class Contacttable extends Component
{
    use WithPagination, ContuctTrait;
    public function mount()
    {
        $this->pagename();
        $this->contuctExist();
    }
    public function contuctExist()
    {
        $this->cheackcontactexist();
    }
    public function contuctCreate()
    {
        $this->savedata();
    }
    public function contuctedit()
    {
        $this->editdata();
    }
    public function createcontuct()
    {
        $this->cheackexistcontacut();
    }
    public function editcontuct()
    {
        $this->calleditsavedata();
    }
    public function render()
    {
        return view('livewire.Contact.ContactTable', [
            'contuct' => Contact::first()
        ]);
    }
}