@props([
    'message',
])

<div {{ $attributes->merge(['class' => $getClassesFromType()]) }}>
    {{ $message }}
</div>
