<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <style>
        body {
            background-color: #ffffff
        }

        .btn-color {
            background-color: #3e2bed;
            color: #fff;

        }

        .offset-md-3{
            margin-left: 0%;
            width:100%;
        }
        .cardbody-color {
            background-color: #98c1ec;
        }

        .card {
            box-shadow: 0px 0px 15px #000000;

        }
        .btn{
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="container bg-primery">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h1 class="text-center text-dark mt-5">Feedback Form</h2>

                    <div class="card my-5">

                        <form action="code.php" method="POST" class="card-body cardbody-color p-lg-5">

                            <div class="Q1" name="1name">
                                <span class="Questions"><br><br>1. How did you come to police station? </span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios1" value="Through a person known to a police officer" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        A. Through a person known to a police officer
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="With a neighbour/local leader">
                                    <label class="form-check-label" for="exampleRadios2">
                                        B. With a neighbour/local leader
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios"
                                        id="exampleRadios2" value="On your own">
                                    <label class="form-check-label" for="exampleRadios3">
                                        C. On your own
                                    </label>
                                </div>
                                <br><br>
                            </div>
                            <div class="Q2">
                                <span class="Questions">2. After how much time you were heard in PS? </span>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios1"
                                        id="exampleRadios1" value="More than 15 miniutes" checked>
                                    <label class="form-check-label" for="exampleRadios1">
                                        A. More than 15 miniutes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios1"
                                        id="exampleRadios2" value="15 miniutes">
                                    <label class="form-check-label" for="exampleRadios2">
                                        B. 15 miniutes
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios1"
                                        id="exampleRadios3" value="10 miniutes">
                                    <label class="form-check-label" for="exampleRadios3">
                                        C. 10 miniutes
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios1"
                                        id="exampleRadios4" value="5 miniutes">
                                    <label class="form-check-label" for="exampleRadios4">
                                        D. 5 miniutes
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="exampleRadios1"
                                        id="exampleRadios5" value="Immediately">
                                    <label class="form-check-label" for="exampleRadios5">
                                        E. Immediately
                                    </label>
                                </div>
                                <br><br>
                            </div>
                            <div class="Q3" >
                                
                                <span class="Questions">3. How would you describe your experience with police officers
                                    in the police
                                    station
                                    ? (maximum 300 character allowed) </span>

                                <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
                                    <textarea class="form-control" name="answer3" aria-label="With textarea"></textarea>
                                </div>
                            </div>
                            <div class="submit text-center">
                                <button type="submit" class="btn btn-info btn-color" name ="save_radio">Submit</button>
                            
    </form>
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