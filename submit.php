<?php
$to_email  = "pratinavbagla@gmail.com";

$name = check_input($_POST['name'], "No name entered");
$subject = "New contact form submission!";
$email = check_input($_POST['email']);
$submission = check_input($_POST['message'], "No message entered");

if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

$message = "New contact form submission at dsmun17.com

Name: $name
E-mail: $email

Message:
$submission

End of message
";

mail($to_email, $subject, $message);

header('Location: /thanks/');
exit();

function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Error:</b><br/>
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>