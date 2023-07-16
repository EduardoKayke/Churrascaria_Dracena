## Comandos no terminal.

Aqui temos o sass, o arquivo de origem (_cdn/scss/style.scss) e pra onde ele vai (_cdn_css_style.css)
- sass _cdn/scss/style.scss _cdn/css/style.css

Outra alternativa, mais fácil, para passar todos os arquivos.
- sass _cdn/scss/:_cdn/css/

Agora vamos deixar de maneira automatica, para não ficar passando comandos no terminal...
O sass vai ficar vendo as modificações e atualizando os arquivos...
- sass _cdn/scss/:_cdn/css/ --watch

Agora vamos usar a versão final. Que é comprimida...
- sass _cdn/scss/:_cdn/css/ --watch --style=compressed

## Organizando arquivos. 

Vamos criar uma pasta reset e o arquivo _reset.scss.
Agora importe no style.scss, coloque @import "reset/reset"; A pasta e o arquivo.

Podemos criar uma pasta fold, onde fica as dobras do site, colocando 
as dobras, _header.scss por exemplo...

Obs: Sempre comece com underline, exemplo. _header.scss
Esse é o padrão do sass...
