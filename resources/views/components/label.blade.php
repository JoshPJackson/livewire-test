<label {{ $attributes->merge(['class' => "text-sans w-min font-thin"]) }}>
    <span class="flex">{{ $slot }} @if($required)<span class="sup text-danger">*</span>@endif</span>
</label>
