@extends('hollanbo_food::master')

@section('content')
    @foreach ($food as $item)
        @include('hollanbo_food::food', ['item' => $item])
    @endforeach
@stop
