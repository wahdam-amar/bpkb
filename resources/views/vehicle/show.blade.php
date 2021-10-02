<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ $vehicle->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="mt-10 sm:mt-0">
                        <div class="md:grid md:grid-cols-3 md:gap-6">
                            <div class="md:col-span-1">
                                <div class="px-4 sm:px-0">
                                    <h3 class="text-lg font-medium leading-6 text-gray-900">Vehicle Information</h3>
                                    <p class="mt-1 text-sm text-gray-600">
                                        Vehicle detail form
                                    </p>
                                    @if($errors->any())
                                    {!! implode('', $errors->all('<div class="text-gray-700 my-4">:message</div>')) !!}
                                    @endif
                                </div>
                            </div>
                            <div class="mt-5 md:mt-0 md:col-span-2">
                                <form action="{{ route('vehicle.update', $vehicle->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="shadow overflow-hidden sm:rounded-md">
                                        <div class="px-4 py-5 bg-white sm:p-6">
                                            <div class="grid grid-cols-6 gap-6">
                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="name"
                                                        class="block text-sm font-medium text-gray-700">Name</label>
                                                    <input type="text" name="name" id="first-name"
                                                        value="{{ $vehicle->name }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="nickname"
                                                        class="block text-sm font-medium text-gray-700">Brand</label>
                                                    <input type="text" name="brand" value="{{ $vehicle->brand }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="email"
                                                        class="block text-sm font-medium text-gray-700">Tanggal
                                                        Pembuatan</label>
                                                    <input type="text" name="made_date"
                                                        value="{{ $vehicle->made_date }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3">
                                                    <label for="gender"
                                                        class="block text-sm font-medium text-gray-700">Tanggal Jatuh
                                                        Tempo</label>
                                                    <input type="text" name="effective_date"
                                                        value="{{ $vehicle->effective_date }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">

                                                </div>

                                                <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                                                    <label for="plate"
                                                        class="block text-sm font-medium text-gray-700">Plat</label>
                                                    <input type="text" name="plate" value="{{ $vehicle->plate }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                    <label for="engine"
                                                        class="block text-sm font-medium text-gray-700">No Mesin</label>
                                                    <input type="text" name="engine" value="{{ $vehicle->engine }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>

                                                <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                                                    <label for="frame"
                                                        class="block text-sm font-medium text-gray-700">No
                                                        Rangka</label>
                                                    <input type="text" name="frame" value="{{ $vehicle->frame }}"
                                                        class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                            <button type="submit"
                                                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                                Save
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="hidden sm:block" aria-hidden="true">
                        <div class="py-5">
                            <div class="border-t border-gray-200"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>