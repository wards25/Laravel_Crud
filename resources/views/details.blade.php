<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MotoXpress PH</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-gray-900/50 backdrop-blur-md border border-white/10 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-500">MOTOXPRESS</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-300 hover:text-red-500">Home</a>
                <a href="/shop" class="text-gray-300 hover:text-red-500">Shop</a>
                <a href="#" class="text-gray-300 hover:text-red-500">Financing</a>
                <a href="#" class="text-gray-300 hover:text-red-500">Store Locations</a>
                <a href="#" class="text-gray-300 hover:text-red-500">About</a>
            </nav>
        </div>
    </header>
    <div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-red-900 text-white p-6">
        <div class="max-w-4xl mx-auto bg-white/10 backdrop-blur-md rounded-2xl shadow-xl overflow-hidden">
            <!-- Image -->
            <img src="" alt="" class="w-full h-80 object-cover">

            <!-- Details -->
            <div class="p-6 space-y-4">
                <h1 class="text-3xl font-bold text-red-400"></h1>
                <p class="text-gray-300">Price: <span
                        class="font-semibold text-white">₱</span></p>
                <p class="text-gray-300">Transmission: <span
                        class="text-white"></span></p>
                <p class="text-gray-400 leading-relaxed"></p>

                <a href=""
                    class="inline-block mt-6 bg-red-600 hover:bg-red-700 text-white px-5 py-2 rounded-lg">
                    ← Back to Shop
                </a>
            </div>
        </div>
    </div>
    <footer class="bg-gray-800/50 py-10 text-white text-center">
        <p class="mt-6 text-sm text-white/70">&copy; 2025 MotoTrade Pro. All rights reserved.</p>
    </footer>
</body>

</html>
