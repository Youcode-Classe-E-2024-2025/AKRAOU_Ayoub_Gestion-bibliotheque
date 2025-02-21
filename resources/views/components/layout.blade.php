<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque Municipale de Saint-Marc</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha384-k6RqeWeci5ZR/Lv4MR0sA0FfDOMK5y5z6e1B+q4Y4R1f5E5F5e5F5e5F5e5F" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
        }

        .nav-link {
            color: #5f6368;
            transition: color 0.3s;
        }

        .nav-link:hover {
            color: #1a73e8;
        }
    </style>
</head>

<body class="text-gray-800">
    <nav class="bg-white shadow-md">
        <div class="container mx-auto flex justify-between items-center p-4">
            <a href="/" class="text-lg font-semibold text-gray-800">Bibliothèque Saint-Marc</a>
            <div>
                @auth
                <a href="/books" class="nav-link ml-4">Livres</a>
                    @if(Auth::user()->role === 'admin')
                        <a href="{{ route('admin.dashboard') }}" class="nav-link ml-4">Dashboard Admin</a>
                        <a href="/books/create" class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 ml-4 inline-block">Ajouter un Livre</a>
                    @else
                        <a href="{{ route('books.my_books') }}" class="nav-link ml-4">Mes Livres</a>
                    @endif
                    <form method="POST" action="{{ route('logout') }}" class="inline">
                        @csrf
                        <button type="submit" class="nav-link ml-4">Déconnexion</button>
                    </form>
                @else
                    <a href="/login" class="nav-link ml-4">Connexion</a>
                    <a href="/register" class="nav-link ml-4">Inscription</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container mx-auto py-10 max-w-screen-lg">
        {{ $slot }}
    </main>

    <footer class="bg-white text-gray-800 p-4 mt-10 border-t">
        <div class="container mx-auto text-center">
            &copy; 2025 Bibliothèque Municipale de Saint-Marc. Tous droits réservés.
        </div>
    </footer>
</body>

</html>