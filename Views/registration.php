<!DOCTYPE html>
<html lang="en">
<p><a href="home">Home</a> &nbsp; / &nbsp; Registration</p>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


<div class="row mt-5">
    <div class="col-lg-6 offset-lg-3">
        <div class="card border-primary mb-3">
            <div class="card-header text-center">Registration</div>
            <div class="card-body">
                <form method="post">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Mobile No" onblur="check()" class="form-control" name="mobile" id="mobile">
                            <span id="phone">
                            </span>
                            <script>
                            function check() {
                                if (document.getElementById('mobile').value.length != 10) {
                                    // alert("Enter 10 Digits");
                                    document.getElementById('phone').innerHTML= 'Enter 10 digits';
                                }
                            }
                            </script>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="User Name" class="form-control" name="username" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" placeholder="Password" class="form-control" name="password"
                                id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="password" placeholder="Confirm Password" class="form-control" name="password"
                                id="">
                        </div>
                    </div>                  
                    <div class="row mt-3">
                        <div class="col">
                            <input type="email" placeholder="Enter Email" class="form-control" name="email" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="radio" value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                            <input type="radio" value="Female" name="gender" id="Female"> <label
                                for="Female">Female</label>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col">
                            <input type="checkbox" name="hobby[]" id="Cricekt" value="Cricekt"> <label for="Cricekt">Cricekt</label>
                            <input type="checkbox" name="hobby[]" id="Music" value="Music"> <label for="Music">Music</label>
                            <input type="checkbox" name="hobby[]" id="Reading" value="Reading"> <label for="Reading">Reading</label>
                            <input type="checkbox" name="hobby[]" id="Travelling" value="Travelling"> <label for="Travelling">Travelling</label>

                        </div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col text-center">
                            <select name="city" class="form-control" id="city">
                                <option value="">--Select City--</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Baroda">Baroda</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Registration" name="btn-regist" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                            <div class="col text-center">
                                <a href="login">Sign in to an existing account</a>
                            </div>
                        </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>