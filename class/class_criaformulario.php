<?php
    class criaformulario{
        private $method;
        private $action;
        private $id;
        
        public function __construct($method, $action, $id) {
            $this->method = $method;
            $this->action = $action;
            $this->id = $id;
        }

        public function getMethod() {
            return $this->method;
        }

        public function getAction() {
            return $this->action;
        }

        public function getId() {
            return $this->id;
        }

        public function setMethod($method): void {
            $this->method = $method;
        }

        public function setAction($action): void {
            $this->action = $action;
        }

        public function setId($id): void {
            $this->id = $id;
        }

        public function abreform() {
            return "<form method={$this->method} action={$this->action} id={$this->id}>";
        }
        
        public function fechaform() {
            return "</form>";
        }
    }
