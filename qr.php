<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: #ffffff
        }

        .btn-color {
            background-color: #3e2bed;
            color: #fff;

        }

        .offset-md-3 {
            margin-left: 0%;
            width: 100%;
        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }

        .cardbody-color {
            background-color: #98c1ec;
        }
        .align{
            padding-left: 10px;   
        }

        .my-5 {
            padding-top:30px ;
            padding-bottom: 50px;
        }

        a {
            text-decoration: none;
        }

        .card {
            box-shadow: 0px 0px 15px #000000;
            
        }

        .row {
            padding-left: 3px;
        }
        /* .img{
            margin-left: 100%;
        } */

        /* .text{
            font-size: 10px;
        } */
    </style>
</head>

<body>
    <div class="container bg-primery">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2 class="text-center text-dark mt-5">Genearte QR code</h2>
                <div class="card my-5 cardbody-color text-center">

                    <div class="dropdown align-items-center">
                        <button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown">Select
                        </button>
                        <ul class="dropdown-menu " style="margin-left:465px;">
                            <li><a tabindex="-1" href="#">Ahmedabad city</a></li>
                            <li><a tabindex="-1" href="#">Vadodhara city</a></li>
                            <li><a tabindex="-1" href="#">Surat city</a></li>
                            <li>
                                <a class="test" href="#">Ahmedabad Division<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">A</a></li>
                                    <li><a href="#">B</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="test" href="#">Vadodhara Division<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">A1</a></li>
                                    <li><a href="#">B1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="test" href="#">Surat Division<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">A2</a></li>
                                    <li><a href="#">B2</a></li>
                                </ul>
                            </li>
                        </ul>

                        </ul>
                    </div>
                    <br>
                    
                    <div class="img text-center" >
                        <br>
                        <img src="qrfinal.png" class="img text-center" width="150px" height="150px">
                    </div><div class="container">
                        <br>
                    <input class="btn btn-primary" type="submit" value="Submit">
                    
                </div>
            </div>
                <script>
                    $(document).ready(function () {
                        $('.dropdown a.test').on("click", function (e) {
                            $(this).next('ul').toggle();
                            e.stopPropagation();
                            e.preventDefault();
                        });
                    });
                </script>
                
            </div>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>
</body>

</html>