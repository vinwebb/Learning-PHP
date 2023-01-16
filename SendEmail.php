<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP | Sending Email</title>
</head>
<body>
    <?php
    $emailTo = "dscottfx@gmail.com ";
    $subject = "PHP EMAIL";
    $body ="I am sending this mail to test for PHP mailing process using the manual setup.";
    $senders = "From:dscottfx@gmail.com";

    if ( mail($emailTo, $subject, $body, $senders) ) {
        echo "Mail sent successfully";
    }else {
        echo "Mail not sent";
    }


    // mail('dscottfx@gmail.com', 'Testing', 'this is a test to check localhost email', 'From: dscottfx@gmail.com');
    
    
    ?>
</body>
</html>