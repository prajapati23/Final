<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12 d-flex align-items-stretch">
      <div class="card w-100">
        <div class="card-body p-4">
          <h5 class="card-title fw-semibold mb-4">Edit Users</h5>
          <div class="row">
            <div class="col-8">
            <div class="card-body">
               <?php 
            //    echo "<pre>";
            //    print_r($UserById);
            //    print_r($UserById['Data']);
            //    print_r($UserById['Data'][0]);
            //    print_r($UserById['Data'][0]->username);
            //    echo $UserById['Data'][0];
            //    echo $UserById['Data'][0]->username;
            //    echo "</pre>";
            //    exit;
               ?>
                <form method="post">
                    <div class="row">
                    <div class="col">
                            <input type="text" placeholder="Enter id" class="form-control" name="id" value="<?php echo $UserById['Data'][0]->id ?>" id="">
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter fullname" class="form-control" name="fullname" value="<?php echo $UserById['Data'][0]->fullname ?>" id="">
                        </div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" placeholder="Enter User Name" class="form-control" name="username" value="<?php echo $UserById['Data'][0]->username ?>" id="">
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col">
                            <input type="password" placeholder="Enter Password" class="form-control" name="password" id="">
                        </div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col">
                            <input type="tel" placeholder="Enter Mobile" class="form-control" name="mobile" value="<?php echo $UserById['Data'][0]->mobile ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="email" placeholder="Enter Email" class="form-control" name="email" value="<?php echo $UserById['Data'][0]->email ?>" id="">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col">
                            <input type="radio" <?php  if ($UserById['Data'][0]->gender == "Male") {
                                echo "checked";
                            }?> value="Male" name="gender" id="Male"> <label for="Male">Male</label>
                            <input type="radio" <?php  if ($UserById['Data'][0]->gender == "Female") {
                                echo "checked";
                            }?> value="Female" name="gender" id="Female"> <label for="Female">Female</label>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col">
                            <?php
                            // echo $UserById['Data'][0]->hobby;
                            $HobArray =explode(",",$UserById['Data'][0]->hobby);
                            // echo "<pre>";
                            // print_r($HobArray);
                            // in_array("Cricekt",$HobArray);
                            // if (in_array("Cricekt",$HobArray)) {
                            //    echo "inside if";
                            // } else {
                            //     echo "inside else";
                            //     # code...
                            // }
                            
                            // echo "</pre>";

                            ?>
                            <input type="checkbox" name="hobby[]" id="Cricekt" <?php  if (in_array("Cricekt",$HobArray)) { 
                               echo "checked";
                            } ?> value="Cricekt"> <label for="Cricekt">Cricekt</label>

                            <input type="checkbox" name="hobby[]" id="Music" <?php  if (in_array("Music",$HobArray)) { 
                               echo "checked";
                            } ?> value="Music"> <label for="Music">Music</label>

                            <input type="checkbox" name="hobby[]" id="Reading" <?php  if (in_array("Reading",$HobArray)) { 
                               echo "checked";
                            } ?> value="Reading"> <label for="Reading">Reading</label>

                            <input type="checkbox" name="hobby[]" id="Travelling" <?php  if (in_array("Travelling",$HobArray)) { 
                               echo "checked";
                            } ?> value="Travelling"> <label for="Travelling">Travelling</label>

                        </div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col text-center">
                            <select name="city" class="form-control" id="city">
                                <option value="">--Select City--</option>
                                <?php
                                foreach ($CitiesData['Data'] as $key => $value) { ?>
                                   <option <?php if ($value->id == $UserById['Data'][0]->city) {
                                    echo "selected";
                                   }?> value="<?php echo $value->id; ?>"><?php echo $value->name; ?></option>
                                <?php } ?>

                                ?>
                                <!-- <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Baroda">Baroda</option> -->
                            </select>
                        </div>
                    </div>
                    <!-- <div class="row mt-3">
                        <div class="col">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" class="form-control" cols="30" rows="3"></textarea>
                        </div>
                    </div> -->
                    <div class="row mt-3">
                        <div class="col text-center">
                            <input type="submit" class="btn btn-primary" value="Update" name="btn-update" id="">
                            <input type="reset" class="btn btn-danger" name="" id="">
                        </div>
                    </div>
                </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> 
              