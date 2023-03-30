<?php 
include_once("./templates/header.php");

?>
<main class="main">
    <div class="user">
        <div class="photo">
            <img src="<?=$BASE_URL?>/img/josephbrito.jpg" alt="José de Brito" />
        </div>
        <div class="social">
            <h3>José de Brito</h3>
            <h4>DEV Full Stack</h4>
            <div class="social_media">
                <a href="https://www.instagram.com/gomesz_sw/" target="_blank"><img src="<?=$BASE_URL?>img/icons/instagram.svg" alt="instagram"/></a>
                <a href="https://github.com/josephbrito" target="_blank"><img src="<?=$BASE_URL?>img/icons/github.svg" alt="GitHub"/></a>
                <a href="https://www.linkedin.com/in/jos%C3%A9-brito-b14472215/" target="_blank"><img src="<?=$BASE_URL?>img/icons/linkedin.svg" alt="Linkedin"/></a>
            </div>
        </div>
    </div>
    
</main>
<?php
include_once("./templates/footer.php");
?>