<x-guest-layout>
    <div class="min-h-screen bg-cover bg-center flex items-center justify-center" style="background-image: url('{{ asset('img/bg-login.png') }}')">
        <div class="bg-white bg-opacity-80 p-8 rounded-lg shadow-md w-full max-w-md">
            <h1 class="text-2xl font-bold mb-6 text-center">Register</h1>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <div class="mb-4">
                    <label class="block text-gray-700">Name</label>
                    <input type="text" name="name" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Email</label>
                    <input type="email" name="email" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700">Password</label>
                    <input type="password" name="password" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700">Confirm Password</label>
                    <input type="password" name="password_confirmation" required class="mt-1 block w-full rounded-md shadow-sm border-gray-300">
                </div>

                <button type="submit" class="w-full bg-green-600 text-white py-2 rounded hover:bg-green-700 transition">Register</button>
            </form>
        </div>
    </div>
</x-guest-layout>
