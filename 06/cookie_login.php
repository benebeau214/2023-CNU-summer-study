<?php
    // 24*60*60 = 1일, 30일 후 쿠키 만료 
    setcookie("userid", "hong123", time() + 24*60*60 * 30 );
    
    echo "<script>
            location.href = 'cookie_page.php'; //cookie_page.php로 바로 넘어감
        </script>";
?>