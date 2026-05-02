<div @class(['grid', 'grid-cols-2' => $columns === 2])>
    <label class="mb-1 flex items-center">
        <input type="radio" name="{{ $name }}" value="" @checked(!request($name)) />
        <span class="ml-0.5">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
        <label class="mb-1 flex items-center">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked(request($name) === $option) />
            <span>{{ $label }}</span>
        </label>
    @endforeach
</div>
