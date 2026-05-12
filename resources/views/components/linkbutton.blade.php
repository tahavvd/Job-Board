<a href="{{ $href }}"
    {{ $attributes->merge(['class' => 'inline-block rounded-md bg-blue-600 px-4 py-2 text-center text-sm font-semibold text-white shadow-lg hover:bg-blue-500 transition-colors duration-150']) }}>
    {{ $slot }}
</a>
