<div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : '{{ array_key_first($tabs) }}'}" id="tab_wrapper">
    <nav>
        @foreach ($tabs as $slug => $title)
            <a class="bg-white" :class="{ 'text-purple': tab === '{{ $slug }}' }" @click.prevent="tab = '{{ $slug }}'; window.location.hash = '{{ $slug }}'" href="#">{{ $title }}</a>
        @endforeach
    </nav>
    {{ $slot }}
</div>
