<?php
if(isset($_COOKIE['contador'])){
    $_COOKIE['contador']++;
    
    
}
else
{
    $_COOKIE['contador'] = 0;
}

?>