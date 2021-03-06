<?php
$footer_switch = $footer_layouts = $footer_bottom_switch = $footer_bottom_content = $footer_background_type = $footer_background_settings = $current_position = $footer_num_columns = $footer_col_3_1 = $footer_col_3_2 = $footer_col_3_3 = $footer_col_3_3 = $footer_col_4_1 = $footer_col_4_2 = $footer_col_4_3 = $footer_col_4_4 = $back_to_top_visibility = '';

if( naslaan_helpers::naslaan_unyson_check() ) {
	$footer_layouts = fw_get_db_settings_option('footer_layouts');
	$footer_switch = fw_get_db_settings_option('footer_options/footer_switch');
	$footer_bottom_switch = naslaan_theme_option_functions::naslaan_footer_bottom_visibility();
	$footer_bottom_content = fw_get_db_settings_option('footer_bottom_options/enabled/footer_bottom_content');
	$footer_background_type = fw_get_db_settings_option('footer_options/enabled/footer_background/footer_background_type');
	$footer_background_settings = fw_get_db_settings_option('footer_options/enabled/footer_background/background_image/footer_background_settings');
	
	if( function_exists('fw_ext_sidebars_get_current_position') ) {
		$current_position = fw_ext_sidebars_get_current_position();
	}
	
	$footer_num_columns = fw_get_db_settings_option('footer_columns/footer_num_columns');
	$footer_col_3_1 = fw_get_db_settings_option('footer_columns/footer_col_3/footer_col_3_1');
	$footer_col_3_2 = fw_get_db_settings_option('footer_columns/footer_col_3/footer_col_3_2');
	$footer_col_3_3 = fw_get_db_settings_option('footer_columns/footer_col_3/footer_col_3_3');
	$footer_col_4_1 = fw_get_db_settings_option('footer_columns/footer_col_4/footer_col_4_1');
	$footer_col_4_2 = fw_get_db_settings_option('footer_columns/footer_col_4/footer_col_4_2');
	$footer_col_4_3 = fw_get_db_settings_option('footer_columns/footer_col_4/footer_col_4_3');
	$footer_col_4_4 = fw_get_db_settings_option('footer_columns/footer_col_4/footer_col_4_4');
	
	if($footer_col_3_1=='col_1_1'){
		$footer_col_3_1='col-md-12';
	}elseif($footer_col_3_1=='col_1_2'){
		$footer_col_3_1='col-md-6';
	}elseif($footer_col_3_1=='col_1_3'){
		$footer_col_3_1='col-md-4';
	}elseif($footer_col_3_1=='col_1_4'){
		$footer_col_3_1='col-md-3';
	}elseif($footer_col_3_1=='col_1_6'){
		$footer_col_3_1='col-md-2';
	}else{
		$footer_col_3_1='col-md-4';
	}
	
	if($footer_col_3_2=='col_1_1'){
		$footer_col_3_2='col-md-12';
	}elseif($footer_col_3_2=='col_1_2'){
		$footer_col_3_2='col-md-6';
	}elseif($footer_col_3_2=='col_1_3'){
		$footer_col_3_2='col-md-4';
	}elseif($footer_col_3_2=='col_1_4'){
		$footer_col_3_2='col-md-3';
	}elseif($footer_col_3_2=='col_1_6'){
		$footer_col_3_2='col-md-2';
	}else{
		$footer_col_3_2='col-md-4';
	}
	
	if($footer_col_3_3=='col_1_1'){
		$footer_col_3_3='col-md-12';
	}elseif($footer_col_3_3=='col_1_2'){
		$footer_col_3_3='col-md-6';
	}elseif($footer_col_3_3=='col_1_3'){
		$footer_col_3_3='col-md-4';
	}elseif($footer_col_3_3=='col_1_4'){
		$footer_col_3_3='col-md-3';
	}elseif($footer_col_3_3=='col_1_6'){
		$footer_col_3_3='col-md-2';
	}else{
		$footer_col_3_3='col-md-4';
	}
	
	if($footer_col_4_1=='col_1_1'){
		$footer_col_4_1='col-md-12';
	}elseif($footer_col_4_1=='col_1_2'){
		$footer_col_4_1='col-md-6';
	}elseif($footer_col_4_1=='col_1_3'){
		$footer_col_4_1='col-md-4';
	}elseif($footer_col_4_1=='col_1_4'){
		$footer_col_4_1='col-md-3';
	}elseif($footer_col_4_1=='col_1_6'){
		$footer_col_4_1='col-md-2';
	}else{
		$footer_col_4_1='col-md-4';
	}
	
	if($footer_col_4_2=='col_1_1'){
		$footer_col_4_2='col-md-12';
	}elseif($footer_col_4_2=='col_1_2'){
		$footer_col_4_2='col-md-6';
	}elseif($footer_col_4_2=='col_1_3'){
		$footer_col_4_2='col-md-4';
	}elseif($footer_col_4_2=='col_1_4'){
		$footer_col_4_2='col-md-3';
	}elseif($footer_col_4_2=='col_1_6'){
		$footer_col_4_2='col-md-2';
	}else{
		$footer_col_4_2='col-md-4';
	}
	
	if($footer_col_4_3=='col_1_1'){
		$footer_col_4_3='col-md-12';
	}elseif($footer_col_4_3=='col_1_2'){
		$footer_col_4_3='col-md-6';
	}elseif($footer_col_4_3=='col_1_3'){
		$footer_col_4_3='col-md-4';
	}elseif($footer_col_4_3=='col_1_4'){
		$footer_col_4_3='col-md-3';
	}elseif($footer_col_4_3=='col_1_6'){
		$footer_col_4_3='col-md-2';
	}else{
		$footer_col_4_3='col-md-4';
	}
	
	if($footer_col_4_4=='col_1_1'){
		$footer_col_4_4='col-md-12';
	}elseif($footer_col_4_4=='col_1_2'){
		$footer_col_4_4='col-md-6';
	}elseif($footer_col_4_4=='col_1_3'){
		$footer_col_4_4='col-md-4';
	}elseif($footer_col_4_4=='col_1_4'){
		$footer_col_4_4='col-md-3';
	}elseif($footer_col_4_4=='col_1_6'){
		$footer_col_4_4='col-md-2';
	}else{
		$footer_col_4_4='col-md-4';
	}
	
	$back_to_top_visibility = fw_get_db_settings_option('back_to_top_switch/back_to_top_visibility');
	
}?>
	
			<?php if($footer_switch=='enabled'){ ?>
			<div id="footer"
			<?php if(($footer_layouts!='1200')||($footer_background_type=="background_image")) { ?> class="<?php } ?>
			<?php if($footer_layouts=='1480') { ?> min-width-1480<?php } ?>
			<?php if($footer_layouts=='full') { ?> min-width-100p<?php } ?>
			
			<?php if($footer_background_type=="background_image") { ?>
				<?php if($footer_background_settings=='repeat_center') { ?> footer-image-bg
				<?php }elseif($footer_background_settings=='repeat_top') { ?> footer-image-bg-top
				<?php }elseif($footer_background_settings=='cover_center') { ?> footer-image-bg-cover
				<?php } ?>
			<?php } ?>
			
			<?php if(($footer_layouts!='1200')||($footer_background_type=="background_image")) { ?>"<?php } ?>
			>
			
				<?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) || is_active_sidebar( 'sidebar-footer-col-2' ) || is_active_sidebar( 'sidebar-footer-col-3' ) || is_active_sidebar( 'sidebar-footer-col-4' ) ) {?>
					
					<?php if( naslaan_helpers::naslaan_unyson_check()) {?>
					
							<?php naslaan_front_functions::naslaan_footer_cta();?>
					
							<?php if( naslaan_theme_option_functions::naslaan_footer_visibility()!='disabled') {?>
							
								<?php if( $footer_num_columns == 'footer_col_3' ) {?>
								
									<div class="middle-section">
										<div class="container">
											<div class="row">
													
												<?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_3_1);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-2' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_3_2);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-3' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_3_3);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
												</div>
												<?php } ?>								
												
											</div>
										</div>
									</div>
								
								<?php }elseif( $footer_num_columns == 'footer_col_4' ) {?>
								
									<div class="middle-section">
										<div class="container">
											<div class="row">
												
												<?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) ) { ?>	
												<div class="<?php echo esc_attr($footer_col_4_1);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-2' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_4_2);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-3' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_4_3);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-4' ) ) { ?>
												<div class="<?php echo esc_attr($footer_col_4_4);?>">
													<?php dynamic_sidebar( 'sidebar-footer-col-4' ); ?>
												</div>
												<?php } ?>						
												
											</div>
										</div>
									</div>
								
								<?php }else{?>
								
									<div class="middle-section">
										<div class="container">
											<div class="row">
												
												<?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) ) { ?>
												<div class="col-md-3">
													<?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-2' ) ) { ?>
												<div class="col-md-3">
													<?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-3' ) ) { ?>
												<div class="col-md-3">
													<?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
												</div>
												<?php } ?>
												<?php if ( is_active_sidebar( 'sidebar-footer-col-4' ) ) { ?>
												<div class="col-md-3">
													<?php dynamic_sidebar( 'sidebar-footer-col-4' ); ?>
												</div>
												<?php } ?>
														
											</div>
										</div>
									</div>
								
								<?php }?>
							
							<?php } ?>
							
						<?php } else{ ?>
						
							<div class="middle-section">
								<div class="container">
									<div class="row">
										
										<?php if ( is_active_sidebar( 'sidebar-footer-col-1' ) ) { ?>
										<div class="col-md-3">
											<?php dynamic_sidebar( 'sidebar-footer-col-1' ); ?>
										</div>
										<?php } ?>
										<?php if ( is_active_sidebar( 'sidebar-footer-col-2' ) ) { ?>
										<div class="col-md-3">
											<?php dynamic_sidebar( 'sidebar-footer-col-2' ); ?>
										</div>
										<?php } ?>
										<?php if ( is_active_sidebar( 'sidebar-footer-col-3' ) ) { ?>
										<div class="col-md-3">
											<?php dynamic_sidebar( 'sidebar-footer-col-3' ); ?>
										</div>
										<?php } ?>
										<?php if ( is_active_sidebar( 'sidebar-footer-col-4' ) ) { ?>
										<div class="col-md-3">
											<?php dynamic_sidebar( 'sidebar-footer-col-4' ); ?>
										</div>
										<?php } ?>
												
									</div>
								</div>
								
							</div>
						
						<?php } ?>
						
					
				
				<?php } ?> 
				
				<?php if(($footer_bottom_switch!='disabled')&&($footer_bottom_content)){ ?>
				<div class="bottom-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="text-container"><?php echo wp_kses_post($footer_bottom_content); ?></div>
							</div>
						</div>
					</div>
				</div>
				<?php } ?> 
				
			</div>
			<?php } ?> 
		
	</div>

  
	
	<?php
	
		echo "<div class='sticky-slide-panel-toggle'>";
		naslaan_front_functions::naslaan_slide_panel_toggle();
		echo "</div>";	
	?>
	
	<?php if($back_to_top_visibility=='enabled'){ ?>
	<a href="#" id="back-to-top" title="<?php esc_attr_e('Back to top', 'naslaan'); ?>"><div class="icon icon-arrow-up-7"></div></a>
	<?php } ?>

     

<?php wp_footer(); ?>
</body>

</html>
