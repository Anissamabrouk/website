

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "di";


//create connection 
$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "connection Failed" . mysqli_connect_error();
}

if(isset($_POST)&& $_POST !=[]){

   if($_SERVER["REQUEST_METHOD"]=="POST"){
       $name = $_POST["fullname"];
       $email = $_POST["email"];
       $pwd = $_POST["pwd"];
      
   $sql= "INSERT INTO users (name ,email, password) VALUES ('$name', '$email', '$pwd')";
    if (mysqli_query($conn, $sql)){
       echo "Added Successfully";
   
    }else{
       echo "Error" . mysqli_error($conn);
    }
   }
}


?>

<html>

<head>
   <link rel="stylesheet" href="assets/CSS/registre.css">
</head>


<body>
   <section id="reg_section">
      <div class="left">
         <img src="images/pic01.jpg" alt="" />
      </div>
      <div class="right">
         <form method="POST">


            <h1>Get more thnigs done with loggin platform. </h1>
            <p>Acces to the most powerfull tool in the entire design and web industry</p>
            <input type="radio" value="" name="genre"><label>M<label>
                  <input type="radio" value="" name="genre"><label>F</label><br>
                  <input type="checkbox" value="" name="Appr" /><label>Appr</label>
                  <input type="checkbox" value="" name="ensg" /><label>ensg</label><br>
                  <label>Register</label><br>
                  <input name="fullname" class="inputs" type="text" placeholder="full name"><br>
                  <input name="email" class="inputs" type="email" placeholder="E-mail address"><br>
                  <input name="pwd"  class="inputs" type="password" placeholder="password"><br>
                  <input id="btn_register" type="submit" value="Register" />
                  

         </form>
      </div>
   </section>
</body>

</html>