function registerButton(){
    console.log("Hai");
    var name = document.getElementById('name').value;
    var email = document.getElementById('email').value;
    var password = document.getElementById('password').value;
    var date = document.getElementById('date').value;
    var age = document.getElementById('age').value;
    var contact = document.getElementById('contact').value;    
    $.ajax({
        type : "post",
        data : {name:name,email:email,password:password,date:date,age:age,contact:contact},
        url  : "register.php",
        success : function(result){
                    $('#msg').html(result);
        }
          });
//    return false;
}



// $(document).ready(function(e){
//     $('#register-button').click(function(){
//         var name = $('#name').val();
//         var email = $('#email').val();
//         var password = $('#password').val();
//         var date = $('#date').val();
//         var age = $('#age').val();
//         var contact = $('#contact').val();
//         $.ajax({
//             type : 'post',
//             data : {name:name,email:email,password:password,date:date,age:age,contact:contact},
//             url  : "register.php",
//             success : function(result){
//                 $('alert').show();
//                 $('#show').html(result);
//             }
//         });
//     })
// })