@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class=" display-2 ">ciao a tutti</h1>

    <div class="card col-2 p-0" style="width: 18rem;">
      <img src="" class="card-img-top object-fit-cover" style="height: 300px; object-position: top;">
      <div class="card-body ">
        <h5 class="card-title">Ciao </h5>
        <p class="card-text">Primo progetto</p>
        <a href="{{route('admin.projects.create')}}" class="btn btn-primary">Visualizza</a>
      </div>
    </div>

</div>
@endsection