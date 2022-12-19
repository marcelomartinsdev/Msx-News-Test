<div class="news-container">
  <h1>Nova Notícia</h1>
  <form action="?page=salvar" method="POST">
    <input type="hidden" name="acao" value="inserir">
    <div class="new-tittle-container">
      <label for="tittle">Título da Notícia</label>
      <input type="text" name="tittle" />
    </div>
    <div class="new-description-container">
      <label for="description">Descrição da Notícia</label>
      <input type="text" name="description" />
    </div>
    <div class="new-content-container">
      <label for="content">Conteúdo da Notícia</label>
      <input type="text" name="content" />
    </div>
    <div class="submit-btn-container">
      <button type="submit" id="submit-btn">Enviar</button>
    </div>
  </form>
</div>