<h2> <?= esc($title); ?> </h2>

<?php   \Config\Services::validation()->listErrors();
        echo  form_open(base_url('/news/create'));
?>

<div class="form-group">


	<label for="Nome">Título </label>
	<input type="input" name="title" class="input-group-text">

	<label for="texto">Texto </label>
	<textarea name="body" class="input-group-text"></textarea>
	<script>
		CKEDITOR.replace( 'body' );
	</script>

	<button type="submit" class="btn-group btn-success" >Salvar</button>
 </div>

<?php form_close(); ?>
