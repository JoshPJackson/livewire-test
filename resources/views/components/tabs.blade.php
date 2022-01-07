<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : '{{ array_key_first($tabs) }}'}" id="tab_wrapper">
    <nav class="relative mb-2 top-0.5">
        <div class="flex justify-between">
            <div>
                @foreach ($tabs as $slug => $title)
                    <a class="bg-white px-4 py-2 border border-b-white rounded-t-xl" :class="{ 'text-purple z-10 border-b-2': tab === '{{ $slug }}', 'top-0.5': tab !== '{{ $slug }}' }" @click.prevent="tab = '{{ $slug }}'; window.location.hash = '{{ $slug }}'" href="#">{{ $title }}</a>
                @endforeach
            </div>
            <div>
                {{ $right ?? '' }}
            </div>
        </div>
    </nav>
    {{ $slot }}
</div>
