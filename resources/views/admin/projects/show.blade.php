@extends('layouts.app')

@section('title', 'Project')

@section('content')
    <div class="card">
        <div class="card-body">
            <h1 class="card-title text-center">{{ $project->title }}</h1>
            <div class="row">
                <div class="col-md-6">
                    <p class="card-text">{{ $project->description }}</p>
                    <ul class="list-group mb-3">
                        <li class="list-group-item"><strong>Categoria:</strong> {{ $project->category }}</li>
                        <li class="list-group-item"><strong>Tecnologie:</strong>
                            @forelse ($project->technologies as $technology)
                                {{ $technology->name }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @empty
                                Nessuna tecnologia associata
                            @endforelse
                        </li>
                        <li class="list-group-item"><strong>Cliente:</strong> {{ $project->client }}</li>
                        <li class="list-group-item"><strong>Ruolo:</strong> {{ $project->role }}</li>
                        <li class="list-group-item"><strong>Data di Inizio:</strong> {{ $project->start_date }}</li>
                        <li class="list-group-item"><strong>Data di Completamento:</strong> {{ $project->end_date }}</li>
                        <li class="list-group-item"><strong>Tipo:</strong> {{ $project->type?->label }}</li>
                        <li class="list-group-item"><strong>Visibilità:</strong>
                            {{ $project->visibility ? 'Pubblico' : 'Privato' }}</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <img src="{{ $project->cover_image }}" alt="{{ $project->title }}" class="img-fluid" width="250">
                </div>
                <div class="col-md-6 d-flex">
                    <a href="{{ route('admin.projects.index', $project) }}" class="btn btn-primary ms-2">Go to
                        the Projects</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning ms-2">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="ms-2 delete-form">
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
    </div>
@endsection


@section('scripts')
    @vite('resources/js/delete-confirmation.js')
@endsection
