<?php
// for Theory Theme
?>

<?php


// Text box

function sec_textbox($sec_textbox){
	$atts=shortcode_atts(
		array(
		'textbox_heading'			=>'',
		'textbox_desc'			=>'',
		'textbox_btn'	=>'',
		
		),$sec_textbox
	);
	ob_start();

?>
			<section id="one" class="wrapper">
				<div class="inner">
					<div class="flex">
						<article>
							<header>
								<h3><?php echo esc_attr($atts['textbox_heading']);?></h3>
							</header>
							<p><?php echo esc_attr($atts['textbox_desc']);?></p>
							<footer>
								<a href="#" class="button special"><?php echo esc_attr($atts['textbox_btn']);?></a>
							</footer>
						</article>
				
						
					</div>
				</div>
			</section>		
			


<?php 
return ob_get_clean();
	
}

add_shortcode('textbox','sec_textbox');

// team
function team_sec($team_sec){
	$atts=shortcode_atts(
		array(
		'team_heading'			=>'',
		'team_desc'			=>'',
		'team_per_page'	=>'',
		
		),$team_sec
	);
	ob_start();

?>
	<?php 
		$args = array(
			'post_type'	=> 'team',
			'posts_per_page'	=> $atts['team_per_page'],
		);
		$team_query = new WP_Query($args);
	?>
	<section id="two" class="wrapper style1 special">
				<div class="inner">
					<header>
						<h2><?php echo esc_attr($atts['team_heading']);?></h2>
						<p><?php echo esc_attr($atts['team_desc']);?></p>
					</header>
					
					<div class="flex flex-4">
						<?php 
						while($team_query->have_posts()):
						$team_query->the_post();
						?>
						<div class="box person">
							<div class="image round">
								<?php the_post_thumbnail();?>
							</div>
							<h3><?php the_title();?></h3>
							<?php the_content();?>
						</div>
						<?php endwhile;?>
					<?php wp_reset_postdata();?>
					</div>
				</div>
			</section>
		
			
<?php 
return ob_get_clean();
	
}

add_shortcode('team_member','team_sec');

// feature

function feature_sec($feature_sec){
	$atts=shortcode_atts(
		array(
		'feature_heading'			=>'',
		// 'feature_desc'			=>'',
		'feat_per_page'	=>'',
		'feature_btn'	=>'',
		
		),$feature_sec
	);
	ob_start();

?>
	<?php 
		$args = array(
			'post_type'	=> 'post',
			'posts_per_page'	=> $atts['feat_per_page'],
		);
		$feat_query = new WP_Query($args);
	?>
	
				<div class="inner">
					<!--<header class="align-center">
						<h2>Nunc Dignissim</h2>
						<p>Aliquam erat volutpat nam dui </p>
					</header>-->
					<div class="flex flex-2">
						<?php 
						while($feat_query->have_posts()):
						$feat_query->the_post();
						?>
						<article>
							<div class="image fit">
							<?php the_post_thumbnail('large');?>
							</div>
							<header>
								<h3><?php the_title();?></h3>
							</header>
							<p><?php the_content();?></p>
							<footer>
								<a href="#" class="button special"><?php echo esc_html($atts['feature_btn']);?></a>
							</footer>
						</article>
						<?php endwhile;?>
						<?php wp_reset_postdata();?>
					</div>
				</div>
			
		
			
<?php 
return ob_get_clean();
	
}

add_shortcode('feature','feature_sec');

//heading
function theory_heading_fun($theory_heading_fun){
	$atts=shortcode_atts(
		array(
		'theory_head'			=>'',
		'theory_head_desc'			=>'',
				
		),$theory_heading_fun
	);
	ob_start();

?>
	
	
				
					<header class="align-center">
						<h2><?php echo esc_attr($atts['theory_head']);?></h2>
						<p><?php echo esc_attr($atts['theory_head_desc']);?></p>
					</header>
					
			
<?php 
return ob_get_clean();
	
}

add_shortcode('theory_heading','theory_heading_fun');

?>