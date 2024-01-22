<?php
namespace App\Http\Controllers\Trait;

use Illuminate\Support\Str;
use App\Models\About;
use Illuminate\Validation\ValidationException;

trait AboutusTrait
{
    public $Title;
    public $Descrption;

    public $about_id;
    public $about_exist;
    public $pageLoaded = false;

    public function roles()
    {
        return $this->validate([
            'Title' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
            'Descrption' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
        ]);
    }
    public function pagename()
    {
        $currentUrl = url()->current();

        if (Str::contains($currentUrl, 'admin/dashboard')) {
            $this->pageLoaded = true;
        }
    }
    public function CheackAboutUsExist()
    {
        $about = About::all()->first();
        if ($about) {
            $this->about_exist = true;
            $this->Title = $about->Title;
            $this->about_id = $about->id;
            $this->Descrption = $about->Descrption;
        } else {
            $this->about_exist = false;
        }
    }

    public function savedata()
    {
        try {
            $this->roles();
            toastr()->success("About Us Create successfully");
        } catch (ValidationException $e) {
            toastr()->error("Please Enter Vaild Data");
            throw $e;
        }
        $about = About::create([
            'Title' => $this->Title,
            'Descrption' => $this->Descrption,
        ]);
        return redirect()->route('AboutUs');
    }
    public function editdata()
    {
        try {
            $this->roles();

        } catch (ValidationException $e) {
            session()->flash('errormessage', "Please Enter Vaild Data");
            throw $e;
        }

        $about = About::find($this->about_id);
        if ($about) {
            $about->update([
                'Title' => $this->Title,
                'Descrption' => $this->Descrption,
            ]);
        }
        return session()->flash('message', 'About Edit successfully.');

    }
}