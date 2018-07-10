<?php
$Settings 	= new PIXAD_Settings();
$options 	= $Settings->getSettings( 'WP_OPTIONS', '_jp_autos_styling', true );

$primary 	 	= isset( $_POST['primary'] )  	  	? $_POST['primary'] : $options['primary']; // Primary color
$headings	 	= isset( $_POST['headings'] ) 	  	? $_POST['headings'] : $options['headings']; // Headings color
$headings_hover	= isset( $_POST['headings_hover'] ) ? $_POST['headings_hover'] : $options['headings_hover']; // Headings hover color
$links		 	= isset( $_POST['links'] ) 	  		? $_POST['links'] : $options['links'] ; // Links colors
$links_hover 	= isset( $_POST['links_hover'] ) 	? $_POST['links_hover'] : $options['links_hover']; // Links hover color

if( isset( $_POST['submit'] ) ) {
	
	$args = array(
		'primary' 	  		=> $primary,
		'headings'	  		=> $headings,
		'headings_hover' 	=> $headings_hover,
		'links'		  		=> $links,
		'links_hover' 		=> $links_hover
	);
	$Settings->update( 'WP_OPTIONS', '_jp_autos_styling', serialize( $args ) );
}
?>

<div class="pixad-panel">

	<div class="pixad-panel-heading">
		<span class="pixad-panel-title"><?php _e( 'Styling', TEXTDOMAIN ); ?></span>
	</div>
	
	<div class="pixad-panel-body">
	
		<form method="post" class="pixad-form-horizontal" role="form">
		
			<input type="hidden" name="action" value="save">
			<?php echo wp_nonce_field('styling_save'); ?>
			
			<!-- Primary Color -->
			<div class="pixad-form-group">
				<label class="col-lg-2 pixad-control-label">
					<?php _e( 'Primary Color', TEXTDOMAIN ); ?>
					<i class="fa fa-question-circle" title="<?php _e( 'Set JPro Autos primary color. All main elements will use this color.', TEXTDOMAIN ); ?>" data-toggle="tooltip" data-placement="top"></i>
				</label>
				<div class="col-lg-9" style="line-height: 3;">
					<input class="color-field" name="primary" type="text" value="<?php echo esc_attr( $primary ); ?>">
				</div>
			</div><!-- / Primary Color -->
			
			<!-- Headings Color -->
			<div class="pixad-form-group">
				<label class="col-lg-2 pixad-control-label">
					<?php _e( 'Headings Color', TEXTDOMAIN ); ?>
					<i class="fa fa-question-circle" title="<?php _e( 'Set color for headings (h1, h2, h3, h4, h5, h6) tags on JPro Autos pages.', TEXTDOMAIN ); ?>" data-toggle="tooltip" data-placement="top"></i>
				</label>
				<div class="col-lg-9" style="line-height: 3;">
					<input class="color-field" name="headings" type="text" value="<?php echo esc_attr( $headings ); ?>">
				</div>
			</div><!-- / Headings Color -->
			
			<!-- Headings Hover Color -->
			<div class="pixad-form-group">
				<label class="col-lg-2 pixad-control-label">
					<?php _e( 'Headings Hover Color', TEXTDOMAIN ); ?>
					<i class="fa fa-question-circle" title="<?php _e( 'Set color for headings hover (h1, h2, h3, h4, h5, h6) tags on JPro Autos pages.', TEXTDOMAIN ); ?>" data-toggle="tooltip" data-placement="top"></i>
				</label>
				<div class="col-lg-9" style="line-height: 3;">
					<input class="color-field" name="headings_hover" type="text" value="<?php echo esc_attr( $headings_hover ); ?>">
				</div>
			</div><!-- / Headings Hover Color -->
			
			<!-- Links Color -->
			<div class="pixad-form-group">
				<label class="col-lg-2 pixad-control-label">
					<?php _e( 'Links Colors', TEXTDOMAIN ); ?>
					<i class="fa fa-question-circle" title="<?php _e( 'Set color for links (<a href>) tags on JPro Autos pages.', TEXTDOMAIN ); ?>" data-toggle="tooltip" data-placement="top"></i>
				</label>
				<div class="col-lg-9" style="line-height: 3;">
					<input class="color-field" name="links" type="text" value="<?php echo esc_attr( $links ); ?>">
				</div>
			</div><!-- / Links Color -->
			
			<!-- Links Hover Color -->
			<div class="pixad-form-group">
				<label class="col-lg-2 pixad-control-label">
					<?php _e( 'Links Hover Color', TEXTDOMAIN ); ?>
					<i class="fa fa-question-circle" title="<?php _e( 'Set color for links hover (<a href>) tags on JPro Autos pages.', TEXTDOMAIN ); ?>" data-toggle="tooltip" data-placement="top"></i>
				</label>
				<div class="col-lg-9" style="line-height: 3;">
					<input class="color-field" name="links_hover" type="text" value="<?php echo esc_attr( $links_hover ); ?>">
				</div>
			</div><!-- / Links Hover Color -->
			
			<!-- Save Button -->
			<div class="pixad-form-group">
				<label class="col-lg-2"></label>
				<div class="col-lg-9">
					<?php submit_button(); ?>
				</div>
			</div><!-- / Save Button -->
			
		</form>
	
	</div>

</div>
<script>
jQuery( document ).ready(function($) {
	$('[data-toggle="tooltip"]').tooltip();
});
</script>