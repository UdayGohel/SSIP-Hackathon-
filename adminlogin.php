<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous">

        </script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body {
            background-color: #ffffff
        }

        .btn-color {
            background-color: #3e2bed;
            color: #fff;
        }

        .profile-image-pic {
            height: 200px;
            width: 200px;
            object-fit: cover;
        }



        .cardbody-color {
            background-color: #98c1ec;
        }

        a {
            text-decoration: none;
        }

        .form-text {
            background-color: #98c1ec;
        }
    </style>
</head>

<body>
    <div class="container bg-primery">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-dark mt-3">Admin Login</h1>

                <div class="card my-5">

                    <form action="adminl.php" method="POST" class="card-body cardbody-color p-lg-5">

                        <div class="text-center">
                            <img src="https://i.pinimg.com/originals/4f/b0/e9/4fb0e97748d350e0e1e28e653db197bc.gif"
                                class="img-fluid profile-image-pic img-thumbnail my-3" width="200px" alt="profile">
                        </div>
                    <form action="adminl.php" method="POST" class="form admin-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="loginid" id="Username" 
                                placeholder="Admin ID">
                            <script>
                                function passvalues() {
                                    var Name = document.getElementById("Username").value;
                                    localStorage.setItem("textvalue", Name);
                                    return false;
                                }
                            </script>
                        </div>
                        <div class="mb-3">
                            <input type="password"name="Pass" class="form-control" id="password" placeholder="Password">
                        
                        </div>
                        
                        <div class="g-recaptcha" data-sitekey="6Le4X14iAAAAAMgQXbdnDJqcGkm07o8Zk-Bb_82t"></div>
                        <br />


                        <div class="text-center">
                            
                                <input type="submit" name="sub" value="Login" unclick="passvalues();" class="btn btn-info btn-color px-5 mb-5 w-100"></input>
                            
                        </div>
                        
                    </form>
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