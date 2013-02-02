<?php get_header(); ?>
<div id="main">
	<p>Besoin d'un GPS? Parce que vous cherchez ne se trouve pas ici....
		Vous pouvez <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="Retour à l'accueil">retourner à l'accueil</a> par contre.
	</p>
</div>
<div id="sidebar">
    <?php dynamic_sidebar('primary'); ?>
</div>
<?php get_footer(); ?>