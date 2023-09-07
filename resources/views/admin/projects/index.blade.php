@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <header>
        <div class="text-center">
            <h1 class="my-4">Projects List</h1>
        </div>
        <div class="d-flex justify-content-end my-3">
            <a href="{{ route('admin.projects.create') }}" class="btn btn-success ms-2">Create new Project</a>
        </div>
    </header>

    <div class="row">
        @foreach ($projects as $project)
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 d-flex flex-column">
                    <img src="{{ $project->cover_image }}" class="card-img-top" alt="{{ $project->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $project->title }}</h5>
                        <p class="card-text">{{ $project->description }}</p>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><strong>Categoria:</strong> {{ $project->category }}</li>
                            <li class="list-group-item"><strong>Tecnologie:</strong> {{ $project->technologies }}</li>
                            <li class="list-group-item"><strong>Cliente:</strong> {{ $project->client }}</li>
                            <li class="list-group-item"><strong>Ruolo:</strong> {{ $project->role }}</li>
                            <li class="list-group-item"><strong>Tipo:</strong> {{ $project->type?->label }}</li>
                        </ul>
                    </div>
                    <div class="card-footer d-flex">
                        <a href="{{ route('admin.projects.show', $project) }}" class="btn btn-primary ms-2">Go to
                            the Project</a>
                        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning ms-2">Edit</a>
                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST"
                            class="ms-2 delete-form">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" class="btn btn-secondary ms-2">GitHub</a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
