	<?php global $redux_theory;?>
	<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<div class="flex">
						<div class="copyright">
							&copy; <?php echo esc_html($redux_theory['copyright']);?>. Design: <a href="<?php echo esc_url($redux_theory['designby_url']);?>"><?php echo esc_html($redux_theory['designby']);?></a>
						</div>
						<ul class="icons">
							<?php if(!empty($redux_theory['footer-social']['twitter'])):?>
									<li><a href="<?php echo $redux_theory['footer-social']['twitter'];?>" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
								<?php endif;?>
								
								<?php if(!empty($redux_theory['footer-social']['instagram'])):?>
									<li><a href="<?php echo $redux_theory['footer-social']['instagram'];?>" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
								<?php endif;?>
								<?php if(!empty($redux_theory['footer-social']['linkedIn'])):?>
									<li><a href="<?php echo $redux_theory['footer-social']['linkedIn'];?>" class="icon fa-linkedin"><span class="label">LinkedIn</span></a></li>
								<?php endif;?>
								
						</ul>
					</div>
				</div>
			</footer>

	</body>
	<?php wp_footer();?>
</html>