<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                background-image: url('./images/ugm.jpg');
                background-size: cover;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 84vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
                color: #fff;
                font-family: "Times New Roman", Times, serif;
                font-weight: 100;
            }

           ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #1A2C43;
                width: 100%;
            }

            li {
                float: left;
                margin-left:2%;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 18px 16px;
                text-decoration: none;
            }

            li a:hover {
                background-color: #5DADE2;
                color: white;
            }

            .w {
                width:50px; 
                height:50px;
                padding-top: 6px;
            }

            .teks{
                color: #ffff;
                font-family: "Times New Roman", Times, serif;
                font-weight: 200;
                padding: 21px 12px;
                margin-left:0.01%;
            }

            footer{
                font-family: "Times New Roman", Times, serif;
                background-color: #1A2C43;
                color: white;
                font-size: 12px;
                padding: 4px;
            }

            .tab{
                padding-left: 6px;
                padding-top: 8px;
            }

            .logo{
                width:200px; 
                height:200px;
            }

            .box {
                width: 1000px;
                height: 260px;
                padding: 10px;
                border: 1px #1A2C43;
                margin: 0;
                background-color: #D7DBDD;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
            }

            .log-box{
                width: 350px;
                height: 280px;
                padding-top: 25px;
                padding-left: 30px;
                border: 2px #5DADE2;
                margin: 0;
                background-color: #F1F1F1;
                font-family: "Times New Roman", Times, serif;
                color: black;
                font-size: 15px;
                border-radius: 15px;
            }

            form.search input[type=text] {
                padding: 10px;
                font-size: 17px;
                border: 1px solid grey;
                float: left;
                width: 70%;
                background: #f1f1f1;
                border-top-left-radius: 25px;
                border-bottom-left-radius: 25px;
            }

            form.search button {
                float: left;
                width: 20%;
                padding: 10px;
                background: #2196F3;
                color: white;
                font-size: 17px;
                border: 1px solid grey;
                border-left: none;
                cursor: pointer;
                border-top-right-radius: 25px;
                border-bottom-right-radius: 25px;
            }

            form.search button:hover {
                background: #0b7dda;
            }

            form.search::after {
                content: "";
                clear: both;
                display: table;
            }

            .right{
                width:10%;
                float:right;
                height:100%;
            }

            .button {
                background-color: #5DADE2;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 10px;
                margin: 4px 2px;
                cursor: pointer;
                border-radius: 5px;
            }

            .tombol {
                color: #fff;
                background-color: #004A74;
                border-color: #004A74;
                padding-top: 3px;
                margin-top: 14px;
                margin-left: 2px;  
            }

            button, input {
                overflow: visible;
                width: 290px;
            }


        </style>
    </head>
    <body>

    <header>

        <div>

            <ul>
                <li><img class="w" src="https://ugm.ac.id/images/optimasi/ugm_header.png"></li>
                <li class="teks">Wordnet UGM</li>
                <li><a href="/SeputarLaman">Seputar Laman</a></li>
                <li><a href="/Pencarian">Pencarian</a></li>

            <div class="right">
                <li><a href="/Login">Login</a></li>
            </div>
               
            </ul>

        </div>
        
    </header>
    
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            @yield('content')

        </div>
        <footer>
            <p class="tab"> © 2020 UNIVERSITAS GADJAH MADA</p>
        </footer>
    </body>
</html>
