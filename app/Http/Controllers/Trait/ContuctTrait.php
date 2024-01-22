<?php
namespace App\Http\Controllers\Trait;

use Illuminate\Support\Str;
use App\Models\Contact;
use Illuminate\Validation\ValidationException;

trait ContuctTrait
{
    public $Factory_Phone;
    public $Start_Working_Days;
    public $End_Working_Days;
    public $Start_Working_Hours;
    public $End_Working_Hours;
    public $Factory_Email;
    public $Street_name;
    public $City;
    public $contuct_id;
    public $contuct_exist;
    public $pageLoaded = false;
    public $description;
    public function roles()
    {
        return $this->validate([
            'Factory_Phone' => ['filled', 'string', 'regex:/^\+(?:[0-9] ?){6,14}[0-9]$/'],
            'Start_Working_Days' => 'required|string',
            'End_Working_Days' => 'required|string',
            'Start_Working_Hours' => 'required',
            'End_Working_Hours' => 'required',
            'Factory_Email' => ['required', 'string', 'email'],
            'Street_name' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
            'City' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
        ], [
            'Factory_Phone.regex' => 'Please enter a valid international phone number format (e.g., +123456789012).',
            'Street_name.min' => 'The street name must be at least 5 characters.',
            'City.min' => 'The city name must be at least 5 characters.',
        ]);
    }
    public function pagename()
    {
        $currentUrl = url()->current();

        if (Str::contains($currentUrl, 'admin/dashboard')) {
            $this->pageLoaded = true;
        }
    }
    public function cheackcontactexist()
    {
        $contuct = Contact::all()->first();
        if ($contuct) {
            $this->contuct_exist = true;
            $this->contuct_id = $contuct->id;
            $this->Factory_Phone = $contuct->Factory_Phone;
            $this->Start_Working_Days = $contuct->Start_Working_Days;
            $this->End_Working_Days = $contuct->End_Working_Days;
            $this->Start_Working_Hours = $contuct->Start_Working_Hours;
            $this->End_Working_Hours = $contuct->End_Working_Hours;
            $this->Factory_Email = $contuct->Factory_Email;
            $this->Street_name = $contuct->Street_name;
            $this->City = $contuct->City;
        } else {
            $this->contuct_exist = false;
        }
    }
    public function savedata()
    {

        $this->roles();
        $contuct = Contact::create([
            'Factory_Phone' => $this->Factory_Phone,
            'Start_Working_Days' => $this->Start_Working_Days,
            'End_Working_Days' => $this->End_Working_Days,
            'Start_Working_Hours' => $this->Start_Working_Hours,
            'End_Working_Hours' => $this->End_Working_Hours,
            'Factory_Email' => $this->Factory_Email,
            'Street_name' => $this->Street_name,
            'City' => $this->City,
        ]);
    }
    public function editdata()
    {
        $this->roles();
        $contuct = Contact::find($this->contuct_id);
        if ($contuct) {
            $contuct->update([
                'Factory_Phone' => $this->Factory_Phone,
                'Start_Working_Days' => $this->Start_Working_Days,
                'End_Working_Days' => $this->End_Working_Days,
                'Start_Working_Hours' => $this->Start_Working_Hours,
                'End_Working_Hours' => $this->End_Working_Hours,
                'Factory_Email' => $this->Factory_Email,
                'Street_name' => $this->Street_name,
                'City' => $this->City,
            ]);
        }
    }
    public function cheackexistcontacut()
    {
        if ($this->contuct_exist) {
            return session()->flash('errormessage', 'Contact Alardy Exist.');
        } else {
            try {
                $this->contuctCreate();
                toastr()->success('Contact Created successfully.');
            } catch (ValidationException $e) {
                toastr()->error("Please Enter Vaild Data");
                throw $e;
                
            }
            $this->reset(['Factory_Phone', 'Start_Working_Days', 'End_Working_Days', 'Start_Working_Hours', 'End_Working_Hours', 'Factory_Email', 'Street_name', 'City']);
            return redirect()->route('Contact');
        }
    }
    public function calleditsavedata()
    {
        try {
            $this->contuctedit();
            return session()->flash('message', 'Contact Edit successfully.');
        } catch (ValidationException $e) {
            session()->flash('errormessage', "Please Enter Vaild Data");
            throw $e;
        }
    }
}