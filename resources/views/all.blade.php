@extends('layouts.auth-master')

@section('content')
<head>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="csrf-token" content="{{ csrf_token() }}">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<style>
    
body{
  background-color: #eeeeee;
}

.card {
  margin-bottom: 30px;
  
  height: 350px;
}
/* Change the color of the title and text to blue */


.price{
  color: black !important;
  font-weight: bold;
  font-size: 14px !important;
 
  
}



.card-text {
  margin-bottom: 0.2rem;
}

.card-title {
  margin-top: 0.15rem;
  margin-bottom: 0.5rem;
}
.card {
  margin-bottom: 1rem;
}




.card-img-top {
  height: 190px;
  object-fit: cover;
 
}

.card-body{
  font-size: 16px;
  padding: 15px;
  height: 120px;
  padding-top: 0.3rem;
  padding-bottom: 0.3rem;

}
.card-title,
.card-subtitle {
  font-size: 16px;
  line-height: 1.1;
  
}

.card-text {
  font-size: 14px;
  line-height: 1.3;
}

.badge{
  color: black  ;
  background-color: #C3D6E4;
}

.btn-outline-secondary {
  
  background-color: #C3D6E4;
  border-color: black;
  color: black;
  margin-bottom: 0.1rem;
 

}

.btn-outline-secondary:hover {
  color: #fff;
  background-color:  #6798BB;
}
.btn-outline-secondary:active, 
.btn-outline-secondary.active , 
.btn-outline-secondary:focus{
  
  color: #fff!important;
  background-color: #6798BB !important;
  box-shadow: none !important;
  
}

.ad-column {
        padding: 30px; /* Change this value to adjust the width of the ad column */
    }



</style>
<div class="container " style="margin-top: 20px;">
      <div class="row" style="margin-top: 40px;">
          @if ($houses->where('accepted', 0)->isEmpty() && $buildings->where('accepted', 0)->isEmpty() && $lands->isEmpty() )
          <div class="col text-center mt-5">
            <i class="fas fa-search fa-2x text-muted"></i>
            <h6 class="mt-3 ">Aucun annonce trouvé.</h6>
          </div>
        @else 
@foreach ($houses as $item)
  @if($item->accepted==0)
  <div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <a href="/danonce/{{ $item->id }}">
        @if($item->images->count() > 0 )
          <img class="card-img-top" src="{{ asset('storage/house_images/'.$item->images->first()->path ) }}" alt="Maison">
       
        @else
          <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
        @endif
      </a>
      <div class="card-body">
        <h6 class="card-title mt-2">{{ $item->type }}</h6>
        <div class="d-flex justify-content-between align-items-start">
          <div>
            <p class="card-text mb-2">
              <span class="badge badge-secondary">{{ $item->surface }}m²</span>
              <span class="badge badge-secondary"> {{ $item->nbpiece }} @if($item->nbpiece > 1)pièces @else pièce @endif </span>
            </p>
          </div>
          <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
        </div>
        <h6 class="card-text adresse ">
          {{ $item->adresse  }}
        </h6>
        <div  style="display:flex; justify-content:space-between">
        <form method="post" action="{{ route('houses.destroy', ['id' => $item->id]) }}">
                                @csrf
                                @method('delete')
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit" class="btn btn-danger mr-5" onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette maison ?')">Refuser</button>
                            </form>
                            <form method="post" action="{{ route('houses.accept', ['id' => $item->id]) }}">
                                @csrf
                                <input type="hidden" name="id" value="{{ $item->id }}">
                                <button type="submit"  onclick="return confirm('Êtes-vous sûr(e) de vouloir accepter cette annonce ?')" name="accept" value="1" class="btn btn-success">Accepter</button>
                            </form></div>
      </div>
    </div>
  </div>
  @endif
@endforeach

@foreach ($buildings as $item)
    @if($item->accepted==0)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/d_buildings/{{ $item->id }}">
           
            @if($item->images->count() > 0 )
              <img class="card-img-top" src="{{ asset('storage/building_images/'.$item->images->first()->path ) }}" alt="Maison">
            @else
              <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
            @endif
          </a>
          <div class="card-body">
            <h6 class="card-title mt-2">{{ $item->type }}</h6>
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="card-text mb-2">
                  <span class="badge badge-secondary">{{ $item->surface }}m²</span>
                  <span class="badge badge-secondary">{{ $item->nb_etage }} @if($item->nb_etage > 1)étages @else étage @endif </span>
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div style="display:flex; justify-content:space-between">
            <form method="post" action="{{ route('buildings.destroy', ['id' => $item->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{  $item->id }}">
                                    <button type="submit" class="btn btn-danger mr-5" onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette maison ?')">Refuser</button>
                                </form>
                                <form method="post" action="{{ route('buildings.accept', ['id' =>  $item->id]) }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"  onclick="return confirm('Êtes-vous sûr(e) de vouloir accepter cette annonce ?')" name="accept" value="1" class="btn btn-success">Accepter</button>
                                </form></div>
          </div>
        </div>
      </div>
      @endif
    @endforeach

      </div>
</div>



@foreach ($lands as $item)
    @if($item->accepted==0)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <a href="/d_buildings/{{ $item->id }}">
           
            @if($item->images->count() > 0 )
              <img class="card-img-top" src="{{ asset('storage/land_images/'.$item->images->first()->path ) }}" alt="Maison">
            @else
              <img class="card-img-top" src="{{ asset('storage/default_house.jpg') }}" alt="Maison">
            @endif
          </a>
          <div class="card-body">
            <h6 class="card-title mt-2">Terrain</h6>
            <div class="d-flex justify-content-between align-items-start">
              <div>
                <p class="card-text mb-2">
                  <span class="badge badge-secondary">{{ $item->surface }}m²</span>
                </p>
              </div>
              <h6 class="card-subtitle mb-2 text-muted price align-self-end">{{ $item->prix }} dh @if($item->type_annonce==='Location')/mois @endif </h6>
            </div>
            <h6 class="card-text adresse ">
              {{ $item->adresse  }}
            </h6>
            <div style="display:flex; justify-content:space-between">
            <form method="post" action="{{ route('buildings.destroy', ['id' => $item->id]) }}">
                                    @csrf
                                    @method('delete')
                                    <input type="hidden" name="id" value="{{  $item->id }}">
                                    <button type="submit" class="btn btn-danger mr-5" onclick="return confirm('Êtes-vous sûr(e) de vouloir supprimer cette maison ?')">Refuser</button>
                                </form>
                                <form method="post" action="{{ route('lands.accept', ['id' =>  $item->id]) }}">
                                    @csrf
                                    <input type="hidden" name="id" value="{{ $item->id }}">
                                    <button type="submit"  onclick="return confirm('Êtes-vous sûr(e) de vouloir accepter cette annonce ?')" name="accept" value="1" class="btn btn-success">Accepter</button>
                                </form></div>
          </div>
        </div>
      </div>
      @endif
    @endforeach

      </div>
</div>

@endif
@endsection