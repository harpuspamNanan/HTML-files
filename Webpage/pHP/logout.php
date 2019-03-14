<?php
   session_start();
   session_unset();                  // DELETES only the Variables but session exists.(Data gets TRUNCATED)
   session_destroy();               // DESTROYS the entire seesion and id from browser

?>   