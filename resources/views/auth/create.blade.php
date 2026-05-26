<x-layout>
    <h1 class="my-16 text-center text-4xl font-bold">
        Sign In to Your Account
    </h1>
    <x-card class="my-8 px-16">
        <form method="POST" action="{{ route('auth.store') }}">
            @csrf

            <div class="mb-8">
                <label for="email" class="mb-2 block font-medium">Email</label>
                <x-text-input type="email" name="email" placeholder="Enter your email" />
            </div>

            <div class="mb-8">
                <label for="password" class="mb-2 block font-medium">Password</label>
                <x-text-input type="password" name="password" placeholder="Enter your password" />
            </div>

            <div class="mb-8 flex justify-around text-sm text-gray-100 font-medium">
                <div class="flex items-center gap-2">
                    <input type="checkbox" id="remember" class="accent-blue-500 cursor-pointer">
                    <label for="remember" class="text-sm text-gray-300 cursor-pointer">Remember me</label>
                </div>
                <div>
                    <a href="#" class="text-sm text-blue-400 hover:text-blue-300 transition-colors duration-150">
                        Forgot password?
                    </a>
                </div>
            </div>

            <button type="submit"
                class="w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">
                Log In
            </button>

        </form>
    </x-card>

    <p class="text-center text-sm text-gray-300">
        Don't have an account? <a href="{{ route('register') }}"
            class="text-blue-400 hover:text-blue-300 transition-colors duration-150">Sign up</a>
    </p>
</x-layout>
