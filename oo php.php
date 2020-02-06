<?php
class Students{
    private $id=0;
    public function setId($d){
        if($d>0)
            $this->id=$d;
        
    }
    public function getId(){
        return $this->id;
    }
}

$object=new Students();
$object->setId(1);
echo $object->getId();
?>