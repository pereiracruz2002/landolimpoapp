<?php
/**
 * The main template file
 * 
 * @package bootstrap-basic
 */

get_header();

/**
 * determine main column size from actived sidebar
 */
$main_column_size = bootstrapBasicGetMainColumnSize();
?>
<?php get_sidebar('left'); ?> 
<div class="col-md-<?php echo $main_column_size; ?> content-area" id="main-column">
	<main id="main" class="site-main" role="main">
		<h2 class="subtitulo text-center"><strong>Tenha o <span class="turquesa">treinador</span> certo para você</strong></h2>
		<h4 class="text-center">Crie seu perfil como aluno para encontrar o melhor profissional da sua região, ou como profissional
para conhecer novos alunos perto de você. É simples e prático!</h4>
	</main>
</div>
<div class="row">
	<div class="container">
		<div class="col-md-6 col-xs-6 col-sm-6">
			<a href="#"><img class="pull-right img-responsive" src="<?php echo get_template_directory_uri();?>/img/apple.png" alt="apple store"></a>
		</div>
		<div class="col-md-6 col-xs-6 col-sm-6">
			<a href="#"><img class="pull-left img-responsive" src="<?php echo get_template_directory_uri();?>/img/play.jpg" alt="google play"></a>
		</div>
	</div>
</div>
</div><!--content-->
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-11 col-md-offset-1 col-xs-12 col-sm-12">
			<img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/iPhone-6.png" alt="apple store">
		</div>
	</div>
</div>
<div class="container-fluid">
	<section id="blocoIntermediario">
		<div class="row">
			<div class="col-md-6">
				<img class="pull-left img-responsive" src="<?php echo get_template_directory_uri();?>/img/app.png" alt="app">
			</div>
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-1">
								<hr class="tracoTurquesa">
							</div>
							<div class="col-md-11">
								<h4 id="textoblocoIntermediario">Especialistas em diversas modalidades</h4>
							</div>
						</div>
						<div class="row">
							<div class="col-md-offset-1 col-md-11">
								<p>Para  você melhorar a sua procura e encontrar o melhor trainer. O Olimpo
							conta com especialista de diversas áreas: musculação, natacão, corrida, artes marciais, pilates, ioga e muita mais.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4"></div>
				</div>
			</div>
		</div>
	</section>
	<section id="blocoSegundoIntermediario">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-xs-12 col-sm-12">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-1">
									<hr class="tracoTurquesa">
								</div>
								<div class="col-md-11">
									<h4 id="textoblocoIntermediario">Marque a sua visita</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-1 col-md-11">
									<h4>Interessou-se por um Trainer?</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-1 col-md-11">
									<p>Abra um bate papo com ele, tire todas as suas dúvidas e<br> marque sua visita.</p>
									<p>Você pode receber o profissional ou se preferir ir até ele.</p> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/chat.jpg" alt="chat"></a>
				</div>
			</div>
		</div>
	</div>
</section>
<section id="banner">

</section>
<section id="blocoterceiroIntermediario">
	<div class="row">
		<div class="col-md-6">
			<img class="pull-left img-responsive" src="<?php echo get_template_directory_uri();?>/img/appDetail.png" alt="app">
		</div>
		<div class="col-md-6">
			<div class="row">
				<div class="col-md-8">
					<div class="row">
						<div class="col-md-1">
							<hr class="tracoTurquesa">
						</div>
						<div class="col-md-11">
							<h4 id="textoblocoIntermediario">Aqui todas as suas qualificações contam</h4>
						</div>
					</div>
					<div class="row">
						<div class="col-md-offset-1 col-md-11">
							<p>Se você e especialista em alguma modalidade, tem grande experiência em determinada atividade ou fez algum curso
							específico. Tudo isso conta - e quanto mais você inserir suas atividades e locais de atendimento, mais os alunos virão ate você. </p>
						</div>
					</div>
				</div>
				<div class="col-md-offset-4"></div>
			</div>
		</div>
	</div>
</section>
<section id="blocoQuartoIntermediario">
	<div class="row">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<div class="row">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-1">
									<hr class="tracoTurquesa">
								</div>
								<div class="col-md-11">
									<h4 id="textoblocoIntermediario">Compartilhamento nas redes sociais</h4>
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-1 col-md-11">
									<!--<h4>Compartilhamento nas redes sociais</h4>-->
								</div>
							</div>
							<div class="row">
								<div class="col-md-offset-1 col-md-11">
									<p>Ficou ainda mais fácil de ter mais alunos, com o seu aplicativo eles podem compartilhar seu perfil nas redes sociais.</p>
									<p>Marque diversas visitas, aulas, testes e aplique o melhor atendimento possível.</p> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="#"><img class="img-responsive" src="<?php echo get_template_directory_uri();?>/img/compartilhar.jpg" alt="compartilhar"></a>
				</div>
			</div>
		</div>
	</div>
</section>

</div>
<section id="app">
	<div class="row text-center">
		<h3>Não Perca tempo</h3>
		<h4>Baixe nosso app agora mesmo</h4>
	</div>
	<div class="row">
		<div class="col-md-6 col-xs-6 col-sm-6">
			<a href="#"><img class="pull-right img-responsive" src="<?php echo get_template_directory_uri();?>/img/apple_blue.jpg" alt="apple store"></a>
		</div>
		<div class="col-md-6 col-xs-6 col-sm-6">
			<a href="#"><img class="pull-left img-responsive" src="<?php echo get_template_directory_uri();?>/img/google_blue.jpg" alt="apple store"></a>
		</div>
		<div class="col-md-offset-4"></div>
	</div>
</section>
<?php get_sidebar('right'); ?> 
<?php get_footer(); ?> 