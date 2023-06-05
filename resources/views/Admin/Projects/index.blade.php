@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Projects</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Description</th>
                    <th>User ID</th>
                    <th>Timestamp</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->user_id }}</td>
                        <td>{{ $project->timestamp }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection