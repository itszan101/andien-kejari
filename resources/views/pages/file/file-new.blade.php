<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Upload File') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Data File</a></div>
            <div class="breadcrumb-item"><a href="#">Data File</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:add-files action="addFile" />
    </div>
</x-app-layout>
