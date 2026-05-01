<x-card class="mb-4">
    <div class="mb-1 flex justify-between">
        <h2 class="text-lg font-medium">{{ $job->title }}</h2>
        <div class="text-slate-500">${{ number_format($job->salary) }}</div>
    </div>

    <div class="mb-4 flex items-center justify-between text-sm text-slate-500">
        <div class="flex space-x-4">
            <div>Company name</div>
            <div>{{ $job->location }}</div>
        </div>

        <div class="flex space-x-2">
            <x-tag>{{ $job->experience_Level }}</x-tag>
            <x-tag>{{ $job->category }}</x-tag>
        </div>

    </div>

    <div>
        {{ $slot }}
    </div>
</x-card>
