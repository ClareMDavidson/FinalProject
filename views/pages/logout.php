
<?php

if (empty($_SESSION)) {
    echo '<h2>You have now been logged out</h2>';
    
}
 else {
    echo 'You are still still logged in';
}

