<?php
if($_GET){
    if(isset($_GET['submit'])){
        execute();
    }
}
 
    function execute()
    {
       shell_exec("ssh admin@master1 /home/admin/Desktop/scripts/aem_env_auto1.sh");
    }
    
 
?>