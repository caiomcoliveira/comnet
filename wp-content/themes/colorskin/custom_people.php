<?php
/*
 * Template Name: People
 */
get_header();
?>

<div class="container">
    <div class="row">
         <?php get_sidebar(); ?>
        <div id="primary" class="content-area col-md-9">
            <main id="main" class="site-main cf" role="main">
                
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    
    <?php if ( has_post_thumbnail() ) : ?>
		<div class="post-thumbnail">
			<?php the_post_thumbnail('colorskin-large-thumb'); ?>
		</div>
	<?php endif; ?>
    
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
	</header><!-- .entry-header -->
    
	<div class="entry-content">
	<?php

	$users = get_users(array(
				'numberposts'	=> -1,
				'meta_key'		=> 'degree',
				'meta_value'	=> array('Professor','PhD Student', 'Masters Student', 'Under Graduate'),
				'orderby' => 'meta_value',
				'order' => 'ASC',
				'role__not_in' => 'Administrator'
	));

		if ( ! empty( $users) ) {
			echo '<ul class="people">';

			echo '<h2> Professors </h2>';			
			foreach ( $users as $user ) {

				if($user->degree == 'Professor'){
				echo '<li>'.get_avatar( $user->id, 100 ).'<h3>' .  $user->display_name.  '<br/><small>'. $user->user_email . '</small></h3><p>'. $user->description . '</p></li>';
				}
			}
			echo '<h2> PhD Students </h2>';
			foreach ( $users as $user ) {
				if($user->degree == 'PhD Student'){
				echo '<li>'.get_avatar( $user->id, 100 ).'<h3>' .  $user->display_name.  '</h3><h4>' . '</h4><p>'. $user->description . '</p></li>';
				}
			}
			echo '<h2> Masters Students </h2>';
			foreach ( $users as $user ) {
				if($user->degree == 'Masters Student'){
				echo '<li>'.get_avatar( $user->id, 100 ).'<h3>' .  $user->display_name.  '</h3><h4>' . '</h4><p>'. $user->description . '</p></li>';
				}
			}
			echo '<h2> Under Graduate </h2>';
			foreach ( $users as $user ) {
				if($user->degree == 'Under Graduate'){
				echo '<li>'.get_avatar( $user->id, 100 ).'<h3>' .  $user->display_name.  '</h3><h4>' . '</h4><p>'. $user->description . '</p></li>';
				}
			}
			
			echo '</ul>';
		}

	?>
	


	</div><!-- .entry-content -->
    

    
</article>
                
            </main><!-- #main -->
        </div><!-- #primary -->
    
        
    <?php get_footer(); ?>