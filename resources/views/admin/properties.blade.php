@extends('layouts.auth-master')

@section('content')

<table class="table table-striped" >
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Adresse</th>
      <th scope="col">Type</th>
      <th scope="col">Surface</th>
      <th scope="col">Prix</th>
      <th scope="col">Type d'annonce</th>
      <th scope="col">Actions </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($buildings as $building)
    <tr>
      <th scope="row">{{ $building->id }}</th>
      <td>{{ $building->adresse }}</td>
      <td>Immeuble</td>
      <td>{{ $building->surface }}</td>
      <td>{{ $building->prix }}</td>
      <td>{{ $building->type_annonce }}</td>
      <td> <form action="{{ route('buildings.destroy', $building->id) }}" method="post" > 
              @csrf 
              @method('DELETE')
              <button type="submit" class="btn btn-danger"> Supprimer</button>
            </form>
      </td>
    </tr>
    @endforeach

@foreach ($lands as $land)
<tr>
  <th scope="row">{{ $land->id }}</th>
  <td>{{ $land->adresse }}</td>
  <td>Terrain</td>
  <td>{{ $land->surface }}</td>
  <td>{{ $land->prix }}</td>
  <td>{{ $land->type_annonce }}</td>
  <td> <form action="{{ route('lands.destroy', $land->id) }}" method="post" > 
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
  </td>
</tr>
@endforeach

@foreach ($houses as $house)
<tr>
  <th scope="row">{{ $house->id }}</th>
  <td>{{ $house->adresse }}</td>
  <td>{{ $house->type }}</td>
  <td>{{ $house->surface }}</td>
  <td>{{ $house->prix }}</td>
  <td>{{ $house->type_annonce }}</td>
  <td> <form action="{{ route('houses.destroy', $house->id) }}" method="post" > 
          @csrf 
          @method('DELETE')
          <button type="submit" class="btn btn-danger"> Supprimer</button>
        </form>
  </td>
</tr>
@endforeach
  </tbody>
</table>
@endsection






