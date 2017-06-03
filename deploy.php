<?php
  $commands = array(
    'cd ~/dsmun17.com',
    'git pull',
    'jekyll build -d ~/public_html'
  );
  
  $output = '';
  foreach($commands AS $command){
    $tmp = shell_exec($command);
    $output .= "<span style=\"color: #6BE234;\">\$</span> <span style=\"color: #729FCF;\">{$command}\n</span>";
    $output .= htmlentities(trim($tmp)) . "\n";
  }
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>
<body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
<pre>
<?php echo $output; ?>
</pre>
</body>
</html>