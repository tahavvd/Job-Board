<x-layout>
    <x-breadcrumbs :links="['jobs' => route('jobs.index'), $job->title => route('jobs.show', $job)]" />

    <x-job-card :job="$job">
        <div class="mt-4 border-t border-gray-700 pt-4">
            <p class="text-sm text-gray-300 leading-relaxed">{!! nl2br(e($job->description)) !!}</p>
            @can('apply', [App\Models\JobOffer::class, $job])
                <x-linkbutton href="{{ route('jobs.applications.create', $job) }}" class="mt-6 w-full">
                    Apply Now
                </x-linkbutton>
            @else
                <div class="mt-6 w-full rounded-md bg-gray-700/50 px-4 py-2 text-center text-sm font-semibold text-gray-400">
                    You have already applied for this job
                </div>
            @endcan
        </div>
    </x-job-card>

    @if ($job->employer->jobOffers->where('id', '!=', $job->id)->count() > 0)

        <x-card class="mt-8">
            <h3 class="text-lg font-semibold text-white mb-4">
                More {{ $job->employer->company_name }} Jobs
            </h3>

            @foreach ($job->employer->jobOffers as $relatedJob)
                @if ($relatedJob->id !== $job->id)
                    <div class="mb-4 flex justify-between items-center">
                        <div>
                            <a href="{{ route('jobs.show', $relatedJob) }}"
                                class="text-sm text-white hover:text-blue-400 transition-colors">
                                {{ $relatedJob->title }}
                            </a>
                            <div class="text-xs text-gray-400 mt-0.5">
                                {{ $relatedJob->created_at->diffForHumans() }}
                            </div>
                        </div>
                        <div class="text-sm font-medium text-blue-400">
                            ${{ number_format($relatedJob->salary) }}
                        </div>
                    </div>
                @endif
            @endforeach
        </x-card>

    @endif
</x-layout>
