<?php 
include_once "tema_header.php"; ?>

<?php 

if(list_post_all()){
foreach (list_post_all() as $value): 

?>

    <h1><?php  echo $value->titulo;?></h1>
    <p><?php echo $value->post; ?></p>
    <img width="300" src="<?php echo "uploads/".$value->imagem; ?>" alt="">

    <button><a href="form_edit_post.php?id=<?php echo $value->id; ?>">Editar</a></button>
    <button><a href="processa.php?id=<?php echo $value->id; ?>&acao=deletar">Deletar</a></button>

<?php 
endforeach; 
}else {
    
}
?>


<?php include_once "tema_footer.php"; ?>