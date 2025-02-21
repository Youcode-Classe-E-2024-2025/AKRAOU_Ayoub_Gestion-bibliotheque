<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Liste des Livres</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($books as $book)
            <div class="bg-white shadow-lg rounded-lg p-6 transition transform hover:scale-105 hover:shadow-xl relative border border-gray-200">
                @auth
                @if(Auth::user()->role === 'admin')
                <a href="{{ route('books.edit', $book) }}" class="absolute top-2 right-8 text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v12a2 2 0 002 2h12a2 2 0 002-2v-5m-10 7l11-11a2.121 2.121 0 00-3-3L8 16v3h3z" />
                    </svg>
                </a>
                <form method="POST" action="{{ route('books.destroy', $book) }}" class="absolute top-2 right-2">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-500 hover:text-red-700">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-5 h-5">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </form>
                @endif
                @if(Auth::user()->role === 'user')
                <form method="POST" action="{{ route('books.borrow', $book) }}">
                    @csrf
                    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Emprunter</button>
                </form>
                @endif
                @endauth
                <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $book->title }}</h2>
                <p class="text-gray-700 mb-2"><span class="font-semibold">Auteur:</span> {{ $book->author }}</p>
                <p class="text-gray-600 mb-4 text-sm font-medium"><span class="font-semibold">Description:</span> {{ Str::limit($book->description, 150) }}</p>

            </div>
            @endforeach
            @unless($books->count())
            <p class="text-gray-600">Aucun livre disponible.</p>
            @endunless
        </div>
    </div>
</x-layout>