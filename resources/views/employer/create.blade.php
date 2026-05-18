<x-layout>
    <x-card>
        <h2 class="text-xl font-bold mb-8 text-center">Create Employer</h2>
        <form action="{{ route('employer.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label class="mb-2 block font-medium" for="company_name">Company Name</label>
                <x-text-input type="text" name="company_name" placeholder="Company name"></x-text-input>
            </div>

            <button type="submit"
                class="w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">
                Create
            </button>
        </form>
    </x-card>
</x-layout>
