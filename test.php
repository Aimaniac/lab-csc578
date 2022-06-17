<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .container{
            margin-top: 30px;
        }
    </style>
</head>
<h1>
    Signup
</h1>
<body>
<div class="container">
    
        <div>
            <label for="username">Enter your username : </label>
            <input type="text" name="username" id="username">
        </div>
 <div class="container">
        <div>
            <label for="email">Enter your email :</label>
            <input type="email" name="email" id= "email">
        </div>  

 <div class="container">
        <div>
            <label for="password">Enter your password :</label>
            <input type="password" name="password" id= "password" >
            <input type="checkbox" id= "checkbox" onclick="togglePass()">
            <label for="checkbox">Show Password</label><br>
            <button id= "check" onClick= "checkPass()">Check Password </button>


        </div> 

        <div id= "feedback">
            
        </div>
    
</div>  

<script>
function togglePass() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function checkPass(){

    var password = document.getElementById("password").value;
    //alert(password);

    const options = {
	method: 'POST',
	headers: {
		'content-type': 'application/json',
		'X-RapidAPI-Key': '164e534978mshad07a6c0e13f718p14629ajsn1466bdad8aed',
		'X-RapidAPI-Host': 'strong-password-generator-and-checker.p.rapidapi.com'
	},
	body: '{"password":"'+password+'"}'
};

fetch('https://strong-password-generator-and-checker.p.rapidapi.com/api/password_check', options)
	.then(response => response.json())
	.then(response => {
        console.log(response)
        var feedback = response.password.value;
        document.getElementById('feedback').innerHTML= "Password is " + feedback;
         
    }
        )
        .catch(err => console.error(err));
}
</script>
    
</body>
</html>



