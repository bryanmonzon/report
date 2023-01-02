<x-jet-form-section submit="updateWeight">
    <x-slot name="title">
        {{ __('Goals') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Update your goals.') }}
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="weight_goal" value="{{ __('Weight Goal') }}" />
            <x-jet-input id="weight_goal" type="text" class="mt-1 block w-full" wire:model.defer="state.weight_goal" />
            <x-jet-input-error for="weight_goal" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-jet-label for="fat_percentage_goal" value="{{ __('Fat Percentage Goal') }}" />
            <x-jet-input id="fat_percentage_goal" type="text" class="mt-1 block w-full" wire:model.defer="state.fat_percentage_goal" />
            <x-jet-input-error for="fat_percentage_goal" class="mt-2" />
        </div>
    </x-slot>
    <x-slot name="actions">
        <x-jet-action-message class="mr-3" on="saved">
            {{ __('Saved.') }}
        </x-jet-action-message>

        <x-jet-button>
            {{ __('Save') }}
        </x-jet-button>
    </x-slot>
</x-jet-form-section>