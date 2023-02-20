@extends('layouts.admin')

@section('content')
   <div class="container">
        <div class="row my-3">
          <div class="col-12 text-center">
           <h1>{{ $project->title }}</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
               <div class="wrapper border border-secondary">
                 <p>Created: <small>{{ $project->created }}</small></p>
                <h3>Description</h3>
                <p>{{ $project->description }}</p>
                <a href="{{ $project->link }}" class="btn btn-primary">Open</a>
               </div>
            </div>
        </div>
   </div>
@endsection