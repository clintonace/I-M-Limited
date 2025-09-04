<x-app-layout>

    @section('title')
    <h1>Dashboard</h1>
    @endsection


    <x-slot name="content">

        @if (Auth::user() && Auth::user()->isAdmin())

            @if (Auth::user()->email != 'iandm.admin@gmail.com')
            <x-admin-body-component/>
            @else
            <x-ai-admin-body-component/>
            @endif

        @else

        <x-body-header-component/>

        @endif

    </x-slot>

</x-app-layout>
