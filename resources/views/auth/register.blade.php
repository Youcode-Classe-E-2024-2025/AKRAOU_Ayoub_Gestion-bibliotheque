<x-layout>
    <div class="min-h-screen flex items-center justify-center bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-sm">
            <h2 class="text-2xl font-medium mb-6 text-center text-gray-800">Inscription</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Nom</label>
                    <input type="text" name="name" id="name" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Mot de passe</label>
                    <input type="password" name="password" id="password" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="password_confirmation" class="block text-gray-700">Confirmer le mot de passe</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="w-full border border-gray-300 rounded-md mt-1 p-2 focus:outline-none focus:border-blue-500">
                </div>
                <button type="submit" class="w-full bg-blue-500 text-white py-2 rounded-md hover:bg-blue-600 transition">S'inscrire</button>
            </form>
        </div>
    </div>
</x-layout>
