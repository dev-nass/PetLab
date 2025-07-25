@props(['id', 'name', 'type', 'required' => true])

<!--
    props:
        - id
        - name
        - type
        - required (boolean)
    password:
        - has toggle svg
        - required 'hs-toggle-password'
    email:
        -
-->
<div class="relative">
    @if ($type === 'password')
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
            class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded-lg sm:text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            {{ $required ? 'required' : '' }}>

        <button type="button" data-hs-toggle-password='{ "target": "#hs-toggle-password" }'
            class="absolute inset-y-0 end-0 flex items-center z-20 px-3 cursor-pointer text-gray-400 rounded-e-md focus:outline-hidden focus:text-green-600 dark:text-neutral-600 dark:focus:text-green-500">
            <svg class="shrink-0 size-3.5" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path class="hs-password-active:hidden" d="M9.88 9.88a3 3 0 1 0 4.24 4.24">
                </path>
                <path class="hs-password-active:hidden"
                    d="M10.73 5.08A10.43 10.43 0 0 1 12 5c7 0 10 7 10 7a13.16 13.16 0 0 1-1.67 2.68">
                </path>
                <path class="hs-password-active:hidden"
                    d="M6.61 6.61A13.526 13.526 0 0 0 2 12s3 7 10 7a9.74 9.74 0 0 0 5.39-1.61">
                </path>
                <line class="hs-password-active:hidden" x1="2" x2="22" y1="2" y2="22">
                </line>
                <path class="hidden hs-password-active:block" d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"></path>
                <circle class="hidden hs-password-active:block" cx="12" cy="12" r="3"></circle>
            </svg>
        </button>
    @else
        <input type="{{ $type }}" id="{{ $id }}" name="{{ $name }}"
            class="py-2.5 sm:py-3 px-4 block w-full border border-gray-200 rounded-lg sm:text-sm focus:border-green-500 focus:ring-green-500 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:text-neutral-400 dark:placeholder-neutral-500 dark:focus:ring-neutral-600"
            {{ $required ? 'required' : '' }}>
    @endif
</div>
