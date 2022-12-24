
<div class="flow-root w-1/2 mx-auto">
  @livewire('chart-weightlogs')
  <ul role="list" class="-mb-8">
    @foreach($weightLogs as $weightLog)
    <li>
      <div class="relative pb-8">
        <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
        <div class="relative flex space-x-3">
          <div>
            <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: mini/user -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M10 8a3 3 0 100-6 3 3 0 000 6zM3.465 14.493a1.23 1.23 0 00.41 1.412A9.957 9.957 0 0010 18c2.31 0 4.438-.784 6.131-2.1.43-.333.604-.903.408-1.41a7.002 7.002 0 00-13.074.003z" />
              </svg>
            </span>
          </div>
          <div class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5">
            <div>
              <p class="text-sm text-gray-500">{{$weightLog->weight}} lbs.</p>
            </div>
            <div class="whitespace-nowrap text-right text-sm text-gray-500">
              <time datetime="2020-09-20">{{$weightLog->created_at->format('D M. j, Y')}}</time>
            </div>
          </div>
        </div>
      </div>
    </li>
    @endforeach

  </ul>
</div>

@push('scripts')
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endpush
