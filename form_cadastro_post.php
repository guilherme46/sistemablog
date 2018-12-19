<?php 

include_once "tema_header.php";
   verifyForm();
?>


   <form action="processa.php?acao=add_novo_post" method="POST" enctype="multipart/form-data">
  <div class="group">
    <input type="text" name="titulo" required>
    <label>Título da Postagem</label>
  </div>
  <div class="textarea">
    <input type="text" name="post" placeholder="texto" required>
    <label>Texto</label>
  </div>
  <div class="group">
    <input type="file" name="imagem" placeholder="Ar" required>
  </div>
  <button type="submit">Publicar</button>
</form>




<?php include_once "tema_footer.php"; ?>