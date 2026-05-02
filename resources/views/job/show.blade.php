<x-layout>
    <x-breadcrumbs :links="['jobs' => route('jobs.index'), $job->title => route('jobs.show', $job)]" />
    <x-job-card :job="$job">
        <div class="mt-4 border-t border-white/10 pt-4">
            <p class="text-sm text-gray-200 leading-relaxed">{!! nl2br(e($job->description)) !!}</p>
        </div>
    </x-job-card>
</x-layout>
