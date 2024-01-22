<?php 
namespace App\Http\Controllers\Trait;

use Illuminate\Support\Facades\File;
use App\Models\video;
use Illuminate\Validation\ValidationException;

trait VideoTrait {
    public $video;
    public $videoName;
    public $perPagevideo = 6;
    public function roles()
    {
        
        $this->validate([
            'video' => 'required|mimes:mp4,webm,mov,ogg|max:10240', 
        ]);
    }
    public function savevediofile()
    {
        $this->videoName = time() . '.' . $this->video->getClientOriginalName();
        $this->video->storeAs('assets/videomedia', $this->videoName, 'public');
    }
    public function Deletefile($videonamefordelete)
    {
        $filePath = public_path('assets/videomedia/' . $videonamefordelete);
        if (File::exists($filePath)) {
            File::delete($filePath);
        } else {
            return "file not exists";
        }
    }
    public function Savedata(){
        video::create([
            'Video_Url' => $this->videoName,
        ]);
        session()->flash('success', 'video created successfully!');
        $this->reset(['video']);
    }
    public function Deletedata($videonamefordelete){
        $this->Deletefile($videonamefordelete);
        $videofordelte = video::where('Video_Url', $videonamefordelete)->first();
        $videofordelte->delete();
        session()->flash('success', 'video Deleted successfully!');
    }
}
