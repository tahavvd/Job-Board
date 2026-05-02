<div class="relative" x-data>
    <button type="button" class="absolute top-0 right-0" @click="const input = $el.parentElement.querySelector('input');
    input.value = '';
    input.dispatchEvent(new Event('input', { bubbles: true }));
    input.focus();">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="size-4 text-slate-400">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
        </svg>

    </button>
    <input type="text" placeholder="{{ $placeholder }}" name="{{ $name }}" value="{{ $value }}" id="{{ $name }}"
        class="pr-8 w-full rounded-md border-0 py-1.5 px-2.5 text-sm ring-1 ring-slate-300 placeholder:text-slate-400 focus:ring-2">

</div>
