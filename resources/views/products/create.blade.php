<x-guest-layout>
    <form method="POST" action="/products/store">
        @csrf
        <div>
            <x-input-label for="name" :value="__('name')"/>
            <x-input-input id="name" class="block mt-1 w-full" type="text" name="name":value="old('name')" required autofocus/>            
        </div>
        <div class="mt-4">
            <x-input-label for="price" :value="__('price')"/>
            <x-input-input id="price" class="block mt-1 w-full" type="number" name="price" required autocomplete="current-price"/>            
        </div>
        <div class="flex item-center mt-4">
            <x-primary-button class="ml-3">
                sumbit
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>