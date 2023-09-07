@extends('layouts.app')

@section('title', 'Edit Types')

@section('content')
    <div class="container bg-secondary text-white">
        <header class="text-center">
            <h1>Edit Types</h1>
        </header>
        @include('includes.types.form')
    </div>
@endsection
