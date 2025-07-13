@props(['text'])

<a
    {{ $attributes->merge([
        'class' => 'relative inline-block text-black focus:outline-hidden before:absolute
                        before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-green-500 dark:text-white',
    ]) }}>{{ $text }}</a>
