
    <h1>{{ $house->type }}</h1>
    <p>{{ $house->surface }}</p>
    <p>Price: {{ $house->prix }}</p>

    @foreach ($house->images as $image)
        <img src="{{ asset('uploads/houses/' . $image->image_name) }}" alt="{{ $house->id }}">
    @endforeach