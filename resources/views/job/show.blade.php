<x-layout>
    <x-breadcrumbs :links="['jobs' => route('jobs.index'), $job->title => route('jobs.show', $job)]" />
    <x-job-card :job="$job">
        <div class="mt-4 border-t border-gray-700 pt-4">
            <p class="text-sm text-gray-300 leading-relaxed">{!! nl2br(e($job->description)) !!}</p>
        </div>
    </x-job-card>
</x-layout>
