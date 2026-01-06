@extends('layouts.app')
@section('title', 'INTERNATIONAL SCHOOL OF MANAGEMENT ENQUIRY FORM')

@section('importcss')
    @parent
    {{ Html::style('css/custom.css') }}
@stop

@section('importjs')
    @parent
    <script type="module">
        @if (session('success'))
            Swal.fire({
                title: 'Success!',
                text: '{{ session('success') }}',
                icon: 'success'
            });
        @endif


        // @if (session('deleted'))
        //     Swal.fire({
        //         title: "Are you sure?",
        //         text: "You won't be able to revert this!",
        //         icon: "warning",
        //         showCancelButton: true,
        //         confirmButtonColor: "#3085d6",
        //         cancelButtonColor: "#d33",
        //         confirmButtonText: "Yes, delete it!"
        //     }).then((result) => {
        //         if (result.isConfirmed) {
        //             Swal.fire({
        //                 title: "Deleted!",
        //                 text: "Your file has been deleted.",
        //                 icon: "success"
        //             });
        //         }
        //     });
        // @endif
    </script>

@stop

@section('content')
    <header class="banner">
        {{-- <img src="../img/banner_home.png" alt="" class="d-none d-lg-block w-100"> --}}
    </header>
    <table id="example" class="table table-striped table-bordered table-hover nowrap">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Program Interested</th>
                <th>Message</th>
                <th>Nationality</th>
                <th>Created Date</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @if (count($enquiries) > 0)
                @foreach ($enquiries as $key => $enquiry)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td class="text-nowrap"><a href="{{ route('enquiries.show', $enquiry) }}"
                                target="_blank">{{ $enquiry['name'] }}</a></td>
                        <td>{{ $enquiry['program_interested'] }}</td>
                        <td>{{ $enquiry['direct_message'] }}</td>
                        <td>{{ $enquiry['nationality'] }}</td>
                        <td class="text-nowrap">{{ $enquiry['created_at'] }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-transparent p-0 dark:text-high-emphasis" type="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bi bi-three-dots-vertical"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" style="">
                                    <a class="dropdown-item text-info" href="{{ route('enquiries.show', $enquiry) }}"
                                        data-coreui-i18n="info" target="_blank">{{ __('Info') }}</a>
                                    <form id="delete-form-{{ $enquiry['enq_id'] }}"
                                        action="{{ route('enquiries.destroy', $enquiry) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                    </form>
                                    <button type="button" onclick="confirmDelete({{ $enquiry['enq_id'] }})" class="dropdown-item text-danger">Delete</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="7">The information you were looking for was not found.</td>
                </tr>

            @endif
        </tbody>
    </table>

    <script>
        function confirmDelete(id) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }
    </script>

@endsection
