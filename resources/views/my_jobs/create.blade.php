<x-layout>
    <x-card>
        <h2 class="text-center font-bold text-xl mb-8">Create Job Offer</h2>
        <form method="POST" action="{{ route('my-jobs.store') }}">
            @csrf

            <div class="mb-4">
                <label for="title" class="mb-2 block font-medium">Title</label>
                <x-text-input name="title" :value="old('title')" placeholder="Job title" />
            </div>

            <div class="mb-4">
                <label for="description" class="mb-2 block font-medium">Description</label>
                <x-text-input name="description" type="textarea" :value="old('description')" placeholder="Job description" />
            </div>

            <div class="mb-4">
                <label for="location" class="mb-2 block font-medium">Location</label>
                <x-text-input name="location" :value="old('location')" placeholder="Job location" />
            </div>

            <div class="mb-4">
                <label for="salary" class="mb-2 block font-medium">Salary</label>
                <x-text-input name="salary" :value="old('salary')" placeholder="Job salary" />
            </div>

            <div class="mb-4">
                <label for="experience" class="mb-2 block font-medium">Experience Level</label>
                <x-radio-group name="experience" :options="array_combine(
                    array_map('ucfirst', \App\Models\JobOffer::$experience),
                    \App\Models\JobOffer::$experience,
                )" :columns="2" :value="old('experience')"
                    :all-option="false" />
            </div>

            <div class="mb-4">
                <label for="category" class="mb-2 block font-medium">Category</label>
                <x-radio-group name="category" :options="array_combine(
                    array_map('ucfirst', \App\Models\JobOffer::$categories),
                    \App\Models\JobOffer::$categories,
                )" :columns="2" :value="old('category')"
                    :all-option="false" />
            </div>
            <div class="mb-4">
                <button type="submit"
                    class="w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">
                    Create Job Offer
                </button>
            </div>
        </form>
    </x-card>
</x-layout>
