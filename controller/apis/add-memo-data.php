<?php

include('./class.php');
@session_start();

echo App::add_memo_data($_REQUEST['subject'],$_REQUEST['duedate'],$_REQUEST['introduction'],$_SESSION['karibu']);

?>