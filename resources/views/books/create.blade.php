<x-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Ajouter un Livre</h1>
        <form method="POST" action="{{ route('books.store') }}" class="bg-white p-6 rounded-lg shadow-md">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700">Titre</label>
                <input type="text" value="{{ old('title') }}" name="title" id="title" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                @error('title')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="author" class="block text-gray-700">Auteur</label>
                <input type="text" value="{{ old('author') }}" name="author" id="author" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                @error('author')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="description" class="block text-gray-700">Description</label>
                <textarea name="description" value="{{ old('description') }}" id="description" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500"></textarea>
                @error('description')
                    <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-4">
                <label for="price" class="block text-gray-700">Prix</label>
                <input type="number" name="price" value="{{ old('price') }}" id="price" step="0.01" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                @error('price')
                    <div class="text-red-500 text-sm">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Ajouter</button>
        </form>
    </div>
</x-layout>
