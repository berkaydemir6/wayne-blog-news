<?php

if(get_option('wayne_comments') == 'wordpress-comments'){
    require_once('template-parts/comments/'.get_option('wayne_comments').'.php');
  }
  else{
    require_once("template-parts/comments/wayne-comments.php");
  }

?>