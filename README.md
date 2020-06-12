## Realtime Laravel

Esta é uma aplicação em realtime com Laravel, construida para praticar sobre o uso desta tecnologia

**Recursos**  
- Laravel echo
- pucher
- socket.io
- Vue js
- sqlite
- realtime
- Broadcasting

## Pusher e Socket.io

## About

Esta aplicação esta dividida em duas partes : 
- 1: caminho '/' mostra um pagina onde é exibido mensagens
- 2: caminho '/messages' nesta rota é possivel fazer o cadastro de mensagens informando o title, body e user_id

o campo user_id é o id de um usuario do sistema.

quando a mensagem é cadastrada no sistema é informado um usuario.

este usuario informado se tiver na rota '/' sera mostrado a mensaagem q foi enviada para ele.


Apesar de ser simples esta aplicação serve de base para implementações maiores, como um chat, sistema de notificação, geração de relarorios com base em eventos entre outros.


## Funcionamento
Esta aplicação é baseada no Servdor pusher e usa como cliente o Socket.io


## Como rodar esse projeto

- [x] clonar este repositorio
- [ ] entrar na pasta do projeto
```bash
https://github.com/jos3duardo/laravel-realtime.git && cd laravel-realtime
```
```bash
composer install && npm install
```

- [ ] configurar banco de dados
>comandos    
- [ ] php artisan migrate
- [ ] php artisan serve
- [ ] laravel-echo-server start
>opcional
-[ ] npm run watch

#### Observações
é necessario a instalação do sqlite
```bash
npm install sqlite3 -g
```
