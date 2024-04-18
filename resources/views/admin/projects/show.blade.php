@extends('layouts.admin')

@section('content')
<div class="container">
    <h1 class=" display-2 ">Ben venuto nella Show dei miei progetti</h1>

    {{$project->name}}
    {{$project->date_release}}

</div>
@endsection