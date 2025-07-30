<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up | Motor Shop PH</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black text-white min-h-screen flex items-center justify-center">
    <div class="w-full max-w-md p-8 bg-gray-900 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-center text-red-500 mb-6">Create an Account</h2>

        @if ($errors->any())
            <div class="bg-red-600 text-white p-4 rounded mb-4">
                <ul class="text-sm list-disc list-inside">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <div>
                <label for="name" class="block mb-1 text-sm font-medium">Full Name</label>
                <input type="text" id="name" name="name" required autofocus
                    class="w-full px-4 py-2 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="email" class="block mb-1 text-sm font-medium">Email Address</label>
                <input type="email" id="email" name="email" required
                    class="w-full px-4 py-2 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="password" class="block mb-1 text-sm font-medium">Password</label>
                <input type="password" id="password" name="password" required
                    class="w-full px-4 py-2 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <div>
                <label for="password_confirmation" class="block mb-1 text-sm font-medium">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required
                    class="w-full px-4 py-2 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-red-500" />
            </div>

            <button type="submit"
                class="w-full bg-red-600 hover:bg-red-700 text-white font-semibold py-2 rounded shadow transition duration-200">
                Sign Up
            </button>
        </form>

        <p class="mt-6 text-sm text-gray-400 text-center">
            Already have an account?
            <a href="{{ route('login') }}" class="text-red-500 hover:underline">Log In</a>
        </p>
    </div>
</body>

</html>
