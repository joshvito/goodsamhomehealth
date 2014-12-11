<?php
  if(isset($_POST['submit'])) {
    $to = "info@goodsamaritancaregivers.com</a>";
    $re = "Feedbackfromcontactpage";

    $name_field = $_POST['name'];
    $phone_field = $_POST['phone'];
    $email_field = $_POST['email'];
    $message = $_POST['message'];

    $body = "From: $name_field\n E-Mail: $email_field\n Message: $message\n Phone: $phone_field\n";

    if(mail($to,$re,$body)){
      echo "
        <h1>Thank You!</h1>
        <p>
         Data has been submitted to $to! <br />
         We appreciate your email and we will respond to you as soon as possible. <br />
          </p> ";
    }else{
      echo "
        <h1>Error! Email failed to send.</h1>
        <p>
          Error in sending data.
        </p>";
    } // END ELSE of IF(mailto(...))
  }else{ // END IF(isset(...)) / Start ELSE
    echo "
      <h1>Error! Information not valid or not obtained.</h1>
      <p>
        There was an error in obtaining your information. Data was not sent.
        AGAIN WHATEVER YOU WANT TO PUT IN HERE...
      </p>";
  } // END ELSE of IF(isset(...))
?>