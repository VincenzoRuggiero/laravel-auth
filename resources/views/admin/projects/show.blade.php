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
                <div class="btn-wrapper d-flex justify-content-between">
                  <div>
                     <a class="btn btn-outline-dark" href="{{ $projects->previousPageUrl() }}">Prev</a>
                  </div>
                  <div class="center-btn">
                     <a href="{{ $project->link }}" class="btn btn-primary">Open Link</a>
                     <a href="{{ route('admin.projects.edit', $project->id) }}" class="btn btn-success">Edit</a>
                     <a href="#" class="btn btn-danger">Delete</a>
                  </div>
                  <div>
                     <a class="btn btn-outline-dark" href="{{ $projects->nextPageUrl() }}">Next</a>
                  </div>
                </div>
               </div>
            </div>
        </div>
   </div>
@endsection