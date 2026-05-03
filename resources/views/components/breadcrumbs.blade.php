<nav {{ $attributes }}>
    <ul class="flex space-x-3 text-sm text-gray-400 mb-6">
        <li>
            <a href="/" class="hover:text-blue-400 transition-colors">Home</a>
        </li>

        @foreach ($links as $label => $link)
            <li class="text-gray-600">›</li>
            <li>
                <a href="{{ $link }}"
                    class="hover:text-blue-400 transition-colors capitalize">{{ $label }}</a>
            </li>
        @endforeach
    </ul>
</nav>
