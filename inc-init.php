<?php
// Initialisations and Functions
function active_state($current_page, $check) {
  if ($current_page == $check) {
    print 'active';
  }
}

error_reporting(0);

function check_selection($filenav) {
  $filename = str_replace('.php', '', basename($_SERVER['PHP_SELF']));
  if ($filenav == $filename) {
    echo " class=\"active\"";
  }
}

?>