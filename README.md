# Msx-News-Test
Teste feito a partir de entrevista de emprego na MSX Contents

Arquivos presentes na parte Msx-News-Test dentro do XAMPP
Projeto feito utilizando XAMPP!

Para teste, crie uma parta dentro do repositório C:\xampp\htdocs com o nome do projeto, entre na pasta e clone este repositório.

Para utilização do projeto é necessário estar conectado em um bando de dados MySQL (no caso do teste foi utilizado o MySQL diretamente através do XAMPP)

Abra seu banco de dados e execute a Query abaixo necessária para rodar o projeto:

CREATE TABLE `news`. (`id` INT UNSIGNED NOT NULL AUTO_INCREMENT , `tittle` TEXT NOT NULL , `description` TEXT NOT NULL , `content` TEXT NOT NULL , `inserted_at` DATETIME on update CURRENT_TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP , PRIMARY KEY (`id`)) ENGINE = InnoDB;
