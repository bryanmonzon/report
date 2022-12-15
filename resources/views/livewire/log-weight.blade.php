<x-wire-elements-pro::tailwind.modal on-submit="logWeight">
    <x-slot name="title">Log Weight</x-slot>

    <div class="text-sm text-gray-800">
        
            <div>
                <input wire:model="weight" type="text" id="weight" name="weight" placeholder="Enter weight">
            </div>
        
    </div>

    <x-slot name="buttons">
        <x-jet-secondary-button class="mr-2" wire:click="$emit('modal.close')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        
        <x-jet-button type="submit">
                {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-wire-elements-pro::tailwind.modal>
