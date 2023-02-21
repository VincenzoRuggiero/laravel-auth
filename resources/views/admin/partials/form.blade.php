
<form action="{{ route($routeName, $project) }}" method="POST">
@csrf
@method($method)
    <div class="mb-3">
        <label for="title" class="form-label">Project title</label>
        <input type="text" class="form-control" name="title" value="{{ old('title', $project->title) }}">
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Project description</label>
        <textarea class="form-control" name="description">{{ old('description', $project->description) }}</textarea>
    </div>
    <div class="mb-3">
        <label for="link" class="form-label">Project link</label>
        <input type="text" class="form-control" name="link" value="{{ old('link', $project->link) }}">
    </div>
    <div class="mb-3">
        <label for="created" class="form-label">Project creation</label>
        <input type="date" class="form-control" name="created" value="{{ old('created', $project->created) }}">
    </div>
    <div class="mb-3">
        <button type="submit" class="btn btn-primary">
            Save
        </button>
    </div>
</form>