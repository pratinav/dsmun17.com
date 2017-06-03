<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body style="background-color: #000000; color: #FFFFFF; font-weight: bold; padding: 0 10px;">
    <pre>
      <?php echo htmlentities(trim(shell_exec("~/deploy.sh"))); ?>
    </pre>
  </body>
</html>