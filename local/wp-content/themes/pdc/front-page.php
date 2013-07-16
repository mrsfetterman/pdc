<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<?php endwhile; else: ?>
	<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<?php 

// set variables
$smartQuip = get_post_meta($post->ID, 'smart-quip-big', true); 
$smartQuipText = get_post_meta($post->ID, 'smart-quip-text', true);
$smartQuipSource = get_post_meta($post->ID, 'smart-quip-source', true); 
?>

<!-- Main hero unit for a primary marketing message or call to action -->
<div id="splash" class="hero-unit">
	
	<div class="container">
	  <div id="tagline">
	    <h1><?php the_title(); ?></h1>	
		  <?php the_content(); ?>
		  
		</div>
  </div>

</div>

<div id="hp-buckets">
  <div class="container">
    <!-- Example row of columns -->
    <div class="row-fluid">
  
      <?php 
        $args = array(
            'post_type' => 'info-block',
            'posts_per_page' => 4,
            'orderby' => 'meta_value',
            'meta_key' => 'sort-order',
            'order' => 'ASC');
        
      $loop = new WP_Query($args); ?>

      <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

      	  <div class="span3 mobile-two">
            <?php $imgID = get_post_meta($post->ID, 'info-block-image', true); ?>
        	  <?php echo wp_get_attachment_image($imgID, 'full'); ?>
        	  <!--<img src="http://placehold.it/500x300">-->
            <h2><?php echo get_post_meta($post->ID, 'info-block-heading', true); ?></h2>
            <p><?php echo get_post_meta($post->ID, 'info-block-content', true); ?></p>
            <p><a class="btn" href="<?php echo get_post_meta($post->ID, 'info-block-link', true); ?>">View details &raquo;</a></p>
          </div>

      <?php endwhile; ?>

    </div>
  </div>
</div>
<div id="smartQuip">
  <div class="container">
    <div class="quip">
  
    <?php echo ($smartQuip == '') ? '' : '<h1 id="smartQuipHeader">' . $smartQuip . '</h1>'; ?>
    <?php echo ($smartQuipText == '') ? '' : '<p>' . $smartQuipText . '</p>'; ?>
    <?php echo ($smartQuipSource == '') ? '' : '<p id="smartQuipSource">' . $smartQuipSource . '</p>'; ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>