@extends('layouts.admin')

@section('content')
   <div class="container">
        <div class="row my-3">
          <div class="col-12 text-center">
            <a class="btn btn-primary">Create Item</a>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">#ID</th>
                        <th scope="col">Title</th>
                        <th scope="col" >Description</th>
                        <th scope="col">Link</th>
                        <th scope="col">Created</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($projects as $project)
                      <tr>
                        <th>{{ $project->id }}</th>
                        <td>{{ $project->title }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->link }}</td>
                        <td>
                          <a href="" class="btn btn-primary">Show</a>
                          <a href="" class="btn btn-success">Edit</a>
                          <form action="" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">Delete</button>
                          </form>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
   </div>
@endsection