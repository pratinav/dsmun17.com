<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <pre>
      <?php echo htmlentities(trim(shell_exec("~/deploy.sh"))); ?>
    </pre>
  </body>
</html>