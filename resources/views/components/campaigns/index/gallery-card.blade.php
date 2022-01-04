<div class="bg-white rounded-xl border shadow w-100 grid grid-cols-auto-min-1 hover:border-purple hover:bg-purple-100 hover:cursor-pointer">
    <div class="px-5 py-5">
        <h1 class="font-header text-3xl text-purple whitespace-nowrap mb-4" style="word-break: keep-all">{{ $name }}</h1>
        <div>
            <div>{{ mt_rand(0, 10000) }} interactions</div>
            <div>{{ mt_rand(0, 3000) }} unique interactions</div>
        </div>
    </div>
    <div class="grid grid-rows-3 border-gray-100 border-l text-xl">
        <a href="" class="flex items-center hover:cursor-pointer px-3 border-b border-gray-100 hover:text-blue-300">
            <i class="lni lni-enter"></i>
        </a>
        <a href="" class="flex items-center hover:cursor-pointer px-3 border-b border-gray-100 hover:text-blue-300">
            <i class="lni lni-play"></i>
        </a>
        <a href="" class="flex items-center hover:cursor-pointer px-3 hover:text-blue-300">
            <i class="lni lni-pencil"></i>
        </a>
    </div>
</div>
