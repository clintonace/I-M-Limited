<x-app-layout>

    @section('title')
    <h1>Dashboard</h1>
    @endsection


    <x-slot name="content">

        @if (Auth::user() && Auth::user()->isAdmin())

        <x-admin-body-component/>

        @else

        <x-body-header-component/>

        @endif

    </x-slot>

</x-app-layout>
