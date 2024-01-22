<?php
namespace App\Repositry;

use App\Models\header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\IRepositry\HeaderInterface;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;

class HeaderRepo implements HeaderInterface
{
    public $imageName = null;
    public $vedioName = null;
    public function roles($request)
    {
        try {
            $validator = $request->validate([
                'Factory_Name' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
                'Title' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
                'Descrption' => ['required', 'string', 'min:5', 'regex:/^[^0-9]*$/'],
                'Image_Urls' => 'mimes:jpeg,png,jpg,gif|max:5000',
                'Vedio_Urls' => 'mimes:mp4,ogg,webm|max:10240',
            ]);
           
        } catch (ValidationException $e) {
            toastr()->error('Please Enter vaild Data');
            throw $e;
        }
    }

    public function header()
    {
        $currentUrl = url()->current();
        if (Str::contains($currentUrl, 'admin/dashboard')) {
            $pageLoaded = true;
        } else {
            $pageLoaded = false;
        }
        $header = header::all()->first();
        if ($header) {
            $header_exist = true;

        } else {
            $header_exist = false;
        }
        return view('dashborad.admin.body.Header.createHeader', [
            'header' => header::first(),
            'pageLoaded' => $pageLoaded,
            'header_exist' => $header_exist,
        ]);
    }

    public function saveFile($request)
    {
        if ($request->file('Image_Urls')) {
            $imagePath = $request->file('Image_Urls');
            $this->imageName = time() . '.' . $imagePath->getClientOriginalName();
            $imagePath->storeAs('assets/ForHeaderMedia/Images', $this->imageName, 'public');
            header::where('id', $request->header_id)->update([
                'Image_Url' => $this->imageName,
            ]);
        }
        if ($request->file('Vedio_Urls')) {
            $vedioPath = $request->file('Vedio_Urls');
            $this->vedioName = time() . '.' . $vedioPath->getClientOriginalName();
            $vedioPath->storeAs('assets/ForHeaderMedia/Videos', $this->vedioName, 'public');
            header::where('id', $request->header_id)->update([
                'Vedio_Url' => $this->vedioName,
            ]);
        }
    }
    public function deleteFile($request)
    {
        if ($request->file('Vedio_Urls') || $request->file('Image_Urls')) {
            $headerbeforedit = header::first();
            $vediobefordelete = $headerbeforedit->Vedio_Url;
            if ($vediobefordelete != '') {
                $filePath = public_path('assets/ForHeaderMedia/Videos/' . $vediobefordelete);
            } else {
                $Imagebefordelete = $headerbeforedit->Image_Url;
                $filePath = public_path('assets/ForHeaderMedia/Images/' . $Imagebefordelete);
            }
            if (File::exists($filePath)) {
                File::delete($filePath);
            } else {
                return "file not exists";
            }
        }
    }
    public function createHeader(Request $request)
    {
        $imageName = null;
        $vedioName = null;
        if ($request->hasFile('Vedio_Urls') || $request->hasFile('Image_Urls')) {
            if ($request->hasFile('Image_Urls') && $request->hasFile('Vedio_Urls')) {

                toastr()->error('please add Image Or Video Not Boath successfully.');

                return redirect()->back();
            }
            $this->roles($request);
            $this->saveFile($request);
            header::create([
                'Factory_Name' => $request->Factory_Name,
                'Title' => $request->Title,
                'Descrption' => $request->Descrption,
                'Image_Url' => $this->imageName,
                'Vedio_Url' => $this->vedioName,
            ]);
            toastr()->success('Header create successfully.');
            return redirect()->back();
        } else {
            toastr()->error('Please Add At Leaset One Image Or Video');
            return redirect()->back();
        }
    }
    public function editHeader(Request $request)
    {
        $this->roles($request);
        if ($request->hasFile('Image_Urls') || $request->hasFile('Vedio_Urls')) {
            if ($request->hasFile('Image_Urls') && $request->hasFile('Vedio_Urls')) {
                toastr()->error('Must Be  Image Or Video Not Boath .');
                return redirect()->back();
            }
            $this->deleteFile($request);
            $this->saveFile($request);
        } else {
            $header_data = header::where('id', $request->header_id)->first();
            $this->imageName = $header_data->Image_Url;
            $this->vedioName = $header_data->Vedio_Url;
        }
        header::where('id', $request->header_id)->update([
            'Factory_Name' => $request->Factory_Name,
            'Title' => $request->Title,
            'Descrption' => $request->Descrption,
            'Image_Url' => $this->imageName,
            'Vedio_Url' => $this->vedioName,
        ]);
        toastr()->success('Header updated successfully.');
        return redirect()->back();
    }


}