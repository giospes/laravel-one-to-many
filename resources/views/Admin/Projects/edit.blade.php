@extends('layouts.app')

@section('content')
    <form method="POST" action="{{ route('admin.projects.update', $project->id) }}">
        @csrf
        @method('PUT')
        
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $project->name }}">
        
        <label for="description">Description:</label>
        <textarea name="description">{{ $project->description }}</textarea>
        
        <!-- Add more fields as needed -->
        
        <button type="submit">Update Project</button>
    </form>
@endsection('content')