<?php
// variable settings
$name= $_REQUEST['Name'];
$email= $_REQUEST['Email'];
$message= $_REQUEST['Message'];
$subject= $_REQUEST['Subject'];

// check input fields
if(empty($name) || empty($email) || empty($message) || empty($subject){
    echo "Please fill all the fields";
}
else{
    mail("sumankumar14963@gmail.com","portfolio message",$message,"from: $name <$email>");

    echo  " <script type='text/javascript'>alert('Your message sent succesfully');
    window.history.go(-1);
    </script>";
}

?>
