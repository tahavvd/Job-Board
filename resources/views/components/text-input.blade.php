<div class="relative" x-data>
    <button type="button" class="absolute top-1/2 -translate-y-1/2 right-2.5"
        @click="const input = $el.parentElement.querySelector('input');
    input.value = '';
    input.dispatchEvent(new Event('input', { bubbles: true }));
    input.focus();">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-3.5 text-gray-500 hover:text-gray-300 transition-colors">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>
    </button>
    <input type="text" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}"
        id="{{ $name }}"
        class="pr-8 w-full rounded-md border-0 bg-gray-800 py-2 px-3 text-sm text-gray-100 ring-1 ring-gray-700 placeholder:text-gray-500 focus:ring-2 focus:ring-blue-500 focus:outline-none transition">
</div>
