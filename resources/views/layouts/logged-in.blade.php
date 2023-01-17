@extends('layouts.layout')

@section('content')
<main>
    @include('includes.sidebar')

    @yield('logged-in')

</main>
@include('includes.footer')
@endsection
