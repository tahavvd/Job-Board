<x-layout>
    <x-breadcrumbs :links="['jobs' => route('jobs.index'), $job->title => route('jobs.show', $job)]" />
    <x-job-card :job="$job" >
        <p class="text-sm text-slate-800 mb-6">{!! nl2br(e($job->description)) !!}</p>
    </x-job-card>
</x-layout>
