





<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create') }}
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

                    {{-- "id": 1,
                    "name": "Esta Vandervort V",
                    "type": "I",
                    "email": "peter.gottlieb@gmail.com",
                    "address": "4379 Norwood Key",
                    "city": "Port Fabian",
                    "state": "Arizona",
                    "postalCode": "82250" --}}

                    {{-- $table->string('name');
            $table->string('type');//Individual or Business
            $table->string('email');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('postal_code'); --}}
                    <div>
                        <x-label for="name" value="{{ __('Name') }}" />
                        <x-input id="name" class="block mt-1 w-60 px-7" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        
                        <x-input-error for="name" class="mt-2" />
                    </div>
                    <div>
                        <x-label for="email" value="{{ __('Email') }}" />
                        <x-input id="email" class="block w-80 mt-1" type="text" name="email" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error for="name" class="mt-2" />
                    </div>

                    <div>
                    <select name="type" id="" class="w-20 mb-6 bg-indigo-200 border-none">
                        <option value="">Select Customer Type</option>
                        <option value="I">I</option>
                        <option value="B">B</option>
                    </select>
                    </div>
            
            
            
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
