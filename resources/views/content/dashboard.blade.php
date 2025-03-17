@extends('layouts.base')

@section('container-base-content')

<h1>Dashboard</h1>

{{ auth()->user()->role }} <br>
{{ auth()->user()->name }} <br>
{{ auth()->user()->email }} <br>

@endsection