<?php
    include_once 'autoload/autoload.php';
    $oLink = new linkcss('style');
    echo $oLink->linkar();
    
    $oSession = new session();
    $oSession->criasession();
    
    $oCriaFormulário = new criaformulario('post', 'class/class_session', 'form');
    echo $oCriaFormulário->abreform();
    
    $oInputTitulo    = new input('Título', 'text');
    echo $oInputTitulo->crialabel();
    echo $oInputTitulo->criainput();
    $oInputResumo    = new input('Resumo', 'text');
    echo $oInputResumo->crialabel();
    echo $oInputResumo->criainput();        
    $oInputImagem    = new input('URL Imagem', 'text');
    echo $oInputImagem->crialabel();
    echo $oInputImagem->criainput();        
    $oInputDataPubli = new input('Data Publicação', 'text');
    echo $oInputDataPubli->crialabel();
    echo $oInputDataPubli->criainput();  
    $oInputButton    = new input('Enviar', 'submit');
    echo $oInputButton->criainput();
    
    echo $oCriaFormulário->fechaform();
    
    echo $oSession->exibirnoticia();