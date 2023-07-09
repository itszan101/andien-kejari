<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;
use App\Models\File;

class AddFiles extends Component
{
    use WithFileUploads;

    public $action;
    public $filedata;
    public $filedataId;
    public $button;
    public $filepath;

    protected function rules()
    {
        if ($this->action == "updatePelatihan") {
            return  [
                'file.name' => 'required|string',
                // 'file.deskripsi' => 'required|string',
                'file.files' => 'mimes:pdf|max:500',
            ];
        } else {
            return  [
                'file.name' => 'required|string',
                // 'file.deskripsi' => 'required|string',
                'file.files' => 'mimes:pdf|max:500',
                'file.user' => 'required',
            ];
        }
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function addFile()
    {
        $this->resetErrorBag();
        $this->validate();

        if (Auth::user()->is_admin) {
            $this->file['user_id'] = $this->file['user'];
        } else {
            $this->file['user_id'] = auth()->user()->id;
        }
        $string = str_replace(' ', '', $this->file['name']);
        
        $this->file['files'] = $this->file['files']->storeAs('files', auth()->user()->id . $string . '.pdf');

        File::create($this->file);

        $this->emit('saved');
        $this->reset('file');
    }

    public function updateFile()
    {
        $this->resetErrorBag();
        $this->validate();

        if (isset($this->file['files'])) {
            $this->file['files'] = $this->file['files']->storeAs('files', auth()->user()->id . $this->file['files'] . '.pdf');
        }
        File::query()
            ->where('id', $this->fileId)
            ->update($this->file);

        $this->emit('saved');
    }

    public function export()
    {
        return response()->download(storage_path('app/' . $this->filepath));
    }

    public function mount()
    {
        if (!$this->file && $this->fileId) {
            $file = File::find($this->fileId);
            $this->file['name'] = $file->name;
            $this->file['deskripsi'] = $file->deskripsi;
            $this->filepath = $file->files;
        }

        $this->button = create_button($this->action, "File");
    }

    public function render()
    {
        if (Auth::user()->is_admin) {
            $user = User::all();
            return view('livewire.add-files', compact('user'));
        } else {
            return view('livewire.add-files', [
                'files' => File::where('user_id', '=', auth()->user()->id)->get(),
            ]);
        }
    }
}
