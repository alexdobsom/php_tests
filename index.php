<?php
/* based on 
 * https://www.youtube.com/watch?v=5YaF8xTmxs4
 * https://www.youtube.com/watch?v=5YaF8xTmxs4
 */

include('./class.php');


$new = new Human("Mark");

$new->displayVar();

echo($new->showName());

$new->showEmail();

$new->showId();

?>