<?php

namespace App\Library;

class NewsPageClass {
    private $header;
    private $desc;

    function __construct($desc) {
      $this->header = substr($desc, 0, \config('values.news_title_symbols'));
      $this->desc = $desc;
    }

    function getHeader(){
      return $this->header;
    }
    function getDesc(){
      return $this->desc;
    }
}