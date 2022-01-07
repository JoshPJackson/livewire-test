<div>
    <form wire:submit.prevent="save">
        <div class="grid grid-cols-min-auto-1 gap-x-2">
            <x-label for="name" :required="true">Name</x-label>
            <x-basic-input wire:model="name" autofocus/>
            @error('name')
                <span class="text-sm text-danger col-span-2">{{ $message }}</span>
            @enderror

        </div>
        <div class="flex justify-between">
            <x-buttons.secondary-link>Close</x-buttons.secondary-link>
            <x-buttons.primary type="submit">Create</x-buttons.primary>
        </div>
    </form>
</div>
