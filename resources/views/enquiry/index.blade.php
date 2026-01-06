@extends('layouts.app')
@section('title', 'INTERNATIONAL SCHOOL OF MANAGEMENT ENQUIRY FORM')

@section('importcss')
    @parent
    {{ Html::style('css/custom.css') }}
    <style>
        body {
            background: #f5f7fa;
        }
        .enquiry-header {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .enquiry-header h1 {
            margin: 0;
            font-size: 1.5rem;
            font-weight: 600;
            display: inline-block;
        }
        .enquiry-header .badge {
            background: rgba(255,255,255,0.25);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.85rem;
            margin-left: 1rem;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.08);
        }
        .modern-table {
            margin: 0;
            font-size: 0.9rem;
        }
        .modern-table thead {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .modern-table thead th {
            color: white !important;
            font-weight: 600;
            text-transform: uppercase;
            font-size: 0.75rem;
            letter-spacing: 0.5px;
            padding: 0.75rem 0.5rem;
            border: none;
            vertical-align: middle;
            background-color: #667eea !important;
        }
        .modern-table tbody tr {
            transition: all 0.2s ease;
        }
        .modern-table tbody tr:hover {
            background: rgba(102, 126, 234, 0.05);
        }
        .modern-table tbody td {
            padding: 0.6rem 0.5rem;
            vertical-align: middle;
            color: #333;
            border-bottom: 1px solid #f0f0f0;
        }
        .modern-table tbody td:first-child {
            font-weight: 600;
            color: #667eea;
            width: 50px;
            text-align: center;
        }
        .name-link {
            color: #667eea;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.2s;
        }
        .name-link:hover {
            color: #764ba2;
            text-decoration: underline;
        }
        .badge-program {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            padding: 0.25rem 0.6rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 500;
            white-space: nowrap;
        }
        .badge-nationality {
            background: #e8f0fe;
            color: #1967d2;
            padding: 0.25rem 0.6rem;
            border-radius: 12px;
            font-size: 0.75rem;
            font-weight: 500;
            white-space: nowrap;
        }
        .message-cell {
            max-width: 200px;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            color: #666;
            font-size: 0.85rem;
        }
        .date-cell {
            color: #999;
            font-size: 0.8rem;
            white-space: nowrap;
        }
        .action-btn {
            background: #667eea;
            color: white;
            border: none;
            border-radius: 6px;
            width: 30px;
            height: 30px;
            padding: 0;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            transition: all 0.2s;
        }
        .action-btn:hover {
            background: #764ba2;
            transform: scale(1.1);
        }
        .dropdown-menu {
            border: none;
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
            border-radius: 8px;
            font-size: 0.9rem;
        }
        .dropdown-item {
            padding: 0.5rem 1rem;
            transition: all 0.2s;
        }
        .dropdown-item:hover {
            background: rgba(102, 126, 234, 0.1);
        }
        .empty-state {
            text-align: center;
            padding: 3rem 1rem;
            color: #999;
        }
        .pagination {
            margin-top: 1.5rem;
            justify-content: center;
        }
        .pagination .page-link {
            color: #667eea;
            border: 1px solid #dee2e6;
            padding: 0.4rem 0.75rem;
            margin: 0 2px;
            border-radius: 6px;
            transition: all 0.2s;
        }
        .pagination .page-link:hover {
            background: #667eea;
            color: white;
            border-color: #667eea;
        }
        .pagination .page-item.active .page-link {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            border-color: #667eea;
        }
        @media (max-width: 768px) {
            .enquiry-header h1 {
                font-size: 1.2rem;
            }
            .modern-table {
                font-size: 0.8rem;
            }
        }
    </style>
@stop

@section('importjs')
    @parent
    <script type="module">
        @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success',
                confirmButtonColor: '#667eea',
                timer: 3000
            });
        @endif
    </script>

@stop

@section('content')
    <div class="container-fluid px-4">
        <div class="enquiry-header">
            <h1>📝 Enquiry Management</h1>
            <span class="badge">Total: {{ $enquiries->total() }}</span>
        </div>

        <div class="card">
            <div class="table-responsive">
                <table class="table modern-table mb-0">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Name</th>
                            <th>Program</th>
                            <th>Message</th>
                            <th>Nationality</th>
                            <th>Date</th>
                            <th style="text-align: center; width: 60px;">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($enquiries as $enquiry)
                            <tr>
                                <td>{{ $enquiries->firstItem() + $loop->index }}</td>
                                <td>
                                    <a href="{{ route('enquiries.show', $enquiry) }}"
                                       class="name-link"
                                       target="_blank">{{ $enquiry['name'] }}</a>
                                </td>
                                <td>
                                    <span class="badge-program">{{ $enquiry['program_interested'] }}</span>
                                </td>
                                <td>
                                    <div class="message-cell" title="{{ $enquiry['direct_message'] }}">
                                        {{ $enquiry['direct_message'] }}
                                    </div>
                                </td>
                                <td>
                                    <span class="badge-nationality">{{ $enquiry['nationality'] }}</span>
                                </td>
                                <td class="date-cell">{{ $enquiry['created_at'] }}</td>
                                <td style="text-align: center;">
                                    <div class="dropdown">
                                        <button class="action-btn" type="button"
                                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item text-info" href="{{ route('enquiries.show', $enquiry) }}"
                                                target="_blank"><i class="bi bi-info-circle me-2"></i>{{ __('Info') }}</a>
                                            <form id="delete-form-{{ $enquiry['enq_id'] }}"
                                                action="{{ route('enquiries.destroy', $enquiry) }}" method="post">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                            <button type="button" onclick="confirmDelete({{ $enquiry['enq_id'] }})"
                                                class="dropdown-item text-danger"><i class="bi bi-trash me-2"></i>Delete</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7">
                                    <div class="empty-state">
                                        <i class="bi bi-inbox" style="font-size: 3rem; opacity: 0.3;"></i>
                                        <p class="mt-2">No enquiries found.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="d-flex justify-content-center">
            {{ $enquiries->links() }}
        </div>
    </div>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#667eea",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!",
                cancelButtonText: "Cancel"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

@endsection
