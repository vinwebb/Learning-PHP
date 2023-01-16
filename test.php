<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h2>Simple Form</h2>

    <?php

        use PHPMailer\PHPMailer\PHPMailer;
        use PHPMailer\PHPMailer\Exception;

        require 'PHPMailer/src/Exception.php';
        require 'PHPMailer/src/PHPMailer.php';
        require 'PHPMailer/src/SMTP.php';


        function sendEmail($Name, $Email, $Website, $Comments) {
            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                
                $mail->isSMTP();                                            
                $mail->Host       = 'smtp.gmail.com';                     
                $mail->SMTPAuth   = true;                                   
                $mail->Username   = 'skgwebb01@gmail.com';                     
                $mail->Password   = 'vssrscfyvafgvxwy';              //lznnrrvfiqhlesmo                
                $mail->SMTPSecure = 'ssl';            
                $mail->Port       = 465;                                    
            
                //Recipients
                $mail->setFrom('skgwebb01@gmail.com');
                $mail->addAddress($Email);               
            
                //Content
                $mail->isHTML(true);                                  
                $mail->Subject = 'Here is the subject';
                $mail->Body    = "my name is " .$Name. ", with email: " .$Email. ", my website address is ". $Website . " and most people comments from my website review are " . $Comments ."</b>";
                $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
            
                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }


        if ( isset($_POST["submit"]) ) {

            $Name = $_POST['name'];
            $Email = $_POST['email'];
            $Website = $_POST['website'];
            $Comments = $_POST['comment'];


            // echo "My Name is :" .$_POST['name'] . "</br>";
            // echo "My Email is :" .$_POST['email'] . "</br>";
            // echo "You can reach me on my website via :" .$_POST['website'] . "</br>";
            // echo "Please do leave your comment below :" .$_POST['comment'] . "</br>";

            sendEmail("$Name", "$Email", "$Website", "$Comments");

        }
    
    
    ?>
    <br>


    <form action="test.php" method="POST">
        <legend>Fill out the required information below</legend>
        <fieldset>
            <label for="name">Full Name</label></br>
            <input type="text" name="name" class="name" id="name"></br><br>

            <label for="email">Email</label></br>
            <input type="email" name="email" class="email" id="email"></br></br>

            <label for="website">website</label></br>
            <input type="text" name="website" class="website" id="website"><br></br>

            <label for="comment">Comments</label></br>
            <textarea name="comment" class="comment" id="comment" cols="25" rows="5"></textarea><br></br>

            <button type="submit" name="submit" class="submit" id="submit">Subscribe Now</button>
        </fieldset>
    </form>
</body>
</html>