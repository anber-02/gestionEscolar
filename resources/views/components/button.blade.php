@props(['text', 'route' => ''])

@if ($text && $route)
    <a
    class="inline-block bg-teal-700 hover:bg-teal-500 rounded-full py-1 px-1 md:p-2.5" 
    href="{{ route($route) }}"
    >
    <span class="text-white  gap-2 items-center sm:px-2 sm:flex">
      <span class="hidden sm:inline-block">{{ $text }}</span>
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path fill="currentColor" d="M12 4c4.411 0 8 3.589 8 8s-3.589 8-8 8s-8-3.589-8-8s3.589-8 8-8m0-2C6.477 2 2 6.477 2 12s4.477 10 10 10s10-4.477 10-10S17.523 2 12 2zm5 9h-4V7h-2v4H7v2h4v4h2v-4h4v-2z"/></svg>
    </span>
  </a>
@else
    <button class="">
        {{ $text }}
    </button>
@endif
