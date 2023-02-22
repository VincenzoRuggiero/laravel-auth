@foreach ($errors->all() as $error)
@endforeach

<form action="{{ route($routeName, $project) }}" method="POST">
@csrf
@method($method)
    <div class="mb-3">
        <label for="title" class="form-label">Project title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" maxlength="200" name="title" value="{{ old('title', $project->title) }}">
        @error('title')
            <div class="invalid-feedback">
                {{ $error }}
            </div>
        @enderror    
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Project description</label>
        <textarea class="form-control @error('description') is-invalid @enderror" name="description">{{ old('description', $project->description) }}</textarea>
        @error('description')
            <div class="invalid-feedback">
                {{ $error }}
            </div>
        @enderror    
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Project link</label>
        <input type="text" class="form-control @error('link') is-invalid @enderror" name="link" value="{{ old('link', $project->link) }}">
        @error('link')
            <div class="invalid-feedback">
                {{ $error }}
            </div>
        @enderror    
    </div>
    <div class="mb-3">
        <label for="created" class="form-label">Project creation</label>
        <input type="date" class="form-control @error('created') is-invalid @enderror" name="created" value="{{ old('created', $project->created) }}">
        @error('created')
            <div class="invalid-feedback">
                {{ $error }}
            </div>
        @enderror    
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</form>