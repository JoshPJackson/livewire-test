<label {{ $attributes->merge(['class' => "mb-2 text-lg text-sans w-min mt-2 font-thin"]) }}>
    <span class="flex">{{ $slot }} @if($required)<span class="sup text-danger">*</span>@endif</span>
</label>
