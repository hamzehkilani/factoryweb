<?php

namespace App\Livewire;

use App\Models\image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Trait\ImageTrait;

use Livewire\WithPagination;

class ImageGallary extends Component
{
    use WithFileUploads, WithPagination, ImageTrait;

    public function deleteImage($imagenamefordelete)
    {
        $this->Deletedata($imagenamefordelete);
    }
    public function createImage()
    {
        $this->roles();
        $this->savevediofile();
        $this->Savedata();
    }
    public function render()
    {
        $images_data = image::orderby('created_at', 'desc')->paginate($this->perPageImage);
        return view('livewire.ImageGallary.image-gallary', ['images_data' => $images_data]);
    }
}
