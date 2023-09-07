@if ($project->exists)
    {{-- edit form --}}
    <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">

        @method('PUT')
    @else
        {{-- create form --}}
        <form action="{{ route('admin.projects.store', $project) }}" method="POST" enctype="multipart/form-data">
@endif

@csrf
<div class="row mb-3">
    <div class="col-md-6">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title"
            value="{{ old('title', $project->title) }}" placeholder="Project Title">
    </div>
    <div class="col-md-12">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3" placeholder="Project Description">{{ old('description', $project->description) }}</textarea>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="cover_image" class="form-label">Cover Image</label>
        <input type="url" class="form-control" id="cover_image" name="cover_image"
            value="{{ old('cover_image', $project->cover_image) }}">
    </div>
    <div class="col-md-1">
        <img src="{{ old('cover_image', $project->cover_image ?? 'https://marcolanci.it/utils/placeholder.jpg') }}"
            alt="preview" class="img-fluid" id="image-preview">
    </div>
    <div class="col-md-3">
        <label for="start_date" class="form-label">Start Date</label>
        <input type="date" class="form-control" id="start_date" name="start_date"
            value="{{ old('start_date', $project->start_date) }}">
    </div>
    <div class="col-md-3">
        <label for="end_date" class="form-label">End Date</label>
        <input type="date" class="form-control" id="end_date" name="end_date"
            value="{{ old('end_date', $project->end_date) }}">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="type" class="form-label">Type</label>
        <select class="form-select" id="type" name="type_id">
            <option value="">Select Type</option>
            @foreach ($types as $type)
                <option value="{{ $type->id }}" @if (old('type_id', $project->type_id) == $type->id) selected @endif>
                    {{ $type->label }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-md-6">
        <label for="category" class="form-label">Category</label>
        <input type="text" class="form-control" id="category" name="category"
            value="{{ old('category', $project->category) }}" placeholder="Project Category">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="technologies" class="form-label">Technologies</label>
        <input type="text" class="form-control" id="technologies" name="technologies"
            value="{{ old('technologies', $project->technologies) }}" placeholder="Technologies Used">
    </div>
    <div class="col-md-6">
        <label for="project_url" class="form-label">Project URL</label>
        <input type="text" class="form-control" id="project_url" name="project_url"
            value="{{ old('project_url', $project->project_url) }}" placeholder="Project URL">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="github_url" class="form-label">GitHub URL</label>
        <input type="text" class="form-control" id="github_url" name="github_url"
            value="{{ old('github_url', $project->github_url) }}" placeholder="GitHub URL">
    </div>
    <div class="col-md-6">
        <label for="client" class="form-label">Client</label>
        <input type="text" class="form-control" id="client" name="client"
            value="{{ old('client', $project->client) }}" placeholder="Client">
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-6">
        <label for="role" class="form-label">Role</label>
        <input type="text" class="form-control" id="role" name="role"
            value="{{ old('role', $project->role) }}" placeholder="Your Role in the Project">
    </div>
    <div class="col-md-6">
        <label for="visibility" class="form-label">Visibility</label>
        <select class="form-select" id="visibility" name="visibility">
            <option value="1" {{ old('visibility', $project->visibility) == '1' ? 'selected' : '' }}>
                Visible</option>
            <option value="0" {{ old('visibility', $project->visibility) == '0' ? 'selected' : '' }}>
                Hidden</option>
        </select>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-12">
        <label for="additional_notes" class="form-label">Additional Notes</label>
        <textarea class="form-control" id="additional_notes" name="additional_notes" rows="3"
            placeholder="Additional Notes">{{ old('additional_notes', $project->additional_notes) }}</textarea>
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">Save</button>
</div>
</form>
