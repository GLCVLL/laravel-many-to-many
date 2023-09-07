@extends('layouts.app')

@section('title', 'Types')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">Types List</h1>
        </div>
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('admin.types.create') }}" class="btn btn-success ms-2">Create new Type</a>
        </div>
    </header>

    <div class="row">
        @foreach ($types as $type)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 d-flex flex-column">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $type->label }}</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Color:</strong> {{ $type->color }}</li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a href="{{ route('admin.types.edit', $type) }}" class="btn btn-warning ms-2">Edit</a>
                        <form action="{{ route('admin.types.destroy', $type) }}" method="POST" class="ms-2 delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
