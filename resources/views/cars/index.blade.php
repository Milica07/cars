<h2>All cars:</h2>

    @foreach ($cars as $car)
    <div>
        <a href="cars/{{ $car->id }}"><h4>{{ $car->title }}</h4></a>
        <h4>{{ $car->producer }}</h4>
        <h4>{{ $car->number_of_doors}}</h4>
    </div>
        @endforeach

