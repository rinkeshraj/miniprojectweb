<?php
   session_start();

 
   $username = "";
   $password = "";
 
   $errors = array();


   $db = mysqli_connect('localhost','root','','match');

   if(isset($_POST['register']))
   {
       $firstname = $_POST['firstname'];
       $lastname = $_POST['lastname'];
       $username = $_POST['username'];
       $email = $_POST['email'];
       $password = $_POST['password'];
       $cpassword = $_POST['cpassword'];


       if (empty($firstname))
       {
           array_push($errors,"Firstname is reqired");
       }
       if (empty($lastname))
       {
           array_push($errors,"Lastname is reqired");
       }
       if (empty($username))
       {
           array_push($errors,"Username is reqired");
       }
       if (empty($email))
       {
           array_push($errors,"email is reqired");
       }
       if (empty($password))
       {
           array_push($errors,"Password is reqired");
       }
       if (empty($cpassword))
       {
           array_push($errors,"Password is reqired");
       }
       if($password != $cpassword)
       {
           array_push($errors,"The password do not match with confirm password");
       }

       if(count($errors)==0)
       {
           $password = md5($password);
           $sql="INSERT INTO users(firstname, lastname, username, email, password, cpassword) VALUES('$firstname','$lastname','$username','$email','$password','$cpassword')";
           mysqli_query($db,$sql);
           $_SESSION['username']=$username;
           $_SESSION['success']="You are now logged in";
           header('location: pre.php');
       }
   }

   if(isset($_POST['login']))
   {
       $username = $_POST['username'];
       $password = $_POST['password'];

       if (empty($username))
       {
           array_push($errors,"Username is reqired");
       }
       if (empty($password))
       {
           array_push($errors,"Password is reqired");
       }

       
       if(count($errors)==0)
       {
           $password = md5($password);
           $query="SELECT * FROM users WHERE username='$username' AND password='$password'";

           $result=mysqli_query($db,$query);
           if(mysqli_num_rows($result)==1)
           {
            $_SESSION['username']=$username;
            $_SESSION['success']="You are now logged in";
            header('location: pre.php');
           }
           else
           {
               array_push($errors,"wrong username/password combination");
            //    header('location: form2.pre');
           }
          
       }
   }   
   if(isset($_GET['logout']))
   {
       session_destroy();
       unset($_SESSION['username']);
       header('location: form2.php');
   }
?>