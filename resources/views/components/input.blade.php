@props(['text', 'type' => 'text', 'name', 'id' => '', 'placeholder' => '', 'value' => ''])

<div class="">
    <label for="{{ $id }}" class="block mb-2 text-xs font-medium text-black capitalize">{{ $text }}</label>
    <input type="{{ $type }}" id="{{ $id }}" name={{ $name }}
        class="bg-gray-50 border border-gray-300 text-gray-900 text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-1.5  md:p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        placeholder="{{ $placeholder }}" value="{{$value}}">
    @error($name)
        <!-- variable mensaje disponible por laravel -->
        <small class="text-xs text-red-500 font-semibold italic">{{ $message }}</small>
    @enderror
</div>
