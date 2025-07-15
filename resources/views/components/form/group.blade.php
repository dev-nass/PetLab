@props(['for', 'label', 'id', 'name', 'type', 'required' => true])

<div>
    <x-form.label for="{{ $for }}" label="{{ $label }}" />
    <x-form.input id="{{ $id }}" name="{{ $name }}" type="{{ $type }}"
        required="{{ $required }}" />
</div>
