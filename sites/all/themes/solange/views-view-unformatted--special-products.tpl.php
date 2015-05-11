<?php
global $base_url;
/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>	
    <?php 
		$arr=array(4, 12, 20, 28, 36, 44, 52, 60);
		if(!in_array($id, $arr))
		{
		   $result[]=$row;
        }
		else
       {
			$im=$base_url.'/'.path_to_theme().'/img/special.png';
			$result[] = "<img src='$im' title='special' alt='special' class='special' />";
			$result[]= $row;	
	   }		
	?>
<?php endforeach; ?>
<?php $i=1; ?>
<?php foreach ($result as $r): ?>	
  <?php $c = "views-row views-row-".$i; ?>
  <div class="<?php print $c; ?>">
    <?php print $r ?>
  </div>
  <?php $i++; ?>
<?php endforeach; ?>
<div class="clear"></div>
