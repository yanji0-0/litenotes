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

         <a href="{{ route('notes.create') }}" class="btn-link btn-lg mb-2">+ New Note</a>

         <div class="mt-8">
                @forelse ($notes as $note)    
                <div class="mb-6 p-6 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                        <h2 class="font-bold text-2xl text-gray-900 dark:text-white">
                            <a href="{{ route('notes.show', $note) }}">
                                {{ $note->title }}
                            </a>
                        </h2>
                        <p class="mt-2 text-gray-700 dark:text-gray-300">
                            {{ Str::limit($note->text, 200) }}
                        </p>

                        <span class="block mt-4 text-sm text-gray-600 dark:text-gray-400">{{ $note->updated_at->diffForHumans() }}</span>
                </div>
                
            @empty
                <p class="text-gray-700 dark:text-gray-300">You have no notes yet.</p>

                @endforelse
         </div>

                {{ $notes->links() }}
         </div>
        </div>
    </div>
</x-app-layout>
