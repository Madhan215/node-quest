@extends('layouts.base')

@section('container-base-content')

<h1>Dashboard Dosen</h1>

{{ auth()->user()->name }} <br>
{{ auth()->user()->email }} <br>
{{ auth()->user()->class_token }}


@endsection