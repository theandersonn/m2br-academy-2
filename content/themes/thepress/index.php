<?php
  get_header();
  $home = get_fields('7');
  /* Template Name: Home */
?>
    <?php if($home['titulo']): ?>
    <header class="cabecalho-pagina">
      <h1><?php echo $home["titulo"]; ?></h1>
      <span><?php echo $home["meta"]; ?></span>
    </header>
    <?php endif; ?>

    <?php if($home['descricao']): ?>
    <section class="secao-apresentacao">
      <p><?php echo $home["descricao"]; ?></p>
    </section>
    <?php endif; ?>

    <section class="secao-cursos">
    <?php
        $args = array('post_type' => 'post', 'posts_per_page' => 3 );
        $my_post = get_posts($args);
    ?>

    <?php foreach($my_post as $post):?>
      <article class="curso">
        <!-- Exibirá o título -->
        <h1 class="titulo-curso"><?php the_title(); ?></h1>

        <!-- Exibirá a thumb -->
        <?php if ( has_post_thumbnail() ) : ?>
            <?php echo odin_thumbnail( 397, 224, get_the_title(), true, 'thumb-curso'); ?>
        <?php else: ?>
            <img class="thumb-curso" src="<?php bloginfo( 'template_url' ); ?>/static/images/general/destino-large.png" alt="">
        <?php endif; ?>

        <!-- Exibirá a descricao -->
        <p class="descricao-curso"><?php the_field( 'descricao' );?></p>

        <!-- Exibirá o link -->
        <a class="botao" href="<?php the_field( 'link' );?>" target="_blank">Saiba mais</a>
      </article>
    <?php endforeach;?>
    </section>
<?php get_footer(); ?>
