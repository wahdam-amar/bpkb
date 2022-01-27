<div>

    @if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="bg-indigo-900 py-1 lg:px-2">
        <div class="p-2 bg-indigo-800 text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex w-full"
            role="alert">
            <span
                class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3 text-red">Error</span>
            <span class="font-semibold mr-2 text-left flex-auto">{{ $error }}</span>
            <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
            </svg>
        </div>
    </div>
    @endforeach
    @endif

    <div class="flash-message">
        @foreach (['message', 'warning', 'success', 'info'] as $msg)
        @if(Session::has($msg))
        <div class="bg-indigo-900 text-center py-4 lg:px-4">
            <div class="p-2 bg-indigo-800 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
                role="alert">
                <span class="flex rounded-full bg-indigo-500 uppercase px-2 py-1 text-xs font-bold mr-3">$msg</span>
                <span class="font-semibold mr-2 text-left flex-auto">{{ Session::get($msg) }}</span>
                <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z" />
                </svg>
            </div>
        </div>
        @endif
        @endforeach
    </div>

    <form wire:submit.prevent="save">
        <div class="shadow overflow-hidden sm:rounded-md">
            <div class="px-4 py-5 bg-white sm:p-6">
                <div class="grid grid-cols-6 gap-6">
                    <div class="col-span-6 sm:col-span-3">
                        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                        <input wire:model="person.name" type="text" name="name" id="first-name" placeholder="Name"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="nickname" class="block text-sm font-medium text-gray-700">Nickname</label>
                        <input wire:model="person.nickname" type="text" name="nickname"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email
                            address</label>
                        <input wire:model="person.email" type="text" name="email" id="email" placeholder="E-Mail"
                            autocomplete="email"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3">
                        <label for="gender" class="block text-sm font-medium text-gray-700">Gender</label>
                        <select wire:model="person.gender" name="gender"
                            class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                            <option>Male
                            </option>
                            <option selected="selected">Female
                            </option>
                        </select>
                    </div>

                    <div class="col-span-6">
                        <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                        <input wire:model="person.address" type="text" name="address" placeholder="Address"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                        <label for="job" class="block text-sm font-medium text-gray-700">Job</label>
                        <input wire:model="person.job" type="text" name="job" placeholder="Job"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                        <input wire:model="person.phone" type="text" name="phone" placeholder="(+62) 774 8564 984"
                            class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>

                    <div class="col-span-6 sm:col-span-3 lg:col-span-2">
                        <label for="birthdate" class="block text-sm font-medium text-gray-700">Birthdate</label>
                        <input wire:model="person.birthdate" type="date" id="filter-date" name="birthdate"
                            placeholder="2006-07-13"
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