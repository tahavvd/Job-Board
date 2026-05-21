<x-card class="mb-4 hover:border-blue-400 transition-colors duration-200">
    <div class="mb-2 flex justify-between items-start">
        <h2 class="text-base font-semibold text-white">{{ $job->title }}</h2>
        <div class="text-sm font-medium text-blue-400">${{ number_format($job->salary) }}</div>
    </div>

    <div class="mb-4 flex items-center justify-between text-xs text-gray-400">
        <div class="flex space-x-3">
            <div class="flex items-center gap-1">
                <span>🏢</span>
                <span>{{ $job->employer->company_name }}</span>
            </div>
            <div class="flex items-center gap-1">
                <span>📍</span>
                <span>{{ $job->location }}</span>
                @if ($job->deleted_at)
                    <span class="text-xs text-red-500">Deleted</span>
                @endif
            </div>
        </div>

        <div class="flex space-x-2">
            <x-tag>
                <a
                    href="{{ route('jobs.index', ['experience' => $job->experience_Level]) }}">{{ $job->experience_Level }}</a>
            </x-tag>
            <x-tag>
                <a href="{{ route('jobs.index', ['category' => $job->category]) }}">{{ $job->category }}</a>
            </x-tag>
        </div>
    </div>

    <div>
        {{ $slot }}
    </div>
</x-card>
