<?php
$sql = "SELECT * FROM news WHERE id=" . $_REQUEST["id"];
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<div class="news-container">
  <h1>Editar Notícia</h1>
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="editar">
    <input type="hidden" name="id" value="<?php print $row->id; ?>">
    <div class="new-tittle-container">
      <label for="tittle">Título da Notícia</label>
      <input type="text" name="tittle" value="<?php print $row->tittle; ?>" />
    </div>
    <div class="new-description-container">
      <label for="description">Descrição da Notícia</label>
      <input type="text" name="description" value="<?php print $row->description; ?>" />
    </div>
    <div class="new-content-container">
      <label for="content">Conteúdo da Notícia</label>
      <input type="text" name="content" value="<?php print $row->content; ?>" />
    </div>
    <div class="submit-btn-container">
      <button type="submit" id="submit-btn">Enviar</button>
    </div>
  </form>
</div>