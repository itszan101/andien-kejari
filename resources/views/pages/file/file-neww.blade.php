@php
$user = auth()->user();
@endphp

<x-app-layout>
    <x-slot name="header_content">
        @if (!is_null($user))
        <h1>Halo! Selamat Datang, {{ $user->name }}</h1>
            @else
            <h1>Selamat Datang di Aplikasi ANDIEN</h1>
            @endif
        
        
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Layout</a></div>
            <div class="breadcrumb-item">Default Layout</div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <h3 class="text-lg font-medium text-gray-900">File Upload</h3>
                        <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <p class="mt-1 text-sm text-gray-600">
                            Lengkapi data berikut dan submit untuk membuat data file arsip
                        </p>
    
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
    
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form>
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            
                                                    <div class="form-group col-span-6 sm:col-span-5">
                                                                    <label class="block font-medium text-sm text-gray-700" for="deskripsi">
                                                        Deskripsi
                                                    </label>
                                                                    <input  class="form-input rounded-md shadow-sm mt-1 block w-full form-control shadow-none" type="deskripsi" name="deskripsi" id="deskripsi" placeholder="Silahkan masukkan deskripsi file">
                                                                                </div>

                                                                <div class="form-group col-span-6 sm:col-span-5">
                                                                    <label class="block font-medium text-sm text-gray-700" for="file">
                                                        Upload File
                                                    </label>
                                                                    <input  class="form-input rounded-md shadow-sm mt-1 block w-full form-control shadow-none" type="file" name="file" id="file">
                                                                </div>

                                                                <div class="form-group col-span-6 sm:col-span-5">
                                                                    <label class="block font-medium text-sm text-gray-700" for="password">
                                                        Password
                                                    </label>
                                                                    <input  class="form-input rounded-md shadow-sm mt-1 block w-full form-control shadow-none" type="password" name="password" id="password">
                                                                </div>
                                                        </div>
                                                    </div>

                                                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                                        Submit
                                                    </button>
                                            </form>
                                        
    
                        {{-- <form action="{{ route('files.upload') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="file">Choose File:</label>
                                <input type="file" name="file" id="file">
                            </div>
                            <div>
                                <label for="password">Password:</label>
                                <input type="password" name="password" id="password">
                            </div>
                            <div>
                                <label for="deskripsi">Deskripsi:</label>
                                <input type="deskripsi" name="deskripsi" id="deskripsi">
                            </div>
                            <div>
                                <button type="submit">Upload</button>
                            </div>
                        </form>
    
                        <div class="file-list mt-4">
                            @foreach ($files as $file)
                                <div class="file-item">
                                    <div class="file-name">{{ $file->name }}</div>
                                    <div class="file-name">{{ $file->deskripsi }}</div>
                                    <form action="{{ route('files.download', $file->id) }}" method="POST">
                                        @csrf
                                        <div>
                                            <label for="password">Password:</label>
                                            <input type="password" name="password" id="password">
                                        </div>
                                        <div>
                                            <button type="submit">Download</button>
                                        </div>
                                    </form>
                                </div>
                            @endforeach
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
