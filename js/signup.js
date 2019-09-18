$('#mainPassword, #confirmPassword').on('change', function(){
    if($('#mainPassword').val() == $('#confirmPassword').val()){
        let props = {
            "display": "block",
            "background": "#5ECCF1",
            "color": "#fff"
        }
        $(".error-box").css(props).html("Passwords Match");
        document.getElementById("submit").disabled = false;
    }else{
        $(".error-box").css("display", "block").css("background", "").html("Passwords do not match");
        document.getElementById("submit").disabled = true;
    }
})




