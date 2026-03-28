@if (session('success'))
            <div class="mb-4 px-4 py-2 bg-green-100 text-green-700 border-green-300 rounded-md">
                {{ $slot }}
            </div>
            @endif