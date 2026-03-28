@props(['disabled' => false, 'field' => '', 'value' => ''])

<textarea {{ $disabled ? 'disabled' : '' }}
    {{ !! $attributes->merge(['class' => 'rounded-md border-gray-300 shadow-sm']) !!}}
    >{{ $value }}</textarea>

@error($field)
<div class="text-sm text-red-600">{{ $message }}</div>
@enderror