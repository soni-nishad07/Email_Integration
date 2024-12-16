<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Dine Resturant</title>
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/style.css" type="text/css" rel="stylesheet" />
    <script src="js/bootstrap.bundle.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
    function validate() {
        var name = document.getElementById("name").value;
        var emailaddress = document.getElementById("email").value;
        var subject = document.getElementById("subject").value;
        var message = document.getElementById("message").value;


        if (name == "") {
            alert("Please fill the name field");
            return false;
        } else if (!isNaN(name)) {
            alert("only character allowed");
            return false;
        } else if (email == "") {
            alert("Please fill email field");
            return false;
        } else if (email.indexOf('@') <= 0) {
            alert(" @ Invalid Position");
            return false;
        } else if ((email.charAt(email.length - 4) != '.') && (email.charAt(rmail.length - 4) !=
                '.')) {
            alert(" **  . Invalid Position!!")
            return false;
        } else if (subject == "") {
            alert("Please fill tell any subject field");
        } else(message == "") {
            alert("Please fill tell any message field");
        }

    }
    </script>
</head>

<center>

    <body>

        <h3>Contact Form</h3>

        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validate()" method="post" enctype="multipart/form-data">
            Name :
            <input type="text" placeholder="Name" id="name" name="name"  class="form-control name" >
            <br><br>
            Email :
            <input type="email" id="email" name="email" placeholder="Enter your Email" class="form-control" >
            <br><br>
            Subject :
            <input type="text" name="subject"  id="subject" placeholder="Subject">
            <br><br>
            Message :
            <textarea class="form-control" name="message"  id="message" placeholder="Type Message" ></textarea>
            
            <br><br>


            <input type="submit" value=" Submit " name="submit" id="submit"  class=" buttons">
           </form>


    </body>

</center>

</html>


<?php
if(isset($_POST['submit']))
{
    $mailto = "nishadsoni104@gmail.com";
    $from = $_POST['email'];
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    $htmlcontent = "<h2>Email request recieve</h2>
    <p>Name :  " .$name . "</p>
    <p>Email :  " .$from . "</p>
    <p>Subject :  " .$subject . "</p>
    <p>Message :  " .$message . "</p>
    ";

    $headers = "From : " . $name  .  "<" . $from . ">"  ; 
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
  
    
   $result = mail($mailto, $subject, $htmlcontent, $headers);

    if($result)
    {
        $success = "The message was send!";
    }
    else{
        $failed = "Errors messsage was not send, Tray again later";
    }
 
 }

?>