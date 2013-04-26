<?php

  namespace Pweb\Bundle\AccueilBundle\Utility;
  
  class StringUtil {
    static public function slugify($text){
      $text = preg_replace('/\W+/', '-', $text);
      
    }
  }

?>
