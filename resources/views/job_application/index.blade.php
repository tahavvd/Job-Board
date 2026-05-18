<x-layout>
    <x-breadcrumbs class="mb-6" :links="['My Applications' => '#']" />

    @forelse ($applications as $application)
        <x-job-card :job="$application->jobOffer">
            <div class="flex items-center justify-between mt-4 border-t border-slate-700 pt-4">
                <div class="flex items-center gap-2 text-sm text-slate-400">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-4 h-4 text-emerald-400">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6l4 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <span>
                        Applied
                        <span class="text-slate-200 font-medium">
                            {{ $application->created_at->diffForHumans() }}
                        </span>
                    </span>
                </div>

                <form action="{{ route('my-applications.destroy', $application) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button type="submit"
                        class="rounded-lg border border-red-500/30 bg-red-500/10 px-4 py-2 text-sm font-medium text-red-400 transition hover:bg-red-500 hover:text-white">
                        Delete
                    </button>
                </form>
            </div>
        </x-job-card>
    @empty
        <p class="text-center text-gray-400">You have not applied to any jobs yet.</p>
    @endforelse
</x-layout>
