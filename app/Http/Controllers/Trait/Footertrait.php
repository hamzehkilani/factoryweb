<?php 
namespace App\Http\Controllers\Trait;
use Illuminate\Support\Str;
use App\Models\footer;
use Illuminate\Validation\ValidationException;

trait Footertrait
{
    
    public $Facebook_Url;
    public $Youtube_Url;
    public $Instagram_Url;
    public $twitter_Url;
    public $desciption;
    public $Factory_name;
    public $Designed_by;
    public $Footer_id;
    public $description;
    public $Footer_exist;
    public $pageLoaded = false;
    public function roles()
    {
        $this->validate([
            'Facebook_Url' => 'nullable|string|min:10',
            'Youtube_Url' => 'nullable|string|min:10',
            'Instagram_Url' => 'nullable|string|min:10',
            'twitter_Url' => 'nullable|string|min:10',
            'desciption' =>  ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
            'Designed_by' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
            'Factory_name' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
        ]);
    }

    public function pagename()
    {
        $currentUrl = url()->current();

        if (Str::contains($currentUrl, 'admin/dashboard')) {
            $this->pageLoaded = true;
        }
    }
    public function FooterExist()
    {
        $footer = footer::all()->first();
        if ($footer) {
            $this->Footer_exist = true;
            $this->Facebook_Url = $footer->Facebook_Url;
            $this->Factory_name = $footer->Factory_name;
            $this->Youtube_Url = $footer->Youtube_Url;
            $this->Instagram_Url = $footer->Instagram_Url;
            $this->twitter_Url = $footer->twitter_Url;
            $this->desciption = $footer->desciption;
            $this->Designed_by = $footer->Designed_by;
            $this->Footer_id = $footer->id;
        } else {
            $this->Footer_exist = false;
        }

    }

    public function Savedata(){
        $Footer = footer::create([
            'Facebook_Url' => $this->Facebook_Url,
            'Youtube_Url' => $this->Youtube_Url,
            'Instagram_Url' => $this->Youtube_Url,
            'twitter_Url' => $this->twitter_Url,
            'desciption' => $this->desciption,
            'Designed_by' => $this->Designed_by,
            'Factory_name' => $this->Factory_name,

        ]);
    }

    public function updatedata(){
        $footer = Footer::find($this->Footer_id);
        if ($footer) {
            $footer->update([
                'Facebook_Url' => $this->Facebook_Url,
                'Youtube_Url' => $this->Youtube_Url,
                'Instagram_Url' => $this->Instagram_Url,
                'twitter_Url' => $this->twitter_Url,
                'desciption' => $this->desciption,
                'Designed_by' => $this->Designed_by,
                'Factory_name' => $this->Factory_name,

            ]);
        }
    }

    public function checkfooterexist(){
        if ($this->Footer_exist) {
            return session()->flash('errormessage', 'Footer Alardy Exist.');
        } else {
            try{
                $this->FooterCreate();
                toastr()->success('Footer created successfully.');
            }
         catch (ValidationException $e) {
            toastr()->error("Please Enter Vaild Data");
            throw $e;
    
        }
            $this->reset(['Facebook_Url', 'Youtube_Url', 'Instagram_Url', 'twitter_Url', 'desciption', 'Designed_by','Factory_name']);
           return redirect()->route('footer');
        }
    }

    public function calleditfooter(){
        try{
            $this->Footeredit();
            return session()->flash('message', 'Footer Edit successfully.');
        }
     catch (ValidationException $e) {
        session()->flash('errormessage', "Please Enter Vaild Data");
        throw $e;
    }
    }
}