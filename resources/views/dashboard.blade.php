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
        
    </div>
</x-app-layout>
