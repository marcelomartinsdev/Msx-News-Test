
<?php
$sql = "SELECT * FROM news";

$res = $conn->query($sql);

$qtd = $res->num_rows;

$url = 'https://newsapi.org/v2/top-headlines?sources=google-news-br&apiKey=37a1904a370d4a199752fbdd9be156d4';
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_USERAGENT, 'msx-news');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch));


if ($qtd > 0) {
  while ($row = $res->fetch_object()) {


    print "<section class='news-section'>";
    print "<div class='tittle-container'>";
    print "<h3 id='tittle'>$row->id <br></br>'$row->tittle'</h3>";
    print "</div>";
    print "<div class='published-at-container'>";
    print "<p id='published-at'>Publicado em: $row->inserted_at</p>";
    print "</div>";
    print "<div class='description-container'>";
    print "<p id='description'>$row->description</p>";
    print "</div>";
    print "<div class='text-container'>";
    print "<p id='text'>$row->content</p>";
    print "</div>";
    print "</section>";
    print "<div class='button-container'>";
    print "<a href='?page=novo'><button id='add-news-btn'>Adicionar Noticia</button></a>";
    print "<button id='add-news-btn' onclick=\"location.href='?page=editar&id=" . $row->id . "';\" >Editar Notícia</button>";
    print "<button id='add-news-btn' onclick=\"if(confirm('Tem certeza que deseja excluir a noticia?')){location.href='?page=salvar&acao=excluir&id=" . $row->id . "';}else{false;}\">Deletar Notícia</button>";
    print "</div>";
  }
} else {
  print "<div class='button-container'>";
  print "<a href='?page=novo'><button id='add-news-btn'>Adicionar Noticia</button></a>";
  print "</div>";
}

foreach ($resultado->articles as $artigos) {
  print "<section class='news-section'>";
  print "<div class='tittle-container'>";
  print "<h3 id='tittle'>'$artigos->title'</h3>";
  print "</div>";
  print "<div class='published-at-container'>";
  print "<p id='published-at'>Publicado em: $artigos->publishedAt</p>";
  print "</div>";
  print "<div class='description-container'>";
  print "<p id='description'>$artigos->description</p>";
  print "</div>";
  print "<div class='text-container'>";
  print "<p id='text'>$artigos->content</p>";
  print "</div>";
  print "</section>";
}
