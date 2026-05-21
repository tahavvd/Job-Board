<x-layout>
    <x-breadcrumbs :links="['My Jobs' => '#']" class="mb-4" />

    <div class="mb-8 text-right">
        <a href="{{ route('my-jobs.create') }}"
            class="rounded-md bg-blue-600 px-4 py-2 text-sm font-semibold text-white hover:bg-blue-500">
            Add New
        </a>
    </div>

    @forelse ($myJobs as $job)
        <x-job-card class="mb-4" :job="$job">
            <div class="mt-4 text-xs text-slate-500">
                @forelse ($job->jobApplications as $application)
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <div class="font-medium text-gray-300">{{ $application->user->name }}</div>
                            <div>Applied {{ $application->created_at->diffForHumans() }}</div>
                        </div>
                        <div>${{ number_format($application->expected_salary) }}</div>
                    </div>
                @empty
                    <div>No applications yet</div>
                @endforelse
            </div>
            <div class="mt-4 flex space-x-2">
                <a href="{{ route('my-jobs.edit', $job) }}"
                    class="rounded-md bg-blue-600 px-3 py-1 text-xs font-semibold text-white hover:bg-blue-500">
                    Edit
                </a>
            </div>
            <form action="{{ route('my-jobs.destroy', $job) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit"
                    class="rounded-md bg-red-600 px-3 py-1 text-xs font-semibold text-white hover:bg-red-500">
                    Delete
                </button>
            </form>
        </x-job-card>
    @empty
        <div class="rounded-md border border-dashed border-slate-300 p-8">
            <div class="text-center font-medium">No jobs yet</div>
            <div class="text-center">
                Post your first job
                <a class="text-blue-400 hover:underline" href="{{ route('my-jobs.create') }}">here!</a>
            </div>
        </div>
    @endforelse
</x-layout>
