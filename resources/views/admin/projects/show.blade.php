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
                  {{-- Show previous Item --}}
                  <div>
                     <a class="btn btn-outline-dark" href="{{ route('admin.projects.show', $prev->slug) }}">Prev</a>
                  </div>

                  <div class="center-btn">
                     <a href="{{ $project->link }}" class="btn btn-primary">Open Link</a>
                     <a href="{{ route('admin.projects.edit', $project->slug) }}" class="btn btn-success mx-2">Edit</a>
                     <a href="#" class="btn btn-danger">Delete</a>
                  </div>

                  {{-- Show next Item --}}
                  <div>
                     <a class="btn btn-outline-dark" href="{{ route('admin.projects.show',$next->slug) }}">Next</a>
                  </div>
                </div>
                <span>{{ $project->slug }}</span>
               </div>
            </div>
        </div>
   </div>
@endsection