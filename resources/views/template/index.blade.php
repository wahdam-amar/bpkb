<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Template
        </h2>
    </x-slot>

    <div class="py-12">
        {{-- Content --}}
        <div class="w-2/3 flex flex-col mx-auto bg-white shadow-lg rounded-lg overflow-hidden">

            <div class="bg-gray-200 text-gray-700 text-lg px-6 py-4">
                <div class="flex justify-between items-center">Content
                    <div class="inline text-sm right">{{ $content->created_at->toDateString() }}</div>
                </div>
            </div>

            <div class="px-6 py-4 border-t border-gray-200">
                <form action="{{ route('template.store') }}" method="post">
                    @csrf
                    <div class="border rounded-lg p-4 bg-gray-200">
                        <textarea name="content" placeholder="{{ $content->content }}" value="{{ $content->content }}"
                            class="textarea h-24 textarea-bordered w-full bg-transparent border-0 border-opacity-0 shadow-none focus:outline-none focus:ring-offset-0 focus:border-0"></textarea>
                    </div>
                    <button class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-1"
                        type="submit">
                        Save
                    </button>
                </form>
            </div>

            <div class="bg-gray-200 px-6 py-4">
                <div class="uppercase text-xs text-gray-600 font-bold">Hint</div>

                <div class="flex items-center pt-3">
                    <div class="ml-4">
                        <span
                            class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 bg-indigo-700 rounded">Name</span>
                        <span
                            class="inline-flex items-center justify-center px-2 py-1 text-xs font-bold leading-none text-indigo-100 bg-indigo-700 rounded">Duedate</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- End::Content --}}
    </div>
    </div>
</x-app-layout>