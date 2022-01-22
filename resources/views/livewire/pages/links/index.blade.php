<div>
    <div class="flex justify-between mb-4">
        <x-text.h1>Link Bank</x-text.h1>
        <div>
            <x-select-input :options="App\Enums\LinkStatus::toArray()"/>
            <x-buttons.primary-link href="{{ route('links.create') }}"><i class="lni lni-plus mr-2"></i>Add New</x-buttons.primary-link>
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
                        <td class="p-3">{!! \Illuminate\Support\Arr::random(['<span class="text-success">Active</span>', '<span class="text-warning">Pending</span>', '<span class="text-gray-500">Inactive</span>']) !!}</td>
                        <td class="p-3">{{ $link->unique_interactions_count }}</td>
                        <td class="p-3">{{ $link->interactions_count }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </x-card>
</div>
