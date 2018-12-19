<?php

require_once 'vendor/autoload.php';

$acao = $_GET['acao'];

switch ($acao) {
    case 'logar-se':
        $email = ($_POST['email']);
        $senha = ($_POST['senha']);

        if (fazer_login($email, $senha)) {
            $_SESSION['logado'] = array(
                'email' => fazer_login($email, $senha)->email,
                'status' => 1
            );
            redireciona('panel.php');
        }
        
        else{
            redireciona('index.php?ErroDadosIncorretos');
        }

        break;

    case 'add_novo_post':

        $ext = strtolower(substr($_FILES['imagem']['name'], -4)); //Pegando extensão do arquivo
        $new_name = md5(date("Y.m.d-H.i.s")) . $ext; //Definindo um novo nome para o arquivo
        $dir = 'uploads/';

        if(move_uploaded_file($_FILES['imagem']['tmp_name'], $dir . $new_name)) {
            $titulo = $_POST['titulo'];
            $post = $_POST['post'];
            $imagem = $new_name;

            if(insert_post($titulo, $post, $imagem)) {
                redireciona('panel.php?menssagem=ok');
            }else {
                redireciona('panel.php?menssagem=error');
            }
        }

           
        
        break;
         case 'editar_post';
            $id = $_POST['id'];   
            $titulo = $_POST['titulo'];
            $post = $_POST['post'];
            $imagem = $_POST['imagem'];
            editar_post($titulo, $post, $imagem,$id);
           redireciona('panel.php');
            
         break;

         case 'deletar';
            if (delete($_GET['id']) ){
                redireciona('panel.php');
            }
         break;
    
    default:
        # code...
        break;
}