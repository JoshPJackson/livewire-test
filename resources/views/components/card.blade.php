<div {{ $attributes->merge(['class' => 'bg-white rounded-xl border shadow w-100 p-5']) }}>
    @if($header)
        <div class="mb-4 grid grid-cols-min-auto-1 gap-x-2">
            <h1 class="font-header text-3xl text-purple whitespace-nowrap" style="word-break: keep-all">{{ $header ?? '' }}</h1>
            @if (!empty($headerLinks))
            <div class="inline-block flex justify-end">
                {{ $headerLinks }}
            </div>
            @endif
        </div>
    @endif
    <div class="{{ $bodyClass ?? '' }}">
        {{ $slot }}
    </div>
</div>
