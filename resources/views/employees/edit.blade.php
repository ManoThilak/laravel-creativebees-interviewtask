

@extends('layouts.app')
<title>Edit Employee</title>
@section('content')
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h2>Edit Employee</h2>
            @if(session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('employees.update', $employee->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                    <label for="employee_id">Employee ID:</label>
                    <input type="text" name="employee_id" id="employee_id" class="form-control" value="{{ old('employee_id', $employee->employee_id) }}" required>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="firstname">First Name:</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" value="{{ old('firstname', $employee->firstname) }}" required>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="lastname">Last Name:</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" value="{{ old('lastname', $employee->lastname) }}" required>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                    <label for="date_of_birth">Date of Birth:</label>
                    <input type="date" name="date_of_birth" id="date_of_birth" class="form-control" value="{{ old('date_of_birth', $employee->date_of_birth) }}" required>
                </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="education_qualification">Education Qualification:</label>
                    <input type="text" name="education_qualification" id="education_qualification" class="form-control" value="{{ old('education_qualification', $employee->education_qualification) }}" required>
                </div>
                </div>
                <div class="col-md-4">
                <div class="form-group">
                    <label for="address">Address:</label>
                    <textarea name="address" id="address" class="form-control" required>{{ old('address', $employee->address) }}</textarea>
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $employee->email) }}" required>
                </div>
                </div>

                <div class="col-md-4">
                <div class="form-group">
                    <label for="phone">Phone:</label>
                    <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $employee->phone) }}" required>
                </div>
                </div>


                <div class="col-md-4">
                <div class="form-group">
                    <label for="photo">Photo:</label>
                    <input type="file" name="photo" id="photo" class="form-control-file">
                    @if($employee->photo)
                        <img src="{{ asset($employee->photo) }}" alt="Employee Photo" style="width: 100px;height:100px; margin-top: 10px;">
                    @endif
                </div>
                </div>
                </div>

                <div class="row">
                <div class="col-md-4">
                <div class="form-group">
                    <label for="resume">Resume:</label>
                    <input type="file" name="resume" id="resume" class="form-control-file">
                    @if($employee->resume)
                        <a href="{{ asset($employee->resume) }}" target="_blank">View Resume</a>
                    @endif
                </div>
                </div>
                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                <button type="submit" class="btn btn-primary">Update Employee</button>
                </div>
                </div>
                </div>
            </form>
        </div>
    </div>
    <style>
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
        }

        #page-content-wrapper {
            padding: 15px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            color: #555;
        }

        input,
        textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
@endsection
