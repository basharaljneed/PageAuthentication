<x-input-label for="pro" :value="__('profile')" />
<div>
    <x-guest-layout>


        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('User Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" value="{{ Auth::user()->name }}" disabled />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" value="{{ Auth::user()->email }}"
                disabled />
        </div>


    </x-guest-layout>
</div>
