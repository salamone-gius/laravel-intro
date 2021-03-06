@extends('layouts.base')

@section('title')
    Home Page
@endsection

@section('head-scripts')
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
            }

            body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
            }

            .header-top {
                background-color: darkgoldenrod;
                color: lightgoldenrodyellow;
                padding: 1rem;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .title {
                font-size: 4rem;
                text-transform: uppercase;
                text-align: center;
            }

            .header-bottom {
                background-color: goldenrod;
                color: lightgoldenrodyellow;
                padding: 1rem;
            }

            ul {
                list-style: none;
            }

            a {
                color: lightgoldenrodyellow;
                padding: 0 0.5rem;
                margin: 1.5rem;
                font-size: 1.5rem;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            a:hover {
                color: white;
            }

            .main-content {
                margin-top: 6rem;
            }
        </style>
@endsection

@section('page-content')
    <div class="main-content flex-center">
        <h2 class="title">questa è la pagina <br> "home"</h2>
    </div>
@endsection