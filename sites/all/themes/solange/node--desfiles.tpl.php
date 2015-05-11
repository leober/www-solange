<div class="desfiles">
<div class="desfiles-title"><?php print $node->title;?></div>
<?php
global $base_url;
?>

<?php
if (count($node->field_videos) > 0 && count($node->field_images) > 0)
{
	print render($content['field_videos']);
	print "<div class='desfiles-description'>".$node->field_descripcion['und'][0]['value']."</div>"
	
	?>
	<div class="desfiles-photos">
		<?php
		foreach($node->field_images['und'] as $f )
		{
		?>
		 <a href="<?php print file_create_url($f['uri']);?>" class="colorbox-load" rel="desfile-<?php print $node->nid; ?>" ><img src="<?php print image_style_url('desfiles', $f['uri']);?>" /></a>
		 <?php
		}
		?>
	</div>
<?php 
} 
if(count($node->field_videos) == 0 && count($node->field_images) > 0)
{
?>
	<div class="desfiles-photos-no-video">
		<?php
		foreach($node->field_images['und'] as $f )
		{
		?>
		 <a href="<?php print file_create_url($f['uri']);?>" class="colorbox-load" rel="desfile-<?php print $node->nid; ?>" ><img src="<?php print image_style_url('desfiles', $f['uri']);?>" /></a>
		 <?php
		}
		?>
	</div>
<?php
}	
?>
</div>
<div class="clear"></div>