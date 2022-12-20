
# Msx News Test

Msx News Test é uma aplicação criada para testar os conhecimentos necessários para a entrevista de emprego na emprega Msx Contents.

Skills contidas neste projeto: Comunicação entre NewsAPI para visualização de notícias atuais brasileiras e criação de um CRUD em PHP com comunicação com banco de dados onde o usúario pode inserir suas próprias notícias, alterá-las, deletá-las e consultá-las.

**Projeto feito utilizando XAMPP!**

Os arquivos estão presentes na pasta Msx-News-Test dentro do XAMPP

*Para teste, crie uma parta dentro do repositório C:\xampp\htdocs com o nome do projeto, entre na pasta e clone este repositório.*

**Para utilização do projeto é necessário estar conectado em um bando de dados MySQL (no caso do teste foi utilizado o MySQL diretamente através do XAMPP):**

 * Abra seu banco de dados e execute a Query abaixo necessária para rodar o projeto:

 * `CREATE TABLE 'news'. ('id' INT UNSIGNED NOT NULL AUTO_INCREMENT , 'tittle' TEXT NOT NULL , 'description' TEXT NOT NULL , 'content' TEXT NOT NULL , 'inserted_at' DATETIME on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY ('id')) ENGINE = InnoDB;`

### Caso a chave da API tenha expirado, atualize a URL presente na linha 9 do arquivo listar-notícias.php com uma chave nova. É possível adquirir uma chave nova através do https://newsapi.org/
