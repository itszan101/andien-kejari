<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $files = File::where('user_id', $user->id)->get();

        return view('livewire.file.index', compact('files'));
    }

    public function uploadform()
    {
        $user = Auth::user();
        $files = File::where('user_id', $user->id)->get();
        return view('livewire.file.uploadform', compact('files'));
    }
}
