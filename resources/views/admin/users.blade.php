@extends('layouts.auth-master')

@section('content')


<style>
  table{
    color:white;
    
  }
   
 body{
	/* width: 100%;
	height: 100vh; */
	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.25)),url(background.jpg);
	background-size: cover;
	background-position: center;
	background-repeat: no-repeat;
}




</style>
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Email</th>
      <th scope="col">Num tel</th>
      <th scope="col">Role</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
    <tr>
      <th scope="row">{{ $user->id }}</th>
      <td>{{ $user->nom }}</td>
      <td>{{ $user->prenom }}</td>
      <td>{{ $user->email }}</td>
      <td>{{ $user->numtel }}</td>
      <td>{{ $user->usertype }}</td>
      <td> <form action="{{ route('users.destroy', $user->id)  }} " method="post" > 
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
