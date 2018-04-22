
<?php

if (empty($_SESSION)) {
    echo '<h1>You have now been logged out</h1>';
    
}
 else {
    echo '<h1>You are still still logged in</h1>';
}

