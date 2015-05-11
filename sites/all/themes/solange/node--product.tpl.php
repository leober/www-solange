<?php global $base_url; ?>
<div class="products-page">
	<div class="product-l col-md-6">
		<h1><?php print $title; ?></h1>
		<div class="pi">
			<?php
				print render($content['uc_product_image']);
			?>	
		</div>
		<div class="voto"><?php print render($content['field_voto']); ?></div>
		<div class="pd">
			<?php 
				if($node->body['und'][0]['value'] != "")
				{
					print "<h4>".t('Product Details')."</h4>";
				}		
			?>
			<?php print $node->body['und'][0]['value']; ?>
		</div>
	</div>
	<div class="product-r col-md-6">
		<div class="oe">
		<?php print t("Other colors, other styles,..."); ?>
		</div>
	</div>
</div>	
<div class="clear"></div>
	<?php
		//$imag=image_style_url('catalog', $node->uc_product_image['und'][0]['uri']);
	?>

