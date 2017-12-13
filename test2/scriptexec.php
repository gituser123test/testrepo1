<?php
if(isset($_POST['Submit'])) {
shell_exec("ssh admin@master1 /home/admin/Desktop/scripts/aem_env_auto1.sh");
}
?>