@props([
  'packageName',
  'price',
  'svgPath',
  'items' => [],
])

<div {{ $attributes->merge(['class' => 'flex flex-col bg-white rounded-lg p-6']) }}>
  <div class="flex items-center mb-4">
    <svg class="mr-6" xmlns="http://www.w3.org/2000/svg" height="48" viewBox="0 -960 960 960" width="48" fill="#FB923C">
      <path d="{{ $svgPath }}"/>
    </svg>

    <h3 class="text-xl font-bold">
      {{ $packageName }}
    </h3>
  </div>

  <ul class="list-disc list-inside mb-4 flex-1">
    @foreach($items as $item)
      <li class="text-gray-700">
        {{ $item }}
      </li>
    @endforeach
  </ul>

  <hr class="mb-4" />

  <div class="flex text-lg mb-4">
    <span class="text-gray-700 ml-2">
      Price from:
    </span>

    <span class="ml-1 font-bold text-gray-700">
      $ {{ $price }}
    </span>
  </div>

  <a href="#contact" class="bg-yellow-500 text-white font-bold text-lg p-4 rounded hover:bg-yellow-400 transition duration-300 flex items-center justify-center">
    Get It
  </a>
</div>
