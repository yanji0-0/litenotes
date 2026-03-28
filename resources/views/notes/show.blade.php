<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Notes') }}
        </h2>
    </x-slot>

    <div class="py-12">
         <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-alert-success>
                {{ session('success') }}
            </x-alert-success>

                <div class="mb-6 flex items-center gap-8">
                    
                <p class="opacity-70 text-gray-600 dark:text-gray-400">
                    <strong>Created:</strong> {{  $note->created_at->diffForHumans() }}
                </p>

                <p class="opacity-70 text-gray-600 dark:text-gray-400">
                    <strong>Updated:</strong> {{  $note->updated_at->diffForHumans() }}
                </p>
                
                <a href="{{ route('notes.edit', $note) }}" class="btn-link ml-auto">Edit Note</a>
                <form action="{{ route('notes.destroy', $note)}}" method="post">
                @method('delete')
                @csrf
                <button type="submit" class="btn btn-danger ml-1" onclick="return confirm('Are you sure you want to delete this note?')">Delete Note</button>
                </form>
              </div>
                <div class="mb-6 p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="font-extrabold text-3xl leading-tight text-gray-900 dark:text-white">
                                {{ $note->title }}
                        </h2>
                <p class="mt-6 text-gray-700 dark:text-gray-300 whitespace-pre-wrap" style="white-space: pre-wrap;">{{ $note->text }}</p>

         </div>

         </div>
        </div>
    </div>
</x-app-layout>
