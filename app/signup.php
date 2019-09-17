<?php
    include "../includes/functions.php";
    include "../includes/script.php";
    include "../includes/style.php";
    include "../includes/meta.php";
?>
<style>
    body{
    background-color:#e5e5e5;
}
.cont{
    width:45%;
    /* height:100%; */
    margin:10% auto;
    background-color:#ffffff;
    padding:30px;
    position:relative;
}
.input-icons img { 
    position: absolute; 
} 
        
.input-icons { 
    width: 100%; 
    margin-bottom: 10px; 
} 
        
.icon1 { 
    padding:10px 15px; 
    min-width: 40px; 
} 
.icon2 { 
    padding:20px 15px; 
    min-width: 40px; 
} 
.icon3 { 
    padding:20px 15px; 
    min-width: 40px; 
} 
.icon4 { 
    padding:20px 15px; 
    min-width: 40px; 
} 
        
.input-field { 
    width: 100%; 
    padding: 22px 40px;
    border-radius:13px;
    background-color:#f0f0f0;
    color:grey;

} 
.check{
    color:grey;
}
.check-link{
    color:#000000;
}
h1{
    color:#5e6cf1
}
.cont-sign{
    background-color:#fdfdfd;
    position:absolute;
    left:450px;
    top:73px;
    height:557px;
    width:20%;
    display:flex;
    align-items:center;
    padding-left:0px!important;
}
.cont-sign h1{
    transform:rotate(-90deg);

}
h1 a{
    font-size:16px;
    color:rgba(51,51,51,0.5);
}

@media (min-width: 320px) and (max-width: 700px) {
    body{
        background-color:#ffffff;
    }
    .cont{
        width:90%;
        /* height:100%; */
        margin:10% auto;
        background-color:#ffffff;
        padding:30px;
        position:relative;
    }
    .cont-sign{
        background-color:#fdfdfd;
        position:absolute;
        left:320px;
        top:73px;
        height:535px;
        width:20%;
        display:flex;
        align-items:center;
        padding-left:0px!important;
    }
}

</style>
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
                                <img src="../img/fullname.png" class="img img-fluid icon1" alt="">
                                <input type="text" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Full Name">
                                <img src="../img/at-sign.png" class="img img-fluid icon2" alt="">
                                <input type="email" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="hello@vendor.com">
                                <img src="../img/key-password.png" class="img img-fluid icon3" alt="">
                                <input type="password" class="form-control input-field mt-2" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="password">
                                <img src="../img/key-password.png" class="img img-fluid icon4" alt="">
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