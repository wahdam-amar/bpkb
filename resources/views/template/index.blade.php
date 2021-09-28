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
                    <div class="inline text-sm right">{{ $content->created_at ?? now()->toDateString() }}</div>
                </div>
            </div>

            <div class="px-6 py-4 border-t border-gray-200">
                <form action="{{ route('template.store') }}" method="post">
                    @csrf
                    <div class="border rounded-lg p-4 bg-gray-200">
                        <textarea name="content" value="{{ $content->content ?? '' }}"
                            class="textarea h-24 textarea-bordered w-full bg-transparent border-0 border-opacity-0 shadow-none focus:outline-none focus:ring-offset-0 focus:border-0">{{ $content->content ?? '' }}</textarea>
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
                    <div class="ml-4 hint-container">
                        <x-hint-button data-value="$name">Name</x-hint-button>
                        <x-hint-button data-value="$duedate">Duedate</x-hint-button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End::Content --}}
    </div>
    </div>

    @push('scripts')
    <script>
        function insertAtCursor(myField, myValue) {
        //IE support
        if (document.selection) {
            myField.focus();
            sel = document.selection.createRange();
            sel.text = myValue;
        }
        // Microsoft Edge
        else if(window.navigator.userAgent.indexOf("Edge") > -1) {
          var startPos = myField.selectionStart; 
          var endPos = myField.selectionEnd; 
              
          myField.value = myField.value.substring(0, startPos)+ myValue 
                 + myField.value.substring(endPos, myField.value.length); 
          
          var pos = startPos + myValue.length;
          myField.focus();
          myField.setSelectionRange(pos, pos);
        }
        //MOZILLA and others
        else if (myField.selectionStart || myField.selectionStart == '0') {
            var startPos = myField.selectionStart;
            var endPos = myField.selectionEnd;
            myField.value = myField.value.substring(0, startPos)
                + myValue
                + myField.value.substring(endPos, myField.value.length);
        } else {
            myField.value += myValue;
        }
    }

    let container = document.getElementsByClassName('hint-container')[0];
    let hint = Array.from(container.children);

    hint.forEach(element => {
        element.onclick = function() {
            insertAtCursor(document.getElementsByTagName('textarea')[0], this.getAttribute('data-value'));
        }
    });

    </script>
    @endpush
</x-app-layout>