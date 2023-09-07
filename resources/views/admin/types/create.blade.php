@extends('layouts.app')

@section('title', 'Create Types')

@section('content')
    <div class="container bg-secondary text-white">
        <header class="text-center">
            <h1>Create new Type</h1>
        </header>
        @include('includes.types.form')
    </div>
@endsection
