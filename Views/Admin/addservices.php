<!DOCTYPE html>
<html lang="en">
<!-- <p><a href="home">Home</a> &nbsp; / &nbsp; Registration</p> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>

<body>


<div class="row mt-5">
    <div class="col-lg-6 offset-lg-3 mt-5">
        <div class="card border-primary mb-3 mt-5">
            <div class="card-header text-center">Add Services</div>
            <div class="card-body">
                <form method="post">
                <!-- <div class="row mt-3">
                    <select name="city" class="form-control" id="city">
                                <option value="">--Select Category--</option>
                                <option value="Ahmedabad">Welcome Drink</option>
                                <option value="Surat">Swimming pool</option>
                                <option value="Baroda">Restaurant</option>
                                <option value="Baroda">Security</option>
                                <option value="Baroda">Staff 24/7</option>
                                <option value="Baroda">Bike</option>
                            </select>
                    </div> -->
                    <div class="row mt-3">
                    <div class="col">
                            <input type="text" placeholder="services name" name="categorydescription" id="categorydescription" class="form-control">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="servicesdescription">Services Description</label>
                            <textarea name="servicesdescription" id="servicesdescription" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <input type="file" class="form-control">
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Add Services" name="btn-regist" id="">
                            <a href="allcategories"><button class="btn btn-danger" name="" id="">Back</button></a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html> 