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
                        <h2 class="font-bold mb-4">Berikut List file data arsip anda. anda dapat memilih "unggah file" untuk membuat arsip baru</h2>
                                <div class="bg-gray-100 text-gray-900 tracking-wider leading-normal">
                            <div class="p-8 pt-4 mt-2 bg-white" x-data="window.__controller.dataTableMainController()" x-init="setCallback();">
                                <div class="flex pb-4 -ml-3">
                                    <a href="/upload"  class="-ml- btn btn-primary shadow-none">
                                        <span class="fas fa-plus"></span> {{ "Unggah File" }}
                                    </a>
                                    {{-- <a href="#" class="ml-2 btn btn-success shadow-none">
                                        <span class="fas fa-file-export"></span> {{ "" }}
                                    </a> --}}
                                </div>
                        
                                <div class="row">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-striped text-sm text-gray-600">
                                            <thead>
                                                <th width="">{{__("ID")}}</th>
                                                <th width="">{{__("File Name")}}</th>
                                                <th width="">{{__("Created_at")}}</th>
                                                <th width="">{{__("Password")}}</th>
                                                <th width="">{{__("action")}}</th>
                                            </thead>
                                            <tbody>
                                                @foreach ($files as $user)
                                                    <tr x-data="window.__controller.dataTableController({{ $user->id }})">
                                                        <td>{{ $user->id }}</td>
                                                        <td>{{ $user->name }}</td>
                                                        <td>{{ $user->created_at->format('d M Y H:i') }}</td>
                                                        <td>
                                                            <label></label>
                                                            <input type="password" name="password" id="password" class="form-control" required="">
                                                        </td>
                                                        <td class="whitespace-no-wrap row-action--icon">
                                                            <a role="button" href="/user/edit/{{ $user->id }}" class="mr-3"><i class="btn btn-outline-success">Download</i></a>
                                                            <a role="button" x-on:click.prevent="deleteItem" href="#"><i class="btn btn-outline-danger">Hapus</i></a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                        
                                <div id="table_pagination" class="py-3">
                                    {{-- {{ $model->onEachSide(1)->links() }} --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>



