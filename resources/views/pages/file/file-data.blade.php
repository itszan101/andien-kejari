<x-app-layout>
    <x-slot name="header_content">
        <h1>{{ __('Data File') }}</h1>

        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Data File</a></div>
            <div class="breadcrumb-item"><a href="#">Data File</a></div>
        </div>
    </x-slot>

    <div>
        <livewire:table.main name="filedata" :model="$files" />
    </div>
</x-app-layout>
