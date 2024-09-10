function valid(){
    if(document.myform.firstname.value==""){
        document.getElementById("output").innerHTML="Enter Your First Name";
        return false;
    }

    else if(document.myform.firstname.value.length<3){
        document.getElementById("output").innerHTML="Use atleast 3 letters";
        return false;
    }

    else if(document.myform.lastname.value==""){
        document.getElementById("output").innerHTML="Enter Your Last Name";
        return false;
    }

    else if(document.myform.lastname.value.length<4){
        document.getElementById("output").innerHTML="Use atleast 4 letters";
        return false;
    }

    else if(document.myform.username.value==""){
        document.getElementById("output").innerHTML="Enter Your User Name";
        return false;
    }

    else if(document.myform.username.value.length<4){
        document.getElementById("output").innerHTML="Use atleast 4 letters";
        return false;
    }

    else if(document.myform.email.value==""){
        document.getElementById("output").innerHTML="Enter Your Email";
        return false;
    }

    else if(document.myform.phone.value==""){
        document.getElementById("output").innerHTML="Enter Your Phone No";
        return false;
    }

    else if(document.myform.phone.value.length<10){
        document.getElementById("output").innerHTML="Number must be 10-digits";
        return false;
    }

    else if(document.myform.password.value==""){
        document.getElementById("output").innerHTML="Enter Your Password";
        return false;
    }

    else if(document.myform.password.value.length<8){
        document.getElementById("output").innerHTML="Password must be 8-digits";
        return false;
    }

    else if(document.myform.confirm.value==""){
        document.getElementById("output").innerHTML="Enter Your Confirm Password";
        return false;
    }

    else if(document.myform.confirm.value!==document.myform.password.value){
        document.getElementById("output").innerHTML="Password didn't matched";
        return false;
    }

   else if(document.myform.gender.value==""){
    document.getElementById("output").innerHTML="Select Your Gender";
    return false;
   }

}