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
            <div class="card-header text-center">Add Food</div>
            <div class="card-body">
                <form method="post">
                    <!-- <div class="row mt-3">
                        <div class="col">
                        <input type="text" placeholder="Food id" class="form-control" name="categoryname" id="">
                        </div>
                    </div> -->
                    <div class="row mt-3">
                    <select name="city" class="form-control" id="city">
                                <option value="">--Select Category--</option>
                                <option value="Ahmedabad">Gujarati</option>
                                <option value="Surat">Sound indian</option>
                                <option value="Baroda">Punjabi</option>
                                <option value="Baroda">Kathiyawadi</option>
                            </select>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <input type="text" placeholder="Food Name" class="form-control" name="categoryname" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                        <input type="text" placeholder="Food Price" class="form-control" name="categoryname" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <label for="foooddescription">Food Description</label>
                            <textarea name="fooddescription" id="fooddescription" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <input type="file" class="form-control">
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Add Food" name="btn-regist" id="">
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

