<x-layout>
    <x-breadcrumbs :links="['My Jobs' => route('my-jobs.index'), 'Edit Job' => '#']" class="mb-4" />

    <x-card class="mb-8">
        <h2 class="text-center font-bold text-xl mb-8">Edit Job Offer</h2>
        <form action="{{ route('my-jobs.update', $job) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="mb-2 block font-medium" for="title">Title</label>
                <x-text-input name="title" :value="old('title', $job->title)" placeholder="Job title" />
            </div>

            <div class="mb-4">
                <label class="mb-2 block font-medium" for="description">Description</label>
                <x-text-input name="description" type="textarea" :value="old('description', $job->description)" placeholder="Job description" />
            </div>

            <div class="mb-4">
                <label class="mb-2 block font-medium" for="location">Location</label>
                <x-text-input name="location" :value="old('location', $job->location)" placeholder="Job location" />
            </div>

            <div class="mb-4">
                <label class="mb-2 block font-medium" for="salary">Salary</label>
                <x-text-input name="salary" type="number" :value="old('salary', $job->salary)" placeholder="Job salary" />
            </div>

            <div class="mb-4">
                <label class="mb-2 block font-medium">Experience Level</label>
                <x-radio-group name="experience_level" :all-option="false" :value="old('experience_level', $job->experience_level)" :options="array_combine(
                    array_map('ucfirst', \App\Models\JobOffer::$experience),
                    \App\Models\JobOffer::$experience,
                )"
                    :columns="2" />
            </div>

            <div class="mb-4">
                <label class="mb-2 block font-medium">Category</label>
                <x-radio-group name="category" :all-option="false" :value="old('category', $job->category)" :options="array_combine(
                    array_map('ucfirst', \App\Models\JobOffer::$categories),
                    \App\Models\JobOffer::$categories,
                )"
                    :columns="2" />
            </div>

            <button type="submit"
                class="w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">
                Update Job
            </button>
        </form>
    </x-card>
</x-layout>
