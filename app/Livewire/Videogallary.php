<?php



namespace App\Livewire;

use App\Http\Controllers\Trait\VideoTrait;
use App\Models\video;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;

use Livewire\WithPagination;

class Videogallary extends Component
{
    use WithFileUploads, WithPagination, VideoTrait;

    public function deletevideo($videonamefordelete)
    {
        $this->Deletedata($videonamefordelete);
    }
    public function createvideo()
    {
        
        
        $this->roles();
        $this->savevediofile();
        $this->Savedata();
    }
    public function render()
    {
        $videos_data = video::paginate($this->perPagevideo);
        return view('livewire.VideoGallary.Video-Gallary', ['videos_data' => $videos_data]);
    }
}
