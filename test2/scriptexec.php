<?php
echo "Button Click";
shell_exec("admin:admin@master1:/home/admin/Desktop/scripts/aem_env_auto1.sh");
header('Location: /test2/autodeployer.html?success=true');
?>