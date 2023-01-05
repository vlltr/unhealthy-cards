<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Show user
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="py-12 px-4">
                    <ul role="list" class="-my-5 divide-y divide-gray-200">
                        <li class="py-5">
                            <div class="relative focus-within:ring-2 focus-within:ring-indigo-500">
                                <h1 class="text-lg font-semibold text-gray-800">
                                    <span class="absolute inset-0" aria-hidden="true"></span>
                                    {{$user->name}}
                                    </h3>
                                    <p class="mt-1 text-sm text-gray-600 line-clamp-2">
                                        {{$user->email}}</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>