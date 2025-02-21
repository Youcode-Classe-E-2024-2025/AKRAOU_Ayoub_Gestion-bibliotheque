<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Modifier le Livre</h1>
        <form method="POST" action="{{ route('books.update', $book) }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Titre</label>
                <input type="text" name="title" id="title" value="{{ old('title', $book->title) }}" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Auteur</label>
                <input type="text" name="author" id="author" value="{{ old('author', $book->author) }}" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" id="description" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">{{ old('description', $book->description) }}</textarea>
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Prix</label>
                <input type="number" name="price" id="price" step="0.01" value="{{ old('price', $book->price) }}" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Enregistrer</button>
        </form>
    </div>
</x-layout>
