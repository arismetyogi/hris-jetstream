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
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'province_code',
                                    'displayName' => 'provinsi',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'zips.urban',
                                    'displayName' => 'kelurahan',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'zips.subdistrict',
                                    'displayName' => 'kecamatan',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'zips.city',
                                    'displayName' => 'kab/kota',
                                ])
                                @include('livewire.includes.th-sorts', [
                                    'name' => 'zips.zipcode',
                                    'displayName' => 'kode pos',
                                ])
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($zips as $zip)
                                <tr class="border-b dark:border-gray-700">
                                    <th scope="row"
                                        class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        {{ $zip->province ? $zip->province->name_en : null }}
                                    </th>
                                    <td class="px-4 py-3">{{ $zip->urban }}</td>
                                    <td class="px-4 py-3">{{ $zip->subdistrict }}</td>
                                    <td class="px-4 py-3">{{ $zip->city }}</td>
                                    <td class="px-4 py-3">{{ $zip->zipcode }}</td>
                                    <td class="px-4 py-3 flex items-center justify-end">
                                        <button class="px-3 py-1 bg-red-500 text-white rounded">X</button>
                                    </td>
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
                            <label class="w-32 text-sm font-medium text-gray-900 dark:text-slate-300 mr-8">Per
                                Page</label>
                        </div>
                        {{ $zips->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
