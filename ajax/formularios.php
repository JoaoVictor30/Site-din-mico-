<?php 
    include('../config.php');
    $asunto = array();
    $assunto = 'Nova mensagem do site';
    $corpo = '';
    foreach($_POST as $key => $value){
        $corpo.=ucfirst($key).": ".$value;
        $corpo.="<hr>";
    }
    $info = array('assunto'=>$assunto,'corpo'=>$corpo);
    $mail = new Email('vps.dankicode.com','testes@dankicode.com','gui123456','richard');
    $mail->addAdress('contato@ddankicode.com','guilherme');
    $mail->formatarEmail($info);
    //if($mail->enviarEmail()){
    // $data['sucesso'] = true;
    // }else{
    //  $data['erro'] = true;
    // }

   $data['retorno'] = 'sucesso';

    die(json_encode($data));
?>