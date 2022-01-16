<?php

namespace App\Http\Livewire\Admin;

use App\Models\Destination;
use App\Models\DestinationImage;
use Livewire\Component;
use Brian2694\Toastr\Facades\Toastr;
use Livewire\WithFileUploads;

class UploadImages extends Component
{
    use WithFileUploads;
    public $getdest;
    public $picture;
    public function mount($destinationid)
    {
        $this->getdest = $destinationid;
    }
    public function render()
    {
        $images = DestinationImage::where('destination_id', $this->getdest)->get();
        return view('livewire.admin.upload-images', compact('images'));
    }
    protected $rules = [
        'picture' => 'required|image| mimes:png,jpeg, jpg|max:10080',
    ];
    public function uploadimages()
    {
        $this->validate();
        $blog = new DestinationImage;
        $blog->destination_id =  $this->getdest;
        $fileNameWithExt = $this->picture->getClientOriginalName();
        $fileName =  pathinfo($fileNameWithExt, PATHINFO_FILENAME);
        $Extension = $this->picture->getClientOriginalExtension();
        $filenameToStore = $fileName . '-' . time() . '.' . $Extension;
        $path = $this->picture->storeAs('destinations', $filenameToStore, 'public');
        $blog->picture = $filenameToStore;
        $blog->save();
        Toastr::success('Image Uploaded successfully.', 'Success', ["positionClass" => "toast-top-right"]);
        return redirect()->back();
    }
}
