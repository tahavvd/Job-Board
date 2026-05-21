<div @class(['grid gap-1', 'grid-cols-2' => $columns === 2])>
    @if ($allOption)
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="{{ $name }}" value="" @checked(!request($name))
                class="accent-blue-500" />
            <span class="text-sm text-gray-300">All</span>
        </label>
    @endif

    @foreach ($optionsWithLabels as $label => $option)
        <label class="flex items-center gap-2 cursor-pointer">
            <input type="radio" name="{{ $name }}" value="{{ $option }}" @checked($option === ($value ?? request($name)))
                class="accent-blue-500" />
            <span class="text-sm text-gray-300">{{ $label }}</span>
        </label>
    @endforeach
</div>
@error($name)
    <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
@enderror
