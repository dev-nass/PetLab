@props(['heading', 'subheading', 'alert' => false, 'alert_text' => ''])

<a class="p-3 flex gap-x-4 hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 rounded-lg dark:text-neutral-200 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700"
    href="#">
    <div class="grow">
        <span class="block font-semibold text-sm text-gray-800 dark:text-neutral-200">
            {{ $heading }}
            @if ($alert)
                <span
                    class="inline ms-1 font-medium text-xs bg-blue-600 text-white py-1 px-2 rounded-full">{{ $alert_text }}</span>
            @endif
        </span>
        <p class="text-sm text-gray-500 dark:text-neutral-500">
            {{ $subheading }}
        </p>
    </div>
</a>
