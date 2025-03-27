@extends('layouts.app')

@section('importcss')
    @parent
    {{ Html::style('css/custom.css') }}
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2>Log Files</h2>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>File Name</th>
                        <th>Size</th>
                        <th>Last Modified</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($logFiles as $file)
                        <tr>
                            <td>{{ $file['name'] }}</td>
                            <td>{{ $file['size'] }}</td>
                            <td>{{ $file['modified'] }}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="{{ route('logs.show', $file['name']) }}" class="btn btn-sm btn-info">View</a>
                                    <a href="{{ route('logs.download', $file['name']) }}" class="btn btn-sm btn-primary">Download</a>
                                    <form action="{{ route('logs.destroy', $file['name']) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to delete this log file?')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">No log files found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
