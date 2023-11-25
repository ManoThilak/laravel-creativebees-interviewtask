

@extends('layouts.app')
<title>Employee View</title>
@section('content')
    <div class="container">
        <h2>Employee Details</h2>

        <div>
            <strong>Employee ID:</strong> {{ $employee->employee_id }}
        </div>
        <div>
            <strong>Name:</strong> {{ $employee->firstname }} {{ $employee->lastname }}
        </div>
        <div>
            <strong>Date of Birth:</strong> {{ $employee->date_of_birth }}
        </div>
        <div>
            <strong>Education Qualification:</strong> {{ $employee->education_qualification }}
        </div>
        <div>
            <strong>Address:</strong> {{ $employee->address }}
        </div>
        <div>
            <strong>Email:</strong> {{ $employee->email }}
        </div>
        <div>
            <strong>Phone:</strong> {{ $employee->phone }}
        </div>
        <div>
            <strong>Photo:</strong>
            @if ($employee->photo)
                <img src="{{ asset($employee->photo) }}" alt="Employee Photo" style="width: 100px;height:100px; margin-top: 10px;">
            @else
                No photo available
            @endif
        </div>
        <div>
            <strong>Resume:</strong>
            @if ($employee->resume)
                <a href="{{ asset($employee->resume) }}" target="_blank">View Resume</a>
            @else
                No resume available
            @endif
        </div>
    </div>
@endsection
