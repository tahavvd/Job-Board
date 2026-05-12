<x-layout>
    <x-breadcrumbs class="mb-4" :links="['jobs' => route('jobs.index'), $jobOffer->title => route('jobs.show', $jobOffer), 'Apply' => '#']" />

    <x-job-card :job="$jobOffer" />
    <x-card>
        <h2 class="text-xl font-bold mb-6 text-center">Your Job Application</h2>

        <form action="{{ route('jobs.applications.store', $jobOffer) }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="expected_salary" class="mb-2 block font-medium">Expected Salary</label>
                <x-text-input type="number" name="expected_salary" />
            </div>

            <button type="submit"
                class="w-full rounded-md bg-blue-600 py-2 text-sm font-semibold text-white hover:bg-blue-500 transition-colors duration-150 shadow-lg">
                Apply
            </button>
        </form>

    </x-card>
</x-layout>
