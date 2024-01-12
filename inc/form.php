<?php
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email = $_POST['email'];

$errors = [
    'firstNameError'=>'',
    'lastNameError'=>'',
    'emailErorr'=>'',
];


if (isset($_POST['submit'])){

   // Check the first name
       if(empty($firstName)){
        $errors['firstNameError']= 'Please enter first name';

        // Check the last name
       } if(empty($lastName)){
        $errors['lastNameError']= 'Please enter last name name';

        // Check the email
       }if(empty($email)){
        $errors['emailErorr']= 'Please enter email';

       } 
       elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors['emailErorr']= 'Please enter corect email';
       }
       
        // Check if thers no errors
        if(!array_filter($errors)){
            $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
            $lastName =  mysqli_real_escape_string($conn,$_POST['lastName']);
            $email =     mysqli_real_escape_string($conn,$_POST['email']);

            $sql = "INSERT INTO users(firstName, lastName , email)
            VALUES ('$firstName','$lastName','$email')";

            if(mysqli_query($conn, $sql)){
           header('location:'. $_SERVER['PHP_SELF']);

            }else{ 
             echo 'error'.mysqli_error($conn);
             } 

        }       
       }



/*


      //echo $firstName . ' ' . $lastName . ' ' . $email;
      $sql = "INSERT INTO users(firstName, lastName , email)
       VALUES ('$firstName','$lastName','$email')";


*/