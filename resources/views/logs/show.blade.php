@extends('layouts.app')

@section('importcss')
    @parent
    {{ Html::style('css/custom.css') }}
@stop

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h2>Log File: {{ $fileName }}</h2>
            <div>
                <a href="{{ route('logs.index') }}" class="btn btn-secondary">Back to List</a>
                <a href="{{ route('logs.download', $fileName) }}" class="btn btn-primary">Download</a>
            </div>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label for="logLevel" class="form-label">Filter by Log Level:</label>
                <select id="logLevel" class="form-select">
                    <option value="all">All Levels</option>
                    <option value="info">Info</option>
                    <option value="warning">Warning</option>
                    <option value="error">Error</option>
                    <option value="critical">Critical</option>
                    <option value="alert">Alert</option>
                    <option value="emergency">Emergency</option>
                    <option value="debug">Debug</option>
                    <option value="notice">Notice</option>
                </select>
            </div>
            
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Timestamp</th>
                            <th>Level</th>
                            <th>Details</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($logEntries as $entry)
                            <tr class="log-entry {{ $entry['level'] }}">
                                <td>{{ $entry['timestamp'] }}</td>
                                <td>
                                    <span class="badge bg-{{ $entry['level'] == 'error' || $entry['level'] == 'critical' || $entry['level'] == 'emergency' ? 'danger' : 
                                        ($entry['level'] == 'warning' || $entry['level'] == 'alert' ? 'warning' : 
                                        ($entry['level'] == 'info' ? 'info' : 'secondary')) }}">
                                        {{ ucfirst($entry['level']) }}
                                    </span>
                                </td>
                                <td>
                                    <pre>{{ $entry['details'] }}</pre>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" class="text-center">No log entries found.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const logLevel = document.getElementById('logLevel');
    const logEntries = document.querySelectorAll('.log-entry');
    
    logLevel.addEventListener('change', function() {
        const selectedLevel = this.value;
        
        logEntries.forEach(function(entry) {
            if (selectedLevel === 'all' || entry.classList.contains(selectedLevel)) {
                entry.style.display = '';
            } else {
                entry.style.display = 'none';
            }
        });
    });
});
</script>
@endsection
