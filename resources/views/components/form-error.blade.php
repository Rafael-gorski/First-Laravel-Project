@props(['name'])

@error($name)
    <p class="text-xs text-red-500 italic py-1">{{ $message }}</p>
@enderror
