<?php
    class Member {
	    private $name;

        //세터
        public function setName($name) {
		    $this->name = $name;
	    }
        //게터
	    public function getName() {
		    return $this->name;
	    }
    }

    $mem = new Member();

    $mem->setName("김정호");
    echo "이름 : ".$mem->getName();
?>
