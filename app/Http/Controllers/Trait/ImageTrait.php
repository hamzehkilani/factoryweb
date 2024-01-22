<?php 
namespace App\Http\Controllers\Trait;

use Illuminate\Support\Facades\File;
use App\Models\image;

trait ImageTrait {
    public $image;
    public $ImageName;
    public $imageToDelete;
    public $perPageImage = 6;
    public function roles()
    {
        $this->validate([
            'image' => 'required|mimes:jpeg,png,jpg,gif|max:5240',
        ]);

    }

    public function savevediofile()
    {
        $this->ImageName = time() . '.' . $this->image->getClientOriginalName();
        $this->image->storeAs('assets/imagemedia', $this->ImageName, 'public');
    }

    public function Deletefile($imagenamefordelete)
    {
   
        $filePath = public_path('assets/imagemedia/'.$imagenamefordelete);
        if (File::exists($filePath)) {
            File::delete($filePath);
        } else {
            return "file not exists";
        }
    }

    public function Savedata(){
        image::create([
            'Image_Url' => $this->ImageName,
        ]);
        session()->flash('success', 'Image created successfully!');
        $this->reset(['image']);
    }

    public function Deletedata($imagenamefordelete){
        $this->Deletefile($imagenamefordelete);
        $Imagefordelte = image::where('Image_Url', $imagenamefordelete)->first();
        $Imagefordelte->delete();
        session()->flash('success', 'Image created successfully!');
    }
}
