@extends('layouts.admin')

@section('content')

    @component('components.columns', [
        'navleft'=> ''
    ])

        {{-- nav --}}
        @slot('nav')
        @component('components.navleft', [
            'title' => 'ใบสำคัญจ่าย',

            'current' => Route::getFacadeRoot()->current()->uri(),

            "items" => $navleft,
        ])

        @endcomponent
        {{-- end: endcomponent->navleft --}}
        @endslot
        {{-- end: slot->nav --}}


        {{-- component->datatable --}}
        @isset($datatable)
        @component('components.datatable', $datatable)

        @endcomponent
        @endisset
        {{-- end: component->datatable --}}



        {{-- include --}}
        @isset($include)
        @include($include)
        @endisset
        {{-- end: include --}}

    @endcomponent
    {{-- end: endcomponent->columns --}}
@endsection
