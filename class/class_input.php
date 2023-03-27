<?php
    
    class input {
        private $descricao;
        private $type;
        
        public function __construct($descricao, $type) {
            $this->descricao = $descricao;
            $this->type = $type;
        }
        
        public function getDescricao() {
            return $this->descricao;
        }

        public function getType() {
            return $this->type;
        }

        public function setDescricao($descricao): void {
            $this->descricao = $descricao;
        }

        public function setType($type): void {
            $this->type = $type;
        }

        public function crialabel() {
            return "<label for={$this->descricao}>{$this->descricao}</label><br>";
        }
        
        public function criainput() {
            return "<input id={$this->descricao} type={$this->type}><br><br>";
        }
    }