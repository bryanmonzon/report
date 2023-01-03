<div class="overflow-hidden rounded-lg bg-white px-4 py-5 shadow sm:p-6">
    <dt class="truncate text-sm font-medium text-gray-500">Current Weight</dt>
    <dd class="mt-1 text-3xl font-semibold tracking-tight text-gray-900">
        @if($weight)
            {{$weight->weight}}        
        @else
            <span class="text-xs">No logs yet</span>
        @endif
            
    </dd>
</div>
