<?php
session_start();
include_once('index.html');
if(isset($_REQUEST['message'])=="done")
{
    echo " Thank you for your message. I will get back to you soon! ";
}

?>
<link rel="stylesheet" href="css/styles2.css">
