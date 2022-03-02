@extends('layouts.app')
@section('title', 'Car:')

@section('content')
<h2>Car:</h2>

<div>
    <h4>{{ $car->title }}</h4>
    <h4>{{ $car->producer }}</h4>
    <h4>{{ $car->number_of_doors }}</h4>
</div>
@endsection
