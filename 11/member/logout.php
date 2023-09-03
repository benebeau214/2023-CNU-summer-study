<?php
  //세션을 해제한다.
  session_start();
  unset($_SESSION["userid"]);
  unset($_SESSION["username"]);
  
  echo("
       <script>
          location.href = 'index.php';
         </script>
       ");
?>