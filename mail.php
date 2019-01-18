<?php

if(isset($_POST['submit'])) {

    $msg = 'Name: ' .$_POST['name'] ."\n"
        .'Email: ' .$_POST['email'] ."\n"
        .'Message: ' .$_POST['message'];

    mail('stepan.arsentjev@gmail.com', 'Testing my portfolio', $msg);

    header("Location: http://arsentjev.com/");

} else {
    exit(0);
}

?>