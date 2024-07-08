<?php
require_once("includes/db_connect.php");
include_once("Templates/head.php");
include_once("Templates/nav.php");

$messageId=mysqli_real_escape_string($conn, $_GET["messageId"]);

$spot_msg = "SELECT * FROM `messages` WHERE messageId = '$messageId' LIMIT 1";
$spot_msg_res = $conn->query($spot_msg);
$spot_msg_row = $spot_msg_res->fetch_assoc();

if(isset($_POST["update_message"])){
    $fn = mysqli_real_escape_string($conn, $_POST["fullname"]);
    $mail = mysqli_real_escape_string($conn, $_POST["email_address"]);
    $subject = mysqli_real_escape_string($conn, $_POST["subject_line"]);
    $message = mysqli_real_escape_string($conn, $_POST["client_message"]);
    $messageId = mysqli_real_escape_string($conn, $_POST["messageId"]);

    $update_message = "UPDATE messages SET sender_name='$fn', sender_email='$mail', subject_line='$subject', text_message='$message' WHERE messageId='$messageId' LIMIT 1";

    if ($conn->query($update_message) === TRUE) {
        header("Location: view_messages.php");
        exit();
    } else {
        echo "Error: " . $update_message . "<br>" . $conn->error;
    }
}
?>

<h1><span>Update</span> Message</h1> 
<div class="row">
    <div class="content">
    <h1>Update Message</h1>
    <div class="contact form">
                    <form action="<?php print htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="POST" class="contact form"></form>
                    <h3>SEND US A MESSAGE</h3>
                    <form>
                     <div class="formBox">
                        <div class="row50">
                        <div class="inputBox"><!--Input box for users name-->
                            <span><i class="fa-solid fa-user" style="margin-right: 5px;"></i>Full Name</span>
                            <input type="text" id= "fn" placeholder = "Jane Doe" name="full name" required>
                        </div>
                        <div class="inputBox"><!--Input box for user's email-->
                            <span><i class="fa-solid fa-envelope" style="margin-right: 5px;"></i>Email</span>
                            <input type="email" id = "em" placeholder="janedoe@email.com" name = "email_address" required>
                        </div>
                        </div>


                        <div class="row50">
                        <div class="inputBox"><!--Input box for user's phone number-->
                            <span><i class="fa-solid fa-phone" style="margin-right: 5px;"></i>Mobile no.</span>
                            <input type="text" id = "phone" placeholder="+254712345678" name = "phone_number" required>
                        </div>
                        </div>

                        <div class="row100">
                        <div class="inputBox"><!--Input box for user's message-->
                            <span><i class="fa-solid fa-message" style="margin-right: 5px;"></i>Message</span>
                            <textarea placeholder="Type your message here"></textarea>
                        </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">
                                <input type="submit" value="Send">
                            </div>
                        </div>
                     </div>
                    </form>
</div>
</div>