<?php
switch ($_REQUEST["acao"]) {
  case 'inserir':
    $tittle = $_POST["tittle"];
    $description = $_POST["description"];
    $content = $_POST["content"];

    $sql = "INSERT INTO news (tittle, description, content) VALUES ('{$tittle}', '{$description}', '{$content}')";

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Notícia cadastrada com sucesso!');</script>";
      print "<script>location.href='?page=home';</script>";
    } else {
      print "<script>alert('Ocorreu um erro ao inserir notícia!');</script>";
      print "<script>location.href='?page=home';</script>";
    }
    break;
  case 'editar':
    $tittle = $_POST["tittle"];
    $description = $_POST["description"];
    $content = $_POST["content"];

    $sql = "UPDATE news SET 
      tittle='{$tittle}',
      description='{$description}',
      content='{$content}'
      WHERE
      id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Notícia editada com sucesso!');</script>";
      print "<script>location.href='?page=home';</script>";
    } else {
      print "<script>alert('Ocorreu um erro ao editar notícia!');</script>";
      print "<script>location.href='?page=home';</script>";
    }
    break;
  case 'excluir':

    $sql = "DELETE FROM news WHERE id=" . $_REQUEST["id"];

    $res = $conn->query($sql);

    if ($res == true) {
      print "<script>alert('Notícia excluida com sucesso!');</script>";
      print "<script>location.href='?page=home';</script>";
    } else {
      print "<script>alert('Ocorreu um erro ao excluir a notícia!');</script>";
      print "<script>location.href='?page=home';</script>";
    }
    break;
}
