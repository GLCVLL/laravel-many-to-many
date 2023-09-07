@extends('layouts.app')

@section('title', 'Create Project')

@section('content')
    <div class="container bg-secondary text-white">
        <header class="text-center">
            <h1>Create new Project</h1>
        </header>
        @include('includes.projects.form')
    </div>
@endsection

@section('scripts')
    @vite('resources/js/image-preview.js')
@endsection
