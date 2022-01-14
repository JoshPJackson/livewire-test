<div class="bg-white rounded-xl border shadow w-100 grid grid-cols-auto-min-1 hover:border-blue-300 hover:bg-blue-100 hover:cursor-pointer text-gray-500" @click="window.location.href='{{ route('campaigns.view', ['campaign' => $campaignId]) }}'">
    <div class="px-5 py-5">
        <x-text.h2>{{ $name }}</x-text.h2>
        <div>
            <div>{{ mt_rand(0, 10000) }} interactions</div>
            <div>{{ mt_rand(0, 3000) }} unique interactions</div>
        </div>
    </div>
    <div class="grid grid-rows-3 border-gray-100 border-l">
        <a href="{{ route("campaigns.view", ['campaign' => $campaignId]) }}" class="flex items-center hover:cursor-pointer px-3 border-b border-gray-100 hover:text-blue-300">
            <i class="lni lni-enter"></i>
        </a>
        <a href="" class="flex items-center hover:cursor-pointer px-3 border-b border-gray-100 hover:text-blue-300">
            <i class="lni lni-play"></i>
        </a>
        <a href="{{ route("campaigns.edit", ['campaign' => $campaignId]) }}" class="flex items-center hover:cursor-pointer px-3 hover:text-blue-300">
            <i class="lni lni-pencil"></i>
        </a>
    </div>
</div>
