

@extends('layouts.app')
<title>Create Employee</title>
@section('content')
{{-- <div id="wrapper">
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li class="sidebar-brand">
                <a href="{{ route('dashboard') }}">Dashboard</a>
            </li>
            <li>
                <a href="{{ route('employees') }}">Create Employee</a>
            </li>
            <li>
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            </li>
        </ul>
    </div> --}}
    
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <h2>Create Employee</h2>
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
            <form action="{{ route('employees.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="employee_id">Employee ID:</label>
                            <input type="text" name="employee_id" id="employee_id" value="{{ old('employee_id') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="firstname">First Name:</label>
                            <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="lastname">Last Name:</label>
                            <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" class="form-control" required>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="date_of_birth">Date of Birth:</label>
                            <input type="date" name="date_of_birth" id="date_of_birth" value="{{ old('date_of_birth') }}" class="form-control" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="education_qualification">Education Qualification:</label>
                            <input type="text" name="education_qualification" id="education_qualification" class="form-control" value="{{ old('education_qualification') }}" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="address">Address:</label>
                            <textarea name="address" id="address" class="form-control"  required>{{ old('address') }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}" required>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="photo">Photo:</label>
                            <input type="file" name="photo" id="photo" class="form-control-file" value="{{ old('photo') }}">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="resume">Resume:</label>
                            <input type="file" name="resume" id="resume" class="form-control-file" value="{{ old('employee_id') }}">
                        </div>
                    </div>

                   

                </div>
                <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                <button type="submit" class="btn btn-primary">Create Employee</button>
                    </div>
                </div>
                </div>
            </form>
        </div>
    </div>
{{-- </div> --}}

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
    
    <style>
        body {
            padding: 0;
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
    
        #wrapper {
            display: flex;
        }
    
        #sidebar-wrapper {
            width: 250px;
            background-color: #343a40;
            color: #fff;
            padding-top: 20px;
            height: 100vh; 
        }
    
        .sidebar-nav {
            list-style: none;
            padding: 0;
        }
    
        .sidebar-nav li {
            text-indent: 20px;
            line-height: 40px;
        }
    
        .sidebar-nav li a {
            text-decoration: none;
            color: #fff;
        }
    
        .sidebar-nav li a:hover {
            color: #dcdcdc;
        }
    
        #page-content-wrapper {
            flex: 1;
            padding: 15px;
        }
    
        #profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
    
        .profile-image {
            border-radius: 50%;
            width: 80px;
            height: 80px;
            object-fit: cover;
            margin-right: 20px;
        }
    
        .profile-info h3 {
            margin: 0;
            font-size: 24px;
            color: #333;
        }
    
        .profile-info p {
            margin: 5px 0 0;
            color: #666;
        }
    
        #logout {
            margin-top: 20px;
        }
    
        .btn-primary {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
    
        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #0056b3;
        }
    </style>
@endsection
