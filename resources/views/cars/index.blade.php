<h2>All cars:</h2>

    @foreach ($cars as $car)
    <div>
        <h4>{{ $car->name }}</h4>
        <h4>{{ $car->producer }}</h4>
        <h4>{{ $car->number_of_doors}}</h4>
    </div>
        @endforeach

