@props([
  'svgPath',
  'title',
])

<div class="flex lg:w-1/3">
  <div class="flex items-center p-4 bg-yellow-400 rounded-l-lg borde-r-solid border-r-4 border-white">
    <svg xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48">
      <path d="{{$svgPath}}" />
    </svg>
  </div>
  
  <div class="p-4 bg-gray-100">
    <h3 class="font-bold text-lg text-center mb-4">
      {{$title}}
    </h3>

    <p class="text-justify">
      {{$slot}}
    </p>
  </div>
</div>