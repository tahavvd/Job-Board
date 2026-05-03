<div @class(['grid gap-1', 'grid-cols-2' => $columns === 2])>
    <label class="flex items-center gap-2 cursor-pointer">
        <input type="radio" name="{{ $name }}" value="" @checked(!request($name))
            class="accent-blue-500" />
        <span class="text-sm text-gray-300">All</span>
    </label>

    @foreach ($optionsWithLabels as $label => $option)
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked(request($name) === $option)
                class="accent-blue-500" />
            <span class="text-sm text-gray-300">{{ $label }}</span>
        </label>
    @endforeach
</div>
