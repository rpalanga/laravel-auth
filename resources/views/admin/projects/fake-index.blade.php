@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class=" display-4 fw-bolder text-center my-3 text-danger ">Sezione Visualizzazione dei Miei Progetti</h1>

    @if($projects->count()== 0)
      <h1>Nessun progetto da visualizzare</h1>
    
    @endif
    @foreach($projects as $project)

    <div class="card col-2 p-0" style="width: 18rem;">
      <img src="" class="card-img-top object-fit-cover" style="height: 300px; object-position: top;">
      <div class="card-body ">
        <h5 class="card-title"></h5>
        <p class="card-text">Primo progetto</p>
        <a href="{{route('admin.projects.show', $project->id)}}" class="btn btn-primary">Visualizza</a>
      </div>
    </div>
    @endforeach



</div>
<div class="container">
    <div class="row justify-content-center">
      <a href="{{route('admin.projects.create')}}" class="btn btn-primary my-3 col-3"> Inserisci un Nuovo Progetto</a>

    </div>
  </div>

@endsection