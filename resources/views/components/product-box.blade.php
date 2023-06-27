@props([
  'id' => 'product-1',
  'title',
  'image',
  'reverse' => false,
])

<div id="{{ $id }}" class="flex flex-col md:flex-row{{ $reverse ? '-reverse' : '' }} items-stretch">
  <div class="w-full md:w-2/3 {{ $reverse ? 'md:ml-8' : 'md:mr-8' }}">
    <h3 class="text-xl font-bold mb-2">
      {{ $title }}
    </h3>

    <p class="text-gray-700 mb-4 text-justify">
      {{ $slot }}
    </p>

    <a href="#pricing" class="bg-yellow-500 text-white py-2 px-4 rounded hover:bg-yellow-400 transition duration-300">
      I Want This!
    </a>
  </div>

  <div class="w-full md:w-1/3">
    <a href="#pricing">
      <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-full mt-4 md:mt-0 rounded-lg object-cover">
    </a>
  </div>
</div>
