<?php
    class linkcss{
        private $link;
        
        public function __construct($sLink) {
            $this->link = $sLink;
        }
        public function linkar() {
           return "<link rel='stylesheet' href=css/{$this->link}.css>";
        }
    }

