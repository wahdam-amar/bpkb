        {{-- Content --}}
        <div class="w-full md:w-2/3 flex flex-col mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
            <div class="bg-gray-600 text-gray-50 text-lg px-6 py-4">
                <div class="flex justify-between items-center">
                    <span class="font-bold text-lg md:text-xl">Content</span>
                    <div class="inline text-sm right">{{ $template->created_at ?? now()->toDateString() }}</div>
                </div>
            </div>

            <div class="px-6 py-4 border-t border-gray-200">
                <form wire:submit.prevent="submit">
                    @csrf
                    <div class="border rounded-lg p-4 bg-gray-200 my-2">
                        <textarea wire:model="template.content" spellcheck="false" name="content"
                            class="text-slate-900 resize-none font-medium appearance-none textarea h-24 textarea-bordered w-full bg-transparent border-0 border-opacity-0 shadow-none border-transparent focus:border-transparent focus:ring-0">{{ $content->content ?? '' }}</textarea>
                    </div>


                    <div class="mb-6">
                        <label for="phone"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Test</label>
                        <input wire:model="phone" class="w-full p-4 bg-gray-300 text-gray-900 rounded-md" "phone">
                    </div>

                    <div class="inline-flex rounded-md shadow-sm">
                        <button type="button" wire:click="submit"
                            class="py-2 px-4 text-sm font-medium text-blue-700 bg-white rounded-l-md border border-gray-200 hover:bg-gray-100 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            Save
                        </button>
                        <button type="button" wire:click="sendMessage"
                            class="py-2 px-4 text-sm font-medium text-gray-900 bg-white rounded-r-md border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-2 focus:ring-blue-700 focus:text-blue-700 dark:bg-gray-700 dark:border-gray-600 dark:text-white dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-blue-500 dark:focus:text-white">
                            Messages
                        </button>
                    </div>
                </form>
            </div>

            <div class="bg-gray-200 px-6 py-4">
                <div class="uppercase text-xs text-gray-600 text-xs">Hint</div>
                <div class="flex items-center pt-3">
                    <div class="ml-4 hint-container">
                        <x-hint-button data-value="$name">Name</x-hint-button>
                        <x-hint-button data-value="$duedate">Duedate</x-hint-button>
                        <x-hint-button data-value="$amount">Amount</x-hint-button>
                        <x-hint-button data-value="$plate">Plate</x-hint-button>
                        <x-hint-button data-value="$year">Tahun</x-hint-button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End::Content --}}
