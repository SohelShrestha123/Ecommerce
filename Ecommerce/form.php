<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <link rel="stylesheet" href="form.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
</head>
<body>
    <div class="page">
        <div class="form-box">
            <form action="" name="myform" onsubmit="return valid()">
                <h2>Sign Up Your Account</h2>
                <p id="output"></p>
                <div class="box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="firstname" placeholder="Firstname" autocomplete="off">
                </div>

                <div class="box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="lastname" placeholder="Lastname" autocomplete="off">
                </div>

                <div class="box">
                    <i class="fa-solid fa-user"></i>
                    <input type="text" name="username" placeholder="Username" autocomplete="off">
                </div>

                
                <div class="box">
                    <i class="fa-solid fa-envelope"></i>
                    <input type="email" name="email" placeholder="Email" autocomplete="off">
                </div>

                
                <div class="box">
                    <i class="fa-solid fa-address-book"></i>
                    <input type="text" name="phone" placeholder="Phone No" autocomplete="off">
                </div>

                
                <div class="box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="password" placeholder="Password">
                </div>

                
                <div class="box">
                    <i class="fa-solid fa-lock"></i>
                    <input type="password" name="confirm" placeholder="Confirm Password">
                </div>

                 
                <div class="box">
                <i class="fa-solid fa-location-dot"></i>
                    <input type="textarea" name="place" placeholder="Address">
                </div>

                <div class="gen">
                    <i class="fa-solid fa-person-half-dress"></i>
                    <select name="gender">
                        <option value="">Select</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>

                <div class="btn">
                    <input type="submit" class="b" value="Create">
                    <input type="reset" class="b" value="Cancel">
                </div>

                <div class="group">
                    <span><a href="login.html">Login</a></span>
                </div>
            </form>
        </div>
    </div>
    
    <script src="form.js"></script>
</body>
</html>