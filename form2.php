<?php
if(isset ($_POST["submit"])){
    $fname = $_POST["firstname"];
    $lname = $_POST["lastname"];
    $phone = $_POST["phone number"];
    $gender = $_POST["Gender"];
    $languages = $_POST["languages"];
    $hobbies = $_POST["hobbies and talents"];
    $email = $_POST["e-mail"];
    $password = $_POST["password"];
    $retype = $_POST["retype password"];
    $additionalinfo = $_POST["additional information"];
    $terms = $_POST["terms and conditions"];
    $dob = $_POST['date of birth'];
    // dont use this for empty
    // if(fname == ""){
    // echo "<script>
    //     alert('Please check your first name!!!');
    //     location.href='index.php';
    //     </script>";
    // }elseif(lname == ""){
    //     echo "<script>
    //         alert('Please check your last name!!!');
    //         location.href='index.php';
    //         </script>";
    if(empty($fname) || empty($lname) || empty($email) || empty($password) || empty($retype) || empty($phonenumber) || empty($terms)){
        echo 'The field is empty';
    }
    // if(empty($fname)){
    //     echo "<script>
    //         alert('Please check your password!!!');
    //         location.href='index.php';
    //         </script>";

    }
    }elseif(strlen($password)<15){
        echo "<script>
            alert('Please check your password!!!');
            location.href='index.php';
            </script>";
        
    }else if(password != $retype){
        echo "<script>
            alert('Please check your password!!!');
            location.href='index.php';
            </script>";
    }
    //  $x = count($languages as $data){
    //      if($x > 3)
    //      echo "<script>
    //              alert('Please check your languages!!!');
    //              location.href='index.php';
    //             </script>";
    }else{
        foreach($languages as $data){
            echo "$data,";
            "<script>
            alert('Please check your languages!!!');
            location.href='index.php';
            </script>";
    }
    if(!preg_match("/^[a-zA-Z]*$/",$fname)){
        echo "<script>
        alert('Please check your languages!!!');
        location.href='index.php';
        </script>";
    }
    if(!preg_match("/^[0-9]*$,"$phonenumber)){
        echo"<script>
        alert('Please check your languages!!!');
        location.href='index.php';
        </script>";
    }elseif (filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo"<script>
        alert('Please check your languages!!!');
        location.href='index.php';
        </script>";   
    }
}            
        
            
        



