<div>
    <div class="flex justify-between mb-4">
        <x-text.h1>Models</x-text.h1>
        <div class="flex">
            <span class="self-center mr-3">Filter:</span>
            <x-basic-input wire:model="searchFilterValue" wire:change="search"/>
            <x-select-input :options="$stateOptions" class="mr-3 text-center" wire:model="stateFilterValue" wire:change="search" placeholder="State"/>
        </div>
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
                @foreach ($links as $key => $link)
                    <tr class="border-2 border-transparent hover:border-blue-300 hover:bg-blue-100 hover:cursor-pointer">
                        <td class="p-3">{{ $link->path }}</td>
                        <td class="p-3">{{ $link->destination }}</td>
                        <td class="p-3">
                            @switch ($link->status)
                                @case(App\Enums\LinkStatus::ACTIVE)
                                    <span class="text-success">Active</span>
                                    @break
                                @case(App\Enums\LinkStatus::INACTIVE)
                                    <span class="text-gray-500">Inactive</span>
                                    @break
                                @default
                                    <span class="text-warning">Disabled</span>
                            @endswitch
                        </td>
                        <td class="p-3">{{ $link->unique_interactions_count ?? 'missing' }}</td>
                        <td class="p-3">{{ $link->interactions_count ?? 'missing' }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
</div>
