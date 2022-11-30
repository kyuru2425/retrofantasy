<?php
    require "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Profile</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="home.css" />
    </head>
    <body>
        <?php 
            include "header.php";
            include "./sqlphp/editsql.php";
        ?>
        <div class="container">
            
            <div class="card">
                <div class="card-header">
                    Featured
                </div>
                <div class="card-body">
                    <form action="edituser.php" method="post">
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" value="<?php echo $fname ?>" class="form-control">
                            </div>
                            <div class="form-group col-6">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" value="<?php echo $lname ?>" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" name="phone" id="phone" value="<?php echo $phone ?>" class="form-control">
                        </div><br>
                        <!--Country-->
                        <div class="form-group">
                            <label for="region">Region</label>
                            <select name="region" id="region" class="form-control">
                                <option value="" disabled selected hidden>Select Your Region</option>
                                <option value="car" <?php  echo $region == 'car'? 'selected':''; ?> >CORDILLERA ADMINISTRATIVE REGION</option>
                                <option value="ilocos region" <?php  echo $region == 'ilocos region'? 'selected':''; ?> >ILOCOS REGION</option> 
                                <option value="cagayan valley" <?php  echo $region == 'cagayan valley'? 'selected':''; ?> >CAGAYAN VALLEY</option>
                                <option value="central luzon" <?php  echo $region == 'central luzon'? 'selected':''; ?> >CENTRAL LUZON</option>
                                <option value="calabarzon" <?php  echo $region == 'calabarzon'? 'selected':''; ?> >CALABARZON</option>
                                <option value="ncr" <?php  echo $region == 'ncr'? 'selected':''; ?> >NATIONAL CAPITAL REGION</option>
                                <option value="mimaropa" <?php  echo $region == 'mimaropa'? 'selected':''; ?> >MIMAROPA</option>
                                <option value="bicol region" <?php  echo $region == 'bicol region'? 'selected':''; ?> >BICOL REGION</option>
                                <option value="western visayas" <?php  echo $region == 'western visayas'? 'selected':''; ?> >WESTERN VISAYAS</option>
                                <option value="central visayas" <?php  echo $region == 'central visayas'? 'selected':''; ?> >CENTRAL VISAYAS</option>
                                <option value="eastern visayas" <?php  echo $region == 'eastern visayas'? 'selected':''; ?> >EASTERN VISAYAS</option>
                                <option value="zamboanga peninsula" <?php  echo $region == 'zamboanga peninsula'? 'selected':''; ?> >ZAMBOANGA PENINSULA</option>
                                <option value="northern mindanao" <?php  echo $region == 'northern mindanao'? 'selected':''; ?> >NORTHERN MINDANAO</option>
                                <option value="davao region" <?php  echo $region == 'davao region'? 'selected':''; ?> >DAVAO REGION</option>
                                <option value="soccksargen" <?php  echo $region == 'soccksargen'? 'selected':''; ?> >SOCCSKSARGEN</option>
                                <option value="caraga region" <?php  echo $region == 'caraga region'? 'selected':''; ?> >CARAGA REGION</option>
                            </select>
                        </div><br>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" name="address" id="address" class="form-control" value="<?php echo $address ?>">
                        </div><br>
                        <div class="row">
                            <div class="form-group col-6">
                                <label for="city">City</label>
                                <input type="text" name="city" id="city" class="form-control" value="<?php echo $city ?>">
                            </div><br>
                            <div class="form-group col-6">
                                <label for="province">Province</label>
                                <input type="text" name="province" id="province" class="form-control" value="<?php echo $province ?>">
                            </div><br>
                        </div><br>
                        
                        <div class="form-group">
                            <label for="zipcode">Zipcode</label>
                            <input type="number" name="zipcode" id="zipcode" class="form-control" value="<?php echo $zip ?>">
                        </div><br>

                        <input type="submit" name="editinfo" id="editinfo" value="Edit Information" class="btn btn-primary">
                    </form>
                </div>
            </div>
            

        </div>
        <?php include "footer.php" ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

    </body>
</html>