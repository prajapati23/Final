<!DOCTYPE html>
<html lang="en">
<p><a href="home">Home</a> &nbsp; / &nbsp; Feedback</p>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="row mt-5">
    <div class="col-lg-8 offset-lg-2">
        <div class="card border-primary mb-3">
            <div class="card-header text-center">Feedback</div>
            <div class="card-body">
                <form method="post">
                    <div class="row">
                        <div class="col-6">
                            <input type="text" placeholder="User Name" class="form-control" name="username" id="">
                        </div>
                        <div class="col-6">
                            <input type="tel" placeholder="Mobile No" class="form-control" name="mobile" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-6">
                            <input type="email" placeholder="Enter Email" class="form-control" name="email" id="">
                        </div>
                        <div class="col">
                            <input type="text" placeholder="Duration of you stay" class="form-control" name="Duration of you stay" id="">
                            <p class="md-3">ex.1 week</p>
                        </div>
                    </div>
                    <div class="row mt-1">
                        <div class="col-6">
                            <input type="date" name="date" placeholder="jkhkhlkj" class="form-control" name="Check-in Date" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                    <div class="col-12">
                    </div>
                    <table class="table table-borderd">
                        <thead class="table-dark">
                            <tr>
                                <th width="50%"></th>
                                <th>very satisfied</th>
                                <th>satisfied</th>
                                <th>not satisfied</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Rooms</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Services</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Food</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Welcome Drink</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Security</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                            <tr>
                                <td>Staff</td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                                <td><input type="radio" name="" id=""></td>
                            </tr>
                        </tbody>
                    </table>
                    
                    
                    <!-- <div class="row mt-4">
                                <label><h5><b>Select Room</b></h5></label>
                                <input type="checkbox" name="" id="Free Cancellation" value="Free Cancellation"> <label for="Free Cancellation">Free Cancellation</label>
                                <input type="checkbox" name="" id="Breakfast Included" value="Breakfast Included"> <label for="Breakfast Included">Breakfast Included</label>
                                <input type="checkbox" name="" id="Breakfast & Lunch/Dinner Included" value="Breakfast & Lunch/Dinner Included"> <label for="Breakfast & Lunch/Dinner Included">Breakfast & Lunch/Dinner Included</label>
                                <input type="checkbox" name="" id="Book with ₹0 Payment" value="Book with ₹0 Payment"> <label for="Book with ₹0 Payment">Book with ₹0 Payment</label>
                                </div>
                            </div> -->
                    <div class="row mt-3">
                        <div class="col">
                            <label for="address">Message</label>
                            <textarea name="message" id="message" class="form-control" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Submit" name="btn-regist" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>

</html>