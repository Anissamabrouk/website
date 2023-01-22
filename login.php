<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "di";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(!$conn){
    echo "connection Failed" . mysqli_connect_error();
}

if(isset($_POST)&& $_POST !=[]){

    $email=$_POST["email"];
    $pwd =$_POST["pwd"];
    
    $sql="SELECT * FROM users WHERE email='$email' AND password ='$pwd'";
    
    $query =mysqli_query($conn, $sql);

    if(mysqli_num_rows($query)>0){
        session_start();
        $_SESSION['username']='di';


        header("location:index.html");


    }else{
        $error ="Login Or Password doesn't exsist";
    }
}

?>

<html>
    <head> 
         <link rel="stylesheet"  href="assets/css/login.css">
    </head>
        <body>
            <section id="reg_section">
                <div class="left">
                   <img src=" images/banner.jpg" alt=" image" />
                </div>
                <div class="right">
                    <form  method="POST">
           
           
                       <h3>Get more thnigs done with loggin platform. </h3>
                       <p>Acces to the most powerfull tool in the entire design and web industry</p>
                             
                             <label  class="input">Login </label><br>
                             <p style="color:red;"><?= (isset($error))? $error:"" ?></p>
                             <input class="inputs" type="email" placeholder="E-mail address" name="email"><br>
                             <input class="inputs" type="password" placeholder="password" name="pwd"><br>
                             <input id="btn_login" type="submit" value="Login" />
                             <a href="">forget password ?</a>
                             <a href="registre.php">Create Account</a>
                             
                             
           
                    </form>
                 </div>
              </section>
           </body>
</html>       