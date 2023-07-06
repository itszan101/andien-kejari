<div>
    <x-data-table :data="$data" :model="$filedata">
        <x-slot name="head">
            <tr>
                <th><a wire:click.prevent="sortBy('id')" role="button" href="#">
                        No.
                        @include('components.sort-icon', ['field' => 'id'])
                    </a></th>
                <th><a wire:click.prevent="sortBy('name')" role="button" href="#">
                        Nama file
                        @include('components.sort-icon', ['field' => 'name'])
                    </a></th>
                <th>Deskripsi</th>
                <th>Tanggal Upload</th>
                <th>Action</th>
            </tr>
        </x-slot>
        <x-slot name="body">
            @foreach ($filedata as $file)
                <tr x-data="window.__controller.dataTableController({{ $file->id }})">
                    <td>{{ $file->id }}</td>
                    <td>{{ $file->name }}</td>
                    <td>{{ $file->deskripsi }}</td>
                    <td>{{ $file->created_at }}</td>
                    <td class="whitespace-no-wrap row-action--icon">
                        
                        <a role="button" href="#" class="mr-3"><i 
                                class="fa fa-16px fa-pen"></i></a>
                        <a role="button" x-on:click.prevent="deleteItem" href="#"><i
                                class="fa fa-16px fa-trash text-red-500"></i></a>
                        
                    </td>
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
