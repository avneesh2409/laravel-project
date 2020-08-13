var check = false;
  $(document).ready(function(){
        $("#email").on("input", function(){
            // Print entered value in a div box
            var x=$(this).val();
var atposition=x.indexOf("@");  
var dotposition=x.lastIndexOf(".");  
var email_error = document.getElementById("email_error");
  
if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
  email_error.innerHTML = "Please enter a valid e-mail address";
  check=false;
  } 
  else{
    email_error.innerHTML = "";
    check=true;
  }
    });
    $("#mobile").on("input", function(){
        var phoneno = /^\d{10}$/;
        var x = $(this).val();
        var mobile_error = document.getElementById("mobile_error");
        if(!x.match(phoneno))
  {
    mobile_error.innerHTML = "Please enter a valid mobile number";
check=false;  
}  
  else{
    mobile_error.innerHTML = "";
check=true;
  }     
    });
    $("#user_submit").attr("disabled",check);
});
