<div>
    <x-text.h1 class="mb-4">{{ $campaign->name }} Campaign</x-text.h1>
    <x-tabs :tabs="$tabNames">
        <x-slot name="right">
            <a href="{{ route('campaigns.index') }}" class="text-blue-300 hover:underline">Back to campaigns</a>
        </x-slot>
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
        <x-tab title="links">
            <div>
                <div class="flex justify-between mb-4">
                    <x-buttons.primary-link href="{{ route('links.create') }}"><i class="lni lni-plus mr-2"></i>Add New</x-buttons.primary-link>
                </div>

                <x-card>
                    <table class="w-full font-header table-auto border-separate" style="border-spacing: 0 5px">
                        <thead>
                        <tr class="text-purple font-thin text-left border-b">
                            <th class="p-3">Path</th>
                            <th class="p-3">Destination</th>
                            <th class="p-3">State</th>
                            <th class="p-3">Unique Impressions</th>
                            <th class="p-3">Total Impressions</th>
                        </tr>
                        </thead>
                        <tbody class="text-gray-500 font-light">
                        @foreach ($campaign->links as $key => $link)
                            <tr class="border-2 border-transparent hover:border-blue-300 hover:bg-blue-100 hover:cursor-pointer">
                                <td class="p-3">{{ $link->path }}</td>
                                <td class="p-3">{{ $link->destination }}</td>
                                <td class="p-3">{!! \Illuminate\Support\Arr::random(['<span class="text-success">Active</span>', '<span class="text-warning">Pending</span>', '<span class="text-gray-500">Inactive</span>']) !!}</td>
                                <td class="p-3">{{ $link->unique_interactions_count  }}</td>
                                <td class="p-3">{{ $link->interactions_count }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </x-card>
            </div>
        </x-tab>
    </x-tabs>
</div>
