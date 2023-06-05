@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>User ID</th>
                    <th>Created at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <a href="{{route('admin.projects.show', $project->id)}}">
                        <tr>
                            <td>{{ $project->id }}</td>
                            <td>{{ $project->name }}</td>
                            <td>{{ $project->description }}</td>
                            <td>{{ $project->user_id }}</td>
                            <td>{{ $project->created_at }}</td>
                            <td>{{ $project->updated_at }}</td>
                        </tr>
                    </a>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection