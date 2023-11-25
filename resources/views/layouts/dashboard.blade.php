

@extends('layouts.app')
<title>Dashboard</title>
@section('content')
    


        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div id="profile-header">
                    <img src="{{ asset('user.jpg') }}" alt="User Profile Image" class="profile-image">
                    <div class="profile-info">
                        <h3>{{ Auth::user()->name }}</h3>
                        <p>Email: {{ Auth::user()->email }}</p>
                    </div>
                </div>

                <h2>Welcome to the Dashboard</h2>
               

                {{-- <div id="logout">
                    <a href="{{ route('logout') }}" class="btn btn-primary">Logout</a>
                </div> --}}
                

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
  

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
