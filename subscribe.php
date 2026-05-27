<?php

if(isset($_POST['subscribe'])){

$email = $_POST['email'];

$to = "abalekepromise1@gmail.com";

$subject = "New Newsletter Subscription";

$message = "New Subscriber: " . $email;

$headers = "From: website@mefodi.com";

if(mail($to, $subject, $message, $headers)){

echo "

<script>

alert('Subscribed Successfully');

window.history.back();

</script>

";

}else{

echo "

<script>

alert('Subscription Failed');

window.history.back();

</script>

";

}

}

?>