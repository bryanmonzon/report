<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">

            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>
            <button onclick="Livewire.emit('slide-over.open', 'todays-report')">Todays Report</button>
            <!-- <button wire:click="$emit('slide-over.open')" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:ring focus:ring-gray-300 disabled:opacity-25 transition">Todays Report</button> -->
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h3 class="text-lg font-medium leading-6 text-gray-900">Current Stats</h3>
                <dl class="mt-5 grid grid-cols-1 gap-5 sm:grid-cols-3">
                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">Current Weight</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">203.4</dd>
                    </div>

                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">Weight Goal</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">160</dd>
                    </div>

                    <div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
                    <dt class="truncate text-sm font-medium text-gray-500">Current Fat %</dt>
                    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">20.57%</dd>
                    </div>
                </dl>
            </div>
        </div>
    </div>
</x-app-layout>
