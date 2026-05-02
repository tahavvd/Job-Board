<x-layout>
    <div>

        <x-breadcrumbs :links="['jobs' => route('jobs.index')]" />

        <x-card class="mb-4 text-sm">
            <form action="{{ route('jobs.index') }}" method="GET">
                <div class="mb-4 grid grid-cols-2 gap-4 items-start">
                    <div>
                        <div class="mb-1 font-semibold">Search</div>
                        <x-text-input name="search" value="{{ request('search') }}" placeholder="Search for any text" />
                    </div>

                    <div>
                        <div class="mb-1 font-semibold">Salary Range</div>
                        <div class="flex space-x-1">
                            <x-text-input name="min_salary" value="{{ request('min_salary') }}" placeholder="From" />
                            <x-text-input name="max_salary" value="{{ request('max_salary') }}" placeholder="To" />
                        </div>
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Experience</div>

                        <x-radio-group name="experience" :options="array_combine(array_map('ucfirst', \App\Models\JobOffer::$experience), \App\Models\JobOffer::$experience)" />
                    </div>
                    <div>
                        <div class="mb-1 font-semibold">Category</div>

                        <x-radio-group name="category" :options="array_combine(array_map('ucfirst', \App\Models\JobOffer::$categories), \App\Models\JobOffer::$categories)" :columns="2" />
                    </div>
                </div>

                <button type="submit">Filter</button>
            </form>
        </x-card>

        @foreach ($jobs as $job)
            <x-job-card :job="$job">
                <div>
                    <x-linkbutton :href="route('jobs.show', $job)">
                        View details
                    </x-linkbutton>
                </div>
            </x-job-card>
        @endforeach
    </div>
</x-layout>
