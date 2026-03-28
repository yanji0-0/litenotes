<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Note') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <form action="{{ route('notes.update', $note) }}" method="post" class="space-y-6">
                    
                @method('put')
                @csrf
                    <x-text-input
                        type="text"
                        name="title"
                        field="title"
                        placeholder="Title"
                        class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 dark:placeholder-gray-400"
                        autocomplete="off"
                        :value="@old('title', $note->title)"
                    ></x-text-input>

                    <textarea
                        name="text"
                        placeholder="Start typing here..."
                        class="w-full rounded-md border-gray-300 bg-white text-gray-900 placeholder-gray-500 focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 dark:placeholder-gray-400"
                        cols="30"
                        rows="10"
                        field="text"
                        
                    >{{ old('text', $note->text) }}</textarea>

                     @error('text')
                        <div class="text-red-600 text-sm ">{{ $message }}</div>

                    @enderror

                    <x-primary-button class="mt-6">
                    Save Note
                    </x-primary-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
