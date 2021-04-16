<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package theme-em
 */
$auteur = get_field("auteur");
$cours = get_field("cours");
?>
		
<article>
<div class="container-projet">

<a href="<?= get_permalink(); ?>">Aller à l'article</a>
<div class="image"><?php the_post_thumbnail( 'thumbnail'); ?></div>

<div class="info">
    <div class="title"><?php the_title(); ?></div>
    
    <div class="author">
    <?= $auteur ?>
    </div>
    
    <div class="type-cours">
    <?= $cours ?>
    </div>
</div>

</div>
</article>
