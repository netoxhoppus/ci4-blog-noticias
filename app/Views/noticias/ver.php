<?php echo view('templates/share_button/botoes'); ?>
<?php echo $news['body'] ?>

<script>
    /*coloca a classe boosttrap 'img-fluid' em todas as imagens do post*/
/*    var element = document.getElementsByTagName("img");
    let i = 0;
    for (; i < element.length; i++) {
        element[i].classList.add("img-fluid");
        element[i].setAttribute('style','width: auto; height: auto;');

        console.log(element[i])
    }*/
</script>


<div id="fb-root"></div>
<script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v7.0&appId=277132203471512&autoLogAppEvents=1"></script>
<div class="fb-comments" data-href="<?php echo current_url() ?>" data-numposts="5" data-width="100%"></div>


</div>
</div>
</div>
</article>

