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
                <th>Password</th>
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
                    
                        <td>
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
                            <form action="{{ route('files.download', $file->id) }}" method="POST">
                            @csrf
                            <div class="form-group col-span-6 sm:col-span-5">
                                    <label class="block font-medium text-sm text-gray-700" for="password">
                                    Password
                                    </label>
                                <input  class="form-input rounded-md shadow-sm mt-1 block w-full form-control shadow-none" type="password" name="password" id="password">
                            </div>
                        </td>

                            <td class="whitespace-no-wrap row-action--icon">
                                {{-- <div>
                                    <button type="submit" class="fa fa-16px fa fa-download"></button>
                                </div> --}}
                                <button type="submit">
                                <a><i class="fa fa-16px fa fa-download"></i></a></button>
                            <a role="button" x-on:click.prevent="deleteItem" href="#"><i
                                class="fa fa-16px fa-trash text-red-500"></i></a>
                            </td>
                        </form>
                        
                        
                    
                </tr>
            @endforeach
        </x-slot>
    </x-data-table>
</div>
