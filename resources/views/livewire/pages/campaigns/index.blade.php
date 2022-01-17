<div x-data="{ showCreateModal: false }">
    <x-text.h1 class="mb-4">Campaigns</x-text.h1>
    <div class="flex gap-3">

        @foreach ($campaigns as $campaign)
            <x-campaigns.index.gallery-card :name="$campaign->name" :total-interactions-count="$campaign->total_interactions_count" :unique-interactions-count="$campaign->unique_interactions_count"
                                            :campaign-id="$campaign->id"/>
        @endforeach

        <x-card header="" class="hover:cursor-pointer hover:border-purple hover:bg-purple-100"
                @click="showCreateModal = true">
            <div class="mt-6 text-purple text-center">
                <i class="lni lni-plus"></i>
                <div>Add New</div>
            </div>
        </x-card>

    </div>
    <x-modal x-show="showCreateModal" @close="showCreateModal = false">
        <x-card header="New Campaign">
            <x-slot name="headerLinks">
                <button type="button" @click="showCreateModal = false" class="hover:text-purple">
                    <i class="lni lni-close"></i>
                </button>
            </x-slot>
            <livewire:pages.campaigns.create/>
        </x-card>
    </x-modal>
</div>
