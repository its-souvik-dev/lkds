<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    @stack('styles')
</head>
<body class="bg-gray-50 font-sans">
    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-gray-200 text-gray-800">
            {{-- <div class="container mx-auto px-4 py-3 flex justify-between items-center">
                <a href="{{ url('/') }}" class="text-xl font-semibold">App</a>
                <nav class="space-x-3">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="hover:text-gray-600">Dashboard</a>
                        <form action="{{ route('logout') }}" method="POST" class="inline">
                            @csrf
                            <button type="submit" class="hover:text-gray-600">Logout</button>
                        </form>
                    @else
                        <a href="{{ url('/login') }}" class="hover:text-gray-600">Login</a>
                        <a href="{{ url('/register') }}" class="hover:text-gray-600">Register</a>
                    @endauth
                </nav>
            </div> --}}
        </header>

        <!-- Main Content -->
        <main class="flex-grow container mx-auto px-4 py-6">
            @yield('content')
        </main>

        <!-- Footer -->
        <footer class="bg-gray-200 text-gray-800 py-3">
            <div class="container mx-auto px-4 text-center">
                <p>&copy; {{ date('Y') }} LKDS | All Right Reserve | Developed By Souvik</p>
            </div>
        </footer>
    </div>
    @stack('scripts')
</body>
</html>