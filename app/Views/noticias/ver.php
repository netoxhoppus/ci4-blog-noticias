<br>

<?php
echo "<div style='text-align: justify'>";
echo '<h2>' . $news['title'] . '</h2>';
echo "<hr>";
echo "\n<p>" . $news['body']."</p>";
echo "</div>";

echo anchor(base_url('noticias'), '<<< Voltar');

