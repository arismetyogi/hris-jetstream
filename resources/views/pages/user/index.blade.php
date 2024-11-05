<x-app-layout>
    <section class="m-10">
        <div class="mx-auto my-10 max-w-screen-xl px-4 lg:px-12">
            <!-- Start Code Here -->
            <div class="bg-white ml-6 dark:bg-gray-800 overflow-hidden">
                <div class="flex items-center justify-between p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="text"
                                class="bg-gray-50 border border-x-gray-300 dark:bg-gray-300 dark:border-x-gray-50 dark:text-gray-50"
                                placeholder="Search" required="">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full max-h-screen text-base text-left mx-6 mb-10 text-gray-500 dark:text-slate-100">
                        <thead class="text-lg/7 border-b-slate-50">
                            <tr>
                                <th class="px-4 py-3">
                                    Name
                                </th>
                                <th class="px-4 py-3">
                                    Email
                                </th>
                                <th class="px-4 py-3">
                                    Unit Bisnis
                                </th>
                                <th class="px-4 py-3">
                                    Role
                                </th>
                                <th class="px-4 py-3">
                                    Permissions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="text-base/7">
                            @foreach ($users as $user)
                                <tr class="border-b border-b-gray-200 dark:border-gray-700">
                                    <td class="px-4">{{ $user->first_name . ' ' . $user->last_name }}</td>
                                    <td class="px-4">{{ $user->email }}</td>
                                    <td class="px-4">{{ $user->department->name }}</td>
                                    <td class="px-4">
                                        @foreach ($user->getRoleNames() as $role)
                                            <span>{{ $role }}</span><br>
                                        @endforeach
                                    </td>
                                    <td class="px-4">
                                        @foreach ($user->permissions() as $permission)
                                            <span>{{ $permission }}</span><br>
                                        @endforeach
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>

                    </table>

                </div>
            </div>
        </div>

    </section>
</x-app-layout>
