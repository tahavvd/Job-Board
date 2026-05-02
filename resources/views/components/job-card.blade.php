<x-card class="mb-4 hover:border-violet-500/30 transition-colors duration-200">
    <div class="mb-2 flex justify-between items-start">
        <h2 class="text-base font-semibold text-white">{{ $job->title }}</h2>
        <div class="text-sm font-medium text-violet-400">${{ number_format($job->salary) }}</div>
    </div>

    <div class="mb-4 flex items-center justify-between text-xs text-gray-500">
        <div class="flex space-x-3">
            <div class="flex items-center gap-1">
                <span>🏢</span>
                <span>Company name</span>
            </div>
            <div class="flex items-center gap-1">
                <span>📍</span>
                <span>{{ $job->location }}</span>
            </div>
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
