<x-wire-elements-pro::tailwind.slide-over>
    <x-slot name="title">Report for {{now()->timezone(auth()->user()->timezone)->toFormattedDateString()}} </x-slot>

    <div class="text-sm text-gray-800">
        Hi there! The demo application you are exploring contains various dummy actions and it seems you just triggered one!
    </div>

    <x-slot name="buttons">
        <x-jet-secondary-button class="mr-2" wire:click="$emit('slide-over.close')" wire:loading.attr="disabled">
                {{ __('Cancel') }}
            </x-jet-secondary-button>
        
        <x-jet-button wire:click="$emit('slide-over.close')" wire:loading.attr="disabled">
                {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-wire-elements-pro::tailwind.slide-over>
