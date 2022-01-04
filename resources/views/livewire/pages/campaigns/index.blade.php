<div>
    <div class="flex gap-3">

    @foreach ($campaigns as $campaign)
        <x-campaigns.index.gallery-card :name="$campaign->name" :interactions="1234" :unique-interactions="567"/>
    @endforeach

    </div>
</div>
