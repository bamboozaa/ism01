@extends('layouts.app')
@section('title', 'INTERNATIONAL SCHOOL OF MANAGEMENT ENQUIRY FORM')

@section('importcss')
    @parent

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

    </script>

@stop

@section('content')
    <header class="banner">
        <img src="../img/banner_home.png" alt="" class="d-none d-lg-block w-100">
    </header>
    <table id="example" class="table table-striped nowrap" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Name</th>
                <th>Message</th>
                <th>Created Date</th>
                {{-- <th>Action</th> --}}
            </tr>
        </thead>
        <tbody>
            @if (count($enquiries) > 0)
                @foreach ($enquiries as $key => $enquiry)
                    <tr>
                        <td>{{ $key +1 }}</td>
                        <td class="text-nowrap"><a href="{{ route('enquiries.show', $enquiry['enq_id']) }}" target="_blank">{{ $enquiry['name'] }}</a></td>
                        <td>{{ $enquiry['direct_message'] }}</td>
                        <td class="text-nowrap">{{ $enquiry['created_at'] }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">The information you were looking for was not found.</td>
                </tr>

            @endif
        </tbody>
    </table>

@endsection
