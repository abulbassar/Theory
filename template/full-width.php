<?php 
/*
	Template name: Full-width
*/
?>

<?php get_header();?>
<?php while(have_posts()){
	the_post();
	the_content();
}?>
<?php get_footer();?>