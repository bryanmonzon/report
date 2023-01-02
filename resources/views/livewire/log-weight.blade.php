<x-wire-elements-pro::tailwind.modal on-submit="logWeight">
    <x-slot name="title">Log Weight</x-slot>

    <div class="text-sm text-gray-800">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="weight" value="{{ __('Enter Current Weight') }}" />
            <x-jet-input id="weight" type="text" class="mt-1 block w-full" wire:model="weight"  />
            <x-jet-input-error for="weight" class="mt-2" />
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
