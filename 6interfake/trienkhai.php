<?php
interface Bird{
   function fly();
   function sing();
}
interface Giacam extends Bird{
    function gay();
}
interface fish{
    function swimning();
}

class gacon implements Giacam, fish{
    function fly(){

    }
    function sing(){
        
    }
    function gay(){
        
    }
    function swimning(){
        
    }
}


?>