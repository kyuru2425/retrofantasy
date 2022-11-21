<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SignUp Page</title>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <style>

        </style>
    </head>
    <body>
        <div class="container">
            <form action="hello.php" method="post" class="m-3" name="regform" id="regform" onsubmit="return checkValidation()">
                <!--Names-->
                <div class="row">
                    <div class="col-6">
                        <label for="fname">First Name</label>
                        <input type="text" name="fname" id="fname" class="form-control">
                    </div>
                    <div class="col-6">
                        <label for="lname">Last Name</label>
                        <input type="text" name="lname" id="lname" class="form-control">
                    </div>
                    <span id="fnamerr"></span>
                </div>
                <!--Email-->
                <div>
                    <label for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control">
                    <span id="emailerr"></span>
                </div>
                <div class="row">
                    <!--Password-->
                    <div class="col-6">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                        <span id="passerr"></span>
                    </div>
                    <!--Confirm Password-->
                    <div class="col-6">
                        <label for="con_password">Confirm Password</label>
                        <input type="password" name="con_password" id="con_password" class="form-control">
                        <span id="cpasserr"></span>
                    </div>
                </div>
                
                
                <!--Country-->
                <div>
                    <label for="country">Region</label>
                    <select name="country" id="country" class="form-control">
                        <option value="" disabled selected hidden>Select Your Region</option>
                        <option value="car">CORDILLERA ADMINISTRATIVE REGION</option>
                        <option value="ilocos region">ILOCOS REGION</option> 
                        <option value="cagayan valley">CAGAYAN VALLEY</option>
                        <option value="central luzon">CENTRAL LUZON</option>
                        <option value="calabarzon">CALABARZON</option>
                        <option value="ncr">NATIONAL CAPITAL REGION</option>
                        <option value="mimaropa">MIMAROPA</option>
                        <option value="bicol region">BICOL REGION</option>
                        <option value="western visayas">WESTERN VISAYAS</option>
                        <option value="central visayas">CENTRAL VISAYAS</option>
                        <option value="eastern visayas">EASTERN VISAYAS</option>
                        <option value="zamboanga peninsula">ZAMBOANGA PENINSULA</option>
                        <option value="northern mindanao">NORTHERN MINDANAO</option>
                        <option value="davao region">DAVAO REGION</option>
                        <option value="soccksargen">SOCCSKSARGEN</option>
                        <option value="caraga region">CARAGA REGION</option>
                    </select>
                    <span id="countryerr"></span>
                </div>
                <!--Address-->
                <div>
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control">
                    <span id="adderr"></span>
                </div>
                <div>
                    <label for="city">City / Town</label>
                    <input type="text" name="city" id="city" class="form-control">
                    <span id="cityerr"></span>
                </div>
                <div>
                    <label for="state">Province</label>
                    <input type="text" name="state" id="state" class="form-control">
                    <span id="staterr"></span>
                </div>
                <div>
                    <label for="zipcode">Zip code</label>
                    <input type="number" name="zipcode" id="zipcode" class="form-control">
                    <span id="ziperr"></span>
                </div>
                <!--Phone Number-->
                <div>
                    <label for="number">Phone Number</label>
                    <input type="text" name="number" id="number" class="form-control">
                    <span id="numerr"></span>
                </div>

                <br>
                <input type="submit" value="Create Account" name="createbtn" class="btn btn-primary">
            </form>
        </div>


        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        <script src="registration1.js">
            
        </script>
    </body>
</html>