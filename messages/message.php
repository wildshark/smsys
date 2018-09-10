<?php

$userID = $_SESSION['user-id'];

$sql = "SELECT * FROM `message` WHERE userID ='$userID' LIMIT 3";
$result = $conn->query();
while($r=$result->fetch_assoc()){

    echo"
        <li>
            <a href='#' class='clearfix'>
                <img src='template/assets/images/avatars/avatar2.png' class='msg-photo' alt='Kate's Avatar' />
                <span class='msg-body'>
                    <span class='msg-title'>
                        <span class='blue'>Kate:</span>
                            {$r['message']}
                    </span>

                    <span class='msg-time'>
                        <i class='ace-icon fa fa-clock-o'></i>
                        <span>1:33 pm</span>
                    </span>
                </span>
            </a>
        </li>
    ";
}

?>

