<?php
  include_once("helpers/url.php");
?>
<!DOCTYPE html>
<html lang='pt-BR' itemscope itemtype='https://schema.org/WebSite'>
    <head>
        <!-- Informações da aplicação -->
        <meta charset='UTF-8'>
        <link rel='shortcut icon' href='#'>
        <title> Churrascaria Dracena </title>
        <meta name='author' content='eduardokaykedasilva@gmail.com'>
        <meta name='description' content='Passe uma descrição do seu site.'>

        <!-- robots: Apenas para a página principal ou frontend. Use noindex e nofollow para coisas como painel de administração.-->
        <meta name='robots' content='index, follow'>

        <!-- canonical: link da própria página, importante para evitar conteúdo duplicado na internet-->
        <meta name='canonical' href='https://churrascariadracenacolombo.com.br'>

        <!-- Google+, junto com itemscope e itemtype na tag html (https://web.dev/social-discovery/)-->
        <!-- Em content use o mesmo que a tag <title> -->
        <meta itemprop='name' content='Nome da página'>
        <meta itemprop='image' content='Passe o link da imagem(1920x1080) que será apresentada nas buscas'>
        <meta itemprop='description' content='Passe uma descrição do seu site.'>
        <meta itemprop='url' content='Passe a mesma url do meta canonical.'>

        <!-- Facebook, site das tags (https://developers.facebook.com/docs/sharing/webmasters/) -->
        <meta property='og:url' content='Passe a mesma url do meta canonical'/>
        <meta property='og:type' content='article'/>
        <meta property='og:title' content='Nome da página'/>
        <meta property='og:description' content='Passe uma descrição do seu site.'/>
        <meta property='og:image' content='Passe o link da imagem(1920x1080) que será apresentada nas buscas'/>
        <meta property='og:image:width' content='1200'/>
        <meta property='og:image:height' content='630'/>
        <meta property='og:locale' content='pt_BR'/>
        <meta property='fb:app_id' content='Número do id do app, olhe a documentação, busque por fb:app_id'/>
        <meta property='article:author' content='Facebook do criador do site'/>
        <meta property='article:publisher' content='Facebook da editora do site'/>

        <!-- Twitter, site das tags (https://developer.twitter.com/en/docs/twitter-for-websites/cards/overview/summary-card-with-large-image) -->
        <meta name='twitter:card' content='summary_large_image'>
        <meta name='twitter:domain' content='Link do site da editora'>
        <meta name='twitter:creator' content='@criadorDoSite'>
        <meta name='twitter:title' content='Nome da página'>
        <meta name='twitter:description' content='Passe uma descrição do seu site.'>
        <meta name='twitter:image' content='Passe o link da imagem(1920x1080) que será apresentada nas buscas'>
        <meta name='twitter:url' content='Passe a mesma url do meta canonical'>

        <!-- Configurações para responsividade e outros navegadores... -->
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>

        <!-- link -->
        <link rel='stylesheet' href='<?= $BASE_URL ?>css/style.css'>
        <script src='#' defer></script>
    </head>
    <body>
        <header class="main_header">
            <nav class="main_header_navigation">
                <ul id="navbar">
                    <li><a href="<?= $BASE_URL ?>index.php">Churrascaria</a></li>
                    <li><a href="<?= $BASE_URL ?>menu.php">Cardápio</a></li>
                    <li><a href="<?= $BASE_URL ?>environment.php">Ambiente</a></li>
                    <li><a href="<?= $BASE_URL ?>location.php">Localização</a></li>
                </ul>
            </nav>
        </header>
