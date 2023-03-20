@extends('layout')

@section('content')
    <style>
        .profile {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .profiletitle {
            color: grey;
            font-size: 18px;
        }

        .referral {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }


        .referral:hover,
            {
            opacity: 0.7;
        }
    </style>
    <div class="jumbotron">
        <div class="container text-center">
            <h1>Profile</h1>
        </div>
    </div>

    <div class="container-fluid bg-3 text-center">
        <h2 style="text-align:center">User Profile </h2><br>
        <div class="row">
            <div class="profile">
                <h1> {{ session('username') }}</h1>
                <p class="profiletitle">{{ session('username') }}</p>

                <p><button class="referral">Referral Link</button></p>
            </div>
        </div><br>
    </div>
@endsection
