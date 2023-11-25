

@extends('layouts.app')
<title>Employee List</title>
@section('content')

    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h2>Employee List</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <table id="employee-table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Emp.ID</th>
                        <th>Name</th>
                        <th>Date of Birth</th>
                        {{-- <th>Qualification</th> --}}
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->employee_id }}</td>
                <td>{{ $employee->firstname }} {{ $employee->lastname }}</td>
                <td>{{ \Carbon\Carbon::parse($employee->date_of_birth)->format('d-m-Y') }}</td>
                {{-- <td>{{ $employee->education_qualification }}</td> --}}
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->phone }}</td>
                <td>
                    <a href="{{ route('employees.show', ['employee' => $employee->id]) }}" class="btn btn-success">View</a>
                    <a href="{{ route('employees.edit', $employee->id) }}" class="btn btn-warning">Edit</a>
                    <a href="{{ route('employees.destroy', $employee->id) }}" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $employee->id }}').submit();">Delete</a>
                    <form id="delete-form-{{ $employee->id }}" action="{{ route('employees.destroy', $employee->id) }}" method="POST" style="display: none;">
                        @csrf
                        @method('DELETE')
                    </form>
                </td>
            </tr>
        @endforeach
                </tbody>
            </table>

            <div class="pagination">
                @if ($employees->onFirstPage())
                    <span class="disabled">« Previous</span>
                @else
                    <a href="{{ $employees->previousPageUrl() }}" rel="prev">« Previous</a>
                @endif
            
                @if ($employees->hasMorePages())
                    <a href="{{ $employees->nextPageUrl() }}" rel="next">Next »</a>
                @else
                    <span class="disabled">Next »</span>
                @endif
            </div>
        </div>
    </div>
    @section('scripts')
    <script>
        $(document).ready(function() {
            $('#employee-table').DataTable({
                paging: true,
                searching: true,
                ordering: true,
                info: true,
                pageLength: 10,
                lengthMenu: [5, 10, 25, 50, 100],
                language: {
                    paginate: {
                        next: 'Next &raquo;',
                        previous: '&laquo; Previous'
                    },
                    search: '_INPUT_',
                    searchPlaceholder: 'Search...',
                    lengthMenu: '_MENU_ records per page',
                },
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]
            });
        });
    </script>
@endsection
@endsection
