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
        <!-- 
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01"x>
            <a class="navbar-brand" href="#">Hidden brand</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="#">หน้าแรก <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ค้นหาโรงพยาบาล</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">โรค หรืออาการ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">บทความเพื่อสุขภาพ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#">แชร์ประสบการณ์</a>
            </li>
            </ul>
            
        </div>
        </nav>

         -->
        <div class="row">
            <div class="col-4">
            </div>
            <div class="col-8">
                <ul class="nav nav-pills nav-fill">
                        <li class="nav-item">
                            <a class="nav-link " href="#">หน้าแรก</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">ค้นหาโรงพยาบาล</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">โรคหรืออาการ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">บทความเพื่อสุขภาพ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">แชร์ประสบการณ์</a>
                        </li>
                    </ul>
            </div>
        </div> <!--class="row" -->
                
                    



        

        <div class="jumbotron" style="margin-bottom:0">
            <div class="row">
                <div class="col-3">
                    <img src="{{ url('storage/Images/1.jpg') }}" class="rounded-circle" alt="Cinque Terre" width="304" height="236"> 
                </div>
                <div class="col-9">
                    <h3>ค้นหาข้อมูลที่ต้องการ</h3>
                    <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-10" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </div>
       


    </body>
</html>
