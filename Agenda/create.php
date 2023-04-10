<?php 
	include_once('templates/header.php');
?>

		<div class="container">

			<?php include_once("templates/backbtn.html") ?>
			
			<h1 id="main-title">Criar Contato</h1>

			<form id="create-form" action="<?= $BASE_URL ?>config/process.php" method="POST">
				
				<input type="hidden" name="type" value="create">

				<div class="form-group">
					
					<label for="name">Nome do Contato:</label>

					<input type="text" class="form-control" id="name" name="name" placeholder="Digite o nome do contato..." required>

				</div>

				<div class="form-group">
					
					<label for="phone">Telefone do Contato:</label>

					<input type="text" class="form-control" id="phone" name="phone" minlength="14" maxlength="14" placeholder="(51)99999-9999" required>

				</div>

				<div class="form-group">
					
					<label for="observation">Observações:</label>

					<textarea type="text" class="form-control" id="observation" name="observation" placeholder="Digite as Observações..." required></textarea>

				</div>

				<button type="submit" class="btn btn-primary">Cadastrar</button>

			</form>

		</div>

<?php 
	include_once('templates/footer.php');
?>