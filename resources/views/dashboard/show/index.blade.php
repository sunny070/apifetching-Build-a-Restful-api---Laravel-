<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show') }}
        </h2>
    </x-slot>
    <x-slot name="nav">
        <div class="space-x-4">
        <x-nav-link href="{{ route('show.index') }}" :active="request()->routeIs('show.index')">
            {{ __('Show') }}
        </x-nav-link>
        <x-nav-link href="{{ route('show.create') }}" :active="request()->routeIs('show.create')">
            {{ __('Create') }}
        </x-nav-link>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">

                    <table class="w-full divide-y text-gray-500 bg-indigo-200">
                        <thead class="font-bold text-gray-500 bg-indigo-200">
                            <tr>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
            
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    ID
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    Name
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    Type
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    Email
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    Address
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    City
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                   State
                                </th>
                                <th class="px-2 py-3 text-xs tracking-wider text-left uppercase">
                                    Postal Code
                                 </th>
                            </tr>
                        <tbody class="text-xs divide-y divide-gray-200 bg-indigo-50">
                            @foreach($data as $i)
            
            
                            <tr class="">
                                <td class="px-2 py-4 whitespace-nowrap">
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $i->id }}
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $i->name}}
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $i->type}}
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap">
                                    {{ $i->email }}
            
                                </td>
            
                                <td class="px-2 py-4 whitespace-nowrap ">
                                    {{ $i->address }}
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap ">
                                    {{ $i->city}}
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap ">
                                    {{ $i->state}}
            
                                </td>
                                <td class="px-2 py-4 whitespace-nowrap ">
                                    {{ $i->postal_code}}
            
                                </td>
            
                            </tr>
                            @endforeach
                        </tbody>
                        </thead>
                    </table>
                    <div class="p-2 bg-indigo-300">
                        {{ $data->links() }}
                    </div>
            
            
            
            
            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
