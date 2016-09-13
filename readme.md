# Sistema de eventos IFNMG Pirapora

Sistema desenvolvido para começar a ser usado a partir de 2016 no evento 1ª Semana de SI e ser o sistema oficial para qualquer evento que venha a ter no IFNMG Campus Pirapora

## Divisão do sistema
O sistema será dividido em 4 partes:

### Administrador Geral

Nesse módulo será feito o controle total do sistema, desde a criação dos eventos até as inscrições e emissões de certificados.


### Administrador do Evento

Nesse módulo será o feito o controle do evento individual.

### Usuario

Nesse módulo os participantes dos eventos poderam controlar todas as suas inscrições.


### API

API para alimentar um aplicativo para os participantes de inscrições



# Como Instalar
O sistema foi desenvolvido todo em Laravel. Para instalar baixe os arquivos do github e de um composer update.Configure as informações do banco de daos no arquivo config/database.php, configure as seguintes variaveis dentro do arquivo config/app.php url onde estar http://localhost coloque a url do sistema. Depois disso de um php artisan key:generate . Use o comando php artisan migrate para criar o banco de dados e depois use o comando php artisan db:seed . Será criado um usuario padrão que será o email: admin@admin.com e a senha 123456 . A url do Admin será http://url-do-sistema/admin

# Como colaborar com o projeto
Crie uma Issue ou envie um Pull Request
