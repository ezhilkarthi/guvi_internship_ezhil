function sign(){
    console.log("Hai");
    var email = document.getElementById('signEmail').value;
    var password = document.getElementById('signPassword').value;
    
    $.ajax({
        type : "post",
        data : {email:email,password:password},
        url  : "sign.php",
        success : function(result){
                    $('#msg').html(result);
        }
          });
//    return false;
}