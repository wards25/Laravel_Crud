<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MotoXpress PH</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">
    <div class="min-h-screen bg-gradient-to-br from-black via-gray-900 to-red-900 text-white">
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

        <!-- Main Content -->
        <div class="max-w-7xl mx-auto px-6 py-10 grid grid-cols-1 md:grid-cols-4 gap-10">
            <!-- Sidebar Filters -->
            <aside class="md:col-span-1 bg-white/10 backdrop-blur-md rounded-xl p-6 shadow-md">
                <h2 class="text-xl font-semibold mb-4 text-red-400">Filters</h2>

                <!-- Brand Filter -->
                <div class="mb-6">
                    <h3 class="text-sm uppercase text-gray-300 mb-2">Brand</h3>
                    <div class="space-y-1 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-red-600" />
                            <span>Yamaha</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-red-600" />
                            <span>Kawasaki</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-red-600" />
                            <span>Honda</span>
                        </label>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="mb-6">
                    <h3 class="text-sm uppercase text-gray-300 mb-2">Price</h3>
                    <div class="space-y-1 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="radio" name="price" class="accent-red-600" />
                            <span>₱50k - ₱150k</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="price" class="accent-red-600" />
                            <span>₱151k - ₱300k</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="radio" name="price" class="accent-red-600" />
                            <span>₱301k - ₱500k</span>
                        </label>
                    </div>
                </div>

                <!-- Transmission Filter -->
                <div class="mb-6">
                    <h3 class="text-sm uppercase text-gray-300 mb-2">Transmission</h3>
                    <div class="space-y-1 text-sm">
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-red-600" />
                            <span>Manual</span>
                        </label>
                        <label class="flex items-center gap-2">
                            <input type="checkbox" class="accent-red-600" />
                            <span>Automatic</span>
                        </label>
                    </div>
                </div>

                <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">Apply
                    Filters</button>
            </aside>

            <!-- Product Grid -->
            <section class="md:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Example Card -->
                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

                <div
                    class="bg-white/10 backdrop-blur-lg rounded-2xl overflow-hidden shadow-xl hover:scale-105 transition duration-300">
                    <img src="https://source.unsplash.com/400x300/?motorcycle" alt="Motorcycle"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="text-lg font-bold text-red-400">Yamaha R15 V4</h3>
                        <p class="text-sm text-gray-300">₱165,000</p>
                        <button class="mt-4 w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg">View
                            Details</button>
                    </div>
                </div>

            </section>
        </div>
        
        <!-- CTA Footer -->
        <footer class="bg-gray-800/50 py-10 text-white text-center">
            <p class="mt-6 text-sm text-white/70">&copy; 2025 MotoTrade Pro. All rights reserved.</p>
        </footer>
    </div>

</body>

</html>
