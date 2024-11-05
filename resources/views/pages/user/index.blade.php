<x-app-layout>
    <section class="mt-10">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <!-- Start Code Here -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden">
                <div class="flex items-center justify-between p-4">
                    <div class="flex">
                        <div class="relative w-full">
                            <input type="text" class="bg-gray-50 border border-x-gray-300" placeholder="Search"
                                required="">
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-base">
                            <tr>
                                <th class="px-4 py-3">
                                    Name
                                </th>
                                <th class="px-4 py-3">
                                    Email
                                </th>
                                <th class="px-4 py-3">
                                    Role
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4">{{ $user->name }}</td>
                                    <td class="px-4">{{ $user->email }}</td>
                                    <td class="px-4">{{ $user->role }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
