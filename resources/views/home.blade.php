<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Motor Shop PH</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white">
    <!-- Header -->
    <header class="bg-gray-900/50 backdrop-blur-md border border-white/10 shadow-lg sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold text-red-500">Motor Shop</h1>
            <nav class="space-x-4">
                <a href="/" class="text-gray-300 hover:text-red-500">Home</a>
                <a href="/shop" class="text-gray-300 hover:text-red-500">Shop</a>
                <a href="#" class="text-gray-300 hover:text-red-500">Financing</a>
                <a href="#" class="text-gray-300 hover:text-red-500">Store Locations</a>
                <a href="#" class="text-gray-300 hover:text-red-500">About</a>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="bg-gradient-to-br from-black to-gray-900 py-20">
        <div class="max-w-6xl mx-auto px-6 text-center">
            <h2 class="text-4xl md:text-5xl font-extrabold text-red-500">Ride Your Dream</h2>
            <p class="mt-4 text-lg text-gray-300">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempora
                eligendi omnis dignissimos optio deleniti illo nihil ratione suscipit quaerat! Numquam placeat, unde est
                accusamus eligendi enim consequuntur laudantium modi provident.</p>
            <div class="mt-6">
                <a href="#featured-motors"
                    class="bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-xl text-lg font-medium shadow">Get
                    Started</a>
            </div>
        </div>
    </section>

    <!-- Features -->
    <section class="py-20 bg-black">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-12 text-white">Why Choose MotoXPress?</h3>
            <div class="grid md:grid-cols-3 gap-10">
                <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2 text-red-500">Easy Financing</h4>
                    <p class="text-gray-300">Lorem Ipsum Dolor.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2 text-red-500">Verified Listings</h4>
                    <p class="text-gray-300">Lorem Ipsum Dolor.</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl shadow hover:shadow-lg transition">
                    <h4 class="text-xl font-semibold mb-2 text-red-500">Real-Time Chat</h4>
                    <p class="text-gray-300">Lorem Ipsum Dolor.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Motor Previews -->
    <section id="featured-motors" class="py-20 bg-gray-900">
        <div class="max-w-6xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10 text-white">Featured Motors</h3>
            <div class="grid md:grid-cols-3 gap-6">
                <div class="bg-gray-800 p-4 rounded-xl shadow">
                    <x-lazy-image src="{{ asset('img/yamaha-r14.jpeg') }}" alt="Yamaha R15 V4" />
                    <h4 class="text-lg font-bold text-white">Yamaha R15 V4</h4>
                    <p class="text-sm text-gray-400">₱120,000</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-xl shadow">
                    <x-lazy-image src="{{ asset('img/cbr-150.jpg') }}" alt="Honda CBR150" />
                    <h4 class="text-lg font-bold text-white">Honda CBR150</h4>
                    <p class="text-sm text-gray-400">₱135,000</p>
                </div>
                <div class="bg-gray-800 p-4 rounded-xl shadow">
                    <x-lazy-image src="{{ asset('img/yamaha-125-i.jpg') }}" alt="Yamaha Mio i125" />
                    <h4 class="text-lg font-bold text-white">Yamaha Mio i125</h4>
                    <p class="text-sm text-gray-400">₱72,000</p>
                </div>
            </div>
        </div>
    </section>


    <!-- Testimonials -->
    <section class="bg-black py-20">
        <div class="max-w-5xl mx-auto px-6">
            <h3 class="text-3xl font-bold text-center mb-10 text-white">What Our Customers Say</h3>
            <div class="grid md:grid-cols-2 gap-10">
                <div class="bg-gray-800 p-6 rounded-xl shadow">
                    <p class="italic text-gray-300">"MotoTrade Pro helped me find my dream bike quickly and hassle-free.
                        Highly recommended!"</p>
                    <p class="mt-4 font-bold text-red-500">– John, Manila</p>
                </div>
                <div class="bg-gray-800 p-6 rounded-xl shadow">
                    <p class="italic text-gray-300">"Super fast financing and trustworthy dealers. I’ll be back for my
                        next bike!"</p>
                    <p class="mt-4 font-bold text-red-500">– Karen, Cebu</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Footer -->
    <div class="bg-gray-900/50 p-10 text-white text-center">
        <h3 class="text-3xl font-bold">Start Trading Motors Today</h3>
        <p class="mt-2 text-lg">Join hundreds of buyers and sellers across the country.</p>
        <a href="#"
            class="mt-6 inline-block bg-white text-red-600 px-6 py-3 rounded-full font-medium hover:bg-gray-200">Sign Up
            Now</a>
    </div>
    <footer class="bg-gray-800/50 py-10 text-white text-center">
        <p class="mt-6 text-sm text-white/70">&copy; 2025 MotoTrade Pro. All rights reserved.</p>
    </footer>
</body>
</html>
