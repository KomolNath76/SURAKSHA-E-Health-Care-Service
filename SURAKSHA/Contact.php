<?php
if(isset($_POST['submit']))
{
$name=$REQUEST['name'];
$visitor=$REQUEST['email'];
$sub=$REQUEST['subject'];
$message=$REQUEST['message'];


if (empty($name) || empty($visitor) || empty($message)){

    echo "Please fill all the fields";
}
else{
    mail("mritunjoychakraborty32@gmail.com","SURAKSHA Message",$message,"From:$name<$visitor>");
    echo"<script type='text/javascript'>alert('your message sent successfully '); window.history.log(-1);
    </script>";
}
}

?>