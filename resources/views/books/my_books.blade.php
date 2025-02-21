<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Mes Livres</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($books as $book)
                <div class="bg-white shadow-lg rounded-lg p-6 transition transform hover:scale-105 hover:shadow-xl">
                    <h2 class="text-xl font-semibold mb-2 text-gray-800">{{ $book->title }}</h2>
                    <p class="text-gray-600 text-sm">
                        <span class="font-semibold">Auteur:</span> {{ $book->author }}
                        <br><span class="font-semibold">Description:</span> {{ Str::limit($book->description, 150) }}
                    </p>
                    <form method="POST" action="{{ route('books.return', $book) }}">
                        @csrf
                        <button type="submit" class="bg-red-500 text-white px-4 py-2 rounded hover:bg-red-600 mt-4">Retourner</button>
                    </form>
                </div>
            @endforeach
            @unless($books->count())
                <p class="text-gray-600">Vous n'avez pas encore emprunté de livres.</p>
            @endunless
        </div>
    </div>
</x-layout>
