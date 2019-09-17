<?php
    include "../includes/functions.php";
    include "../includes/script.php";
    include "../includes/style.php";
    include "../includes/meta.php";
?>

<body>
<div class="container">
        <div class="row">
            <!-- The side nav that contains the sign in link -->
            <div class="col-md-3">
                <div class="container cont-sign">
                    <h1><a href="#">SignIn</a></h1>
                </div>
            </div>
            <!-- The form, proper -->
            <div class="col-md-8">
                    <div class="container cont">
                            <h1 style="display:block;">Sign Up</h1>
                            <small id="emailHelp" class="form-text text-muted mb-4">Fill the form to create account</small>
                            <form class="input-icons mt-5">
                                <img src="./img/fullname.png" class="img img-fluid icon1" alt="">
                                <input type="text" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                                <img src="./img/at-sign.png" class="img img-fluid icon2" alt="">
                                <input type="email" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="hello@vendor.com">
                                <img src="./img/key-password.png" class="img img-fluid icon3" alt="">
                                <input type="password" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">
                                <img src="./img/key-password.png" class="img img-fluid icon4" alt="">
                                <input type="password" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="confirm password">
                                <div class="form-group form-check mt-2">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label check" for="exampleCheck1">I agree to the <span class="check-link">Terms </span>and<span class="check-link"> Conditions</span></label>
                                </div>
                                <div class="btn-group mt-5" role="group" aria-label="Basic example">
                                        <button type="submit" class="btn" style="width:150px;">Register<i class="fa fa-arrow-right ml-3" style="color:#5e6cf1"></i></button>
                                        
                                </div>
                                
                            </form>
                            
                    </div>
            </div>
        </div>  
    </div>
</body>