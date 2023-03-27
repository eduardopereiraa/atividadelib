<?php
// Iniciar a sessão
    session_start();
    
    class session {
        private $titulo;
        private $resumo;
        private $data;

        public function getTitulo() {
            return $this->titulo;
        }

        public function getResumo() {
            return $this->resumo;
        }

        public function getData() {
            return $this->data;
        }

        public function setTitulo($titulo): void {
            $this->titulo = $titulo;
        }

        public function setResumo($resumo): void {
            $this->resumo = $resumo;
        }

        public function setData($data): void {
            $this->data = $data;
        }

        public function criasession() {
            if (!isset($_SESSION['noticias'])) {
                $_SESSION['noticias'] = array();
            // Processar o envio do formulário de notícias
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Validar os dados do formulário (por exemplo, verificar se os campos não estão vazios)
                    $titulo = $_POST[$this->titulo];
                    $resumo = $_POST[$this->resumo];
                    $data   = $_POST[$this->data];
                }
            }   
        }
        public function exibirnoticia() {
            foreach ($_SESSION['noticias'] as $noticia):
               echo "<h2>{$noticia[$this->titulo] }</h2>";
               echo "<p>= {$noticia[$this->resumo]} </p>";
               echo "<p><small>= {$noticia[$this->data]} </small></p>";
             endforeach;
            }
    }    
