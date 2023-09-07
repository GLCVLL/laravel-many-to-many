@if ($type->exists)
    {{-- edit form --}}
    <form action="{{ route('admin.types.update', $type) }}" method="POST">

        @method('PUT')
    @else
        {{-- create form --}}
        <form action="{{ route('admin.types.store') }}" method="POST">
@endif

@csrf
<div class="row mb-3">
    <div class="col-md-6">
        <label for="label" class="form-label">Label</label>
        <input type="text" class="form-control" id="label" name="label" value="{{ old('label', $type->label) }}"
            placeholder="Type Label">
    </div>
    <div class="col-md-6">
        <label for="color" class="form-label">Color</label>
        <input type="color" class="form-control" id="color" name="color"
            value="{{ old('color', $type->color) }}" placeholder="Type Color">
    </div>
</div>

<div class="d-flex justify-content-end">
    <button type="submit" class="btn btn-success">Save</button>
</div>
</form>
