<x-layout>
    <h1 class="my-16 text-4xl font-bold text-center">Create a new account</h1>
    <x-card>
        <form method="POST" action="{{ route('register.store') }}">
            @csrf

            <div class="mb-5">
                <label for="name" class="mb-2 block font-medium">Name</label>
                <x-text-input type="text" name="name" placeholder="Enter your name" :value="old('name')" />
            </div>

            <div class="mb-5">
                <label for="email" class="mb-2 block font-medium">Email</label>
                <x-text-input type="email" name="email" placeholder="Enter your email" :value="old('email')" />
            </div>

            <div class="mb-5">
                <label for="password" class="mb-2 block font-medium">Password</label>
                <x-text-input type="password" name="password" placeholder="Enter your password" />
            </div>

            <div class="mb-5">
                <label for="password_confirmation" class="mb-2 block font-medium">Confirm Password</label>
                <x-text-input type="password" name="password_confirmation" placeholder="Confirm your password" />
            </div>

            <button type="submit"
                class="mt-5 w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">Create
                Account</button>

        </form>
    </x-card>
</x-layout>
