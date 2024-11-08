<div>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start coding here -->
            <div class="bg-white dark:bg-gray-800 relative shadow-md sm:rounded-lg overflow-hidden">
                <div class="flex items-center justify-between d p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400"
                                    fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <input wire:model.live.debounce.300ms='search' type="text"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full pl-10 p-2 "
                                placeholder="Search" required="">
                        </div>
                    </div>
                    <div class="flex space-x-3">
                        <div class="flex space-x-3 items-center">
                            {{-- <label class="w-40 text-sm font-medium text-gray-900 dark:text-slate-100">User Type
                            :</label>
                        <select wire:model.live="selectedRole"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                            <option value="">All</option>
                            <option value="user">User</option>
                            <option value="admin">Admin</option>
                            <option value="superadmin">Super Admin</option>
                        </select> --}}
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'departments.name',
                                    'displayName' => 'unit bisnis',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'stores.name',
                                    'displayName' => 'nama outlet',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.first_name',
                                    'displayName' => 'Nama Pegawai',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.sap_id',
                                    'displayName' => 'id sap',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.npp',
                                    'displayName' => 'npp',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.address',
                                    'displayName' => 'alamat',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.phone_no',
                                    'displayName' => 'no telp.',
                                ])
                                @include('livewire.includes.th-no-sort', [
                                    'name' => 'gol darah',
                                ])
                                @include('livewire.includes.th-no-sort', [
                                    'name' => 'agama',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.created_at',
                                    'displayName' => 'created',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'employees.updated_at',
                                    'displayName' => 'last updated',
                                ])
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($employees as $employee)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                    </td>
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $employee->department ? $employee->department_id . ' - ' . $employee->department->name : $employee->department_id }}
                                    </th>
                                    <td class="px-4 py-3">
                                        {{ $employee->store->outlet_sap_id . ' - ' . $employee->store->name }}
                                    </td>
                                    <td class="px-4 py-3">{{ $employee->first_name . ' ' . $employee->last_name }}</td>
                                    <td class="px-4 py-3">{{ $employee->sap_id }}</td>
                                    <td class="px-4 py-3">{{ $employee->npp }}</td>
                                    <td class="px-4 py-3">{{ $employee->address }}</td>
                                    <td class="px-4 py-3">{{ $employee->phone_no }}</td>
                                    <td class="px-4 py-3">{{ $employee->blood_type }}</td>
                                    <td class="px-4 py-3">{{ $employee->religion }}</td>
                                    <td class="px-4 py-3">{{ $employee->created_at }}</td>
                                    <td class="px-4 py-3">{{ $employee->updated_at }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>

                <div class="py-4 px-3">
                    <div class="flex ">
                        <div class="flex space-x-4 items-center mb-3">
                            <select wire:model.live='perPage'
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
                                <option value="5">5</option>
                                <option value="10">10</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="100">100</option>
                            </select>
                            <label class="w-32 text-sm font-medium text-gray-900 dark:text-slate-300">Per Page</label>
                        </div>
                        {{ $employees->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>