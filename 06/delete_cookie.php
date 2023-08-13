<?php
    setcookie("username", "", time()-3600); //이름을 ""로 하고, 만료시를 1시간 전으로 한다.

    echo "쿠키 삭제 완료!";
?>