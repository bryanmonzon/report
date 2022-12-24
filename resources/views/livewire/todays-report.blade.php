<x-wire-elements-pro::tailwind.slide-over>
    <x-slot name="title">Report for {{now()->timezone(auth()->user()->timezone)->toFormattedDateString()}} </x-slot>

    <div class="text-sm text-gray-800">
        <div>
            <label for="grateful" class="block text-sm font-medium text-gray-700">What are three things you're grateful for?</label>
            <div class="mt-1">
                <textarea rows="5" name="grateful" id="grateful" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
            </div>
        </div>

        <div class="mt-5">
            <label for="activities" class="block text-sm font-medium text-gray-700">What activities did you complete today?</label>
            <div class="mt-1">
                <textarea rows="5" name="activities" id="activities" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
            </div>
        </div>

        <div class="mt-5">
            <label for="meals" class="block text-sm font-medium text-gray-700">Meal 1</label>
            <div class="mt-1">
                <textarea name="meals" id="meals" class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm" placeholder="you@example.com"></textarea>
            </div>
        </div>
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
