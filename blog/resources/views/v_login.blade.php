<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
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
            }
        </style>


        <title>Bootstrap Example</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
                

    </head>
    <body>
        
        <div>
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">ค้นหาโรงพยาบาล</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">โรค หรืออาการ</a>
                </li>    
                <li class="nav-item">
                    <a class="nav-link" href="#">บทความเพื่อสุขภาพ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">แชร์ประสบการณ์</a>
                </li>
                </ul>
            </div>  
            </nav>
        </div>




        <div class="jumbotron text-center" style="margin-bottom:0">
            <img src="{{ url('storage/Images/1.jpg') }}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
            <h3>ค้นหาข้อมูลที่ต้องการ</h3>
            
            <input type="search" class="form-control" id="search">
            <p>Resize this responsive page to see the effect!</p> 
        </div>
       


    </body>
</html>
