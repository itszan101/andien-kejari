<div id="form-create">
    <x-jet-form-section :submit="$action" class="mb-4" enctype="multipart/form-data">
        <x-slot name="title">
            {{ __('Upload arsip File') }}
        </x-slot>

        <x-slot name="description">
            {{ __('Lengkapi data berikut dan submit untuk membuat arsip data') }}
        </x-slot>

        <x-slot name="form">
            @if ($action == "addFile" && Auth::user()->is_admin)
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="jenjang" value="{{ __('Pilih Pengguna') }}" /> 
                <select id="user"  class="block mt-1 w-full" name="user" wire:model.defer="file.user">
                    <option value="">
                        -- Pilih Pengguna --
                    </option>
                    @foreach ($user as $asn)
                        <option value="{{ $asn->id }}">{{ $asn->name }}</option>
                    @endforeach    
                </select>
                <x-jet-input-error for="file.user" class="mt-2" />
            </div>
            @endif
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="nama" value="{{ __('Nama File') }}" />
                <x-jet-input id="nama" type="text" class="mt-1 block w-full form-control shadow-none" wire:model.defer="file.nama" />
                <x-jet-input-error for="file.nama" class="mt-2" />
            </div>

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="deskripsi" value="{{ __('Deskripsi') }}" />
                <input type="text" class="mt-1 block w-full" id="deskripsi" wire:model.defer="file.deskripsi">
                <x-jet-input-error for="file.deskripsi" class="mt-2" />
            </div>

            @if ($action == "updateFile")
            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-secondary-button wire:click="export">
                    {{ __('Download File') }}
                </x-jet-secondary-button>
            </div>
            @endif

            <div class="form-group col-span-6 sm:col-span-5">
                <x-jet-label for="file" value="{{ __('Upload File') }}" />
                <x-jet-input id="file" type="file" accept="application/pdf" class="mt-1 block w-full form-control shadow-none" wire:model.defer="file.files" />
                <x-jet-input-error for="file.files" class="mt-2" />
            </div>

        </x-slot>

        <x-slot name="actions">
            <x-jet-action-message class="mr-3" on="saved">
                {{ __($button['submit_response']) }}
            </x-jet-action-message>

            <x-jet-button>
                {{ __($button['submit_text']) }}
            </x-jet-button>
        </x-slot>
    </x-jet-form-section>

    <x-notify-message on="saved" type="success" :message="__($button['submit_response_notyf'])" />
</div>
