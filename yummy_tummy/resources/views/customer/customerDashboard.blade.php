<x-guest-layout>

    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
    Welcome customer, {{ auth()->user()->name }}
</h2>
<x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
    </x-slot>
    <div class="d-flex justify-content-end">@livewire('navigation-menu')</div>



</x-guest-layout>
