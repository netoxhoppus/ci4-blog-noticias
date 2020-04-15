<br>

<?php
echo '<h2>' . $news['title'] . '</h2>';
echo "\n<p>" . $news['body']."</p>";

echo anchor(base_url('noticias'), '<<< Voltar');

