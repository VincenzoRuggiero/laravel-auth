@extends('layouts.admin')

@section('content')
   <div class="container">
        <div class="row my-3">
          <div class="col-12 text-center">
           <h1>Create item</h1>
          </div>
        </div>
        <div class="row">
            <div class="col-12">
              <form action="{{ route('admin.projects.store') }}" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Project title</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Project description</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="link" class="form-label">Project link</label>
                        <input type="text" class="form-control" name="link">
                    </div>
                    <div class="mb-3">
                        <label for="created" class="form-label">Project creation</label>
                        <input type="date" class="form-control" name="created">
                    </div>
                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">
                            Create
                        </button>
                    </div>
              </form>
            </div>
        </div>
   </div>
@endsection