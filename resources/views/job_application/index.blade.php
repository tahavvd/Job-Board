<x-layout>
    <x-breadcrumbs class="mb-6" :links="['My Applications' => '#']" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->jobOffer" />
    @empty
        <p class="text-center text-gray-400">You have not applied to any jobs yet.</p>
    @endforelse
</x-layout>
