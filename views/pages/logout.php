
<?php

if (empty($_SESSION)) {
    echo '<h1>You have now been logged out.</h1>';
    
}
 else {
    echo 'You are still still logged in';
}

