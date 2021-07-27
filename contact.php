<?php
// variable settings
$name= $_REQUEST['Name'];
$email= $_REQUEST['Email'];
$message= $_REQUEST['Message'];

// check input fields
if(empty($name) || empty($email) || empty($message)){
    echo "Please fill all the fields";
}
else{
    mail("sumankumar14963@gmail.com","portfolio message",$message,"from: $name <$email>");

    echo  " <script type='text/javascript'>alert('your message sent succesfully');
    window.history.go(-1);
    </script>";
}

?>