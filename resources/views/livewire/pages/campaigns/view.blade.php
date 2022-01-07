<x-tabs :tabs="$tabNames">
    <x-tab title="basic">
        <div class="grid grid-cols-2">
            <div class="grid grid-cols-min-auto-1 gap-2">
                <x-label>Name:</x-label>
                <div>{{ $campaign->name }}</div>

                <x-label>Created:</x-label>
                <div>{{ $campaign->created_at->format(DateTimeInterface::RFC850) }}</div>

                <x-label>Updated:</x-label>
                <div>{{ $campaign->updated_at->format(DateTimeInterface::RFC850) }}</div>
            </div>
            <div class="grid grid-cols-min-auto-1 gap-2">
                <x-label>State:</x-label>
                <div><span class="text-success">Live</span></div>
            </div>
        </div>
    </x-tab>
</x-tabs>
