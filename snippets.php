<?php $images = eashy_image_gallery_get_image_ids(); ?>
<?php if($images) : foreach($images as $attachment_id): ?>
<?php $imagefull = wp_get_attachment_image_src($attachment_id,''); ?>
<?php $image = wp_get_attachment_image_src($attachment_id,'thumb-custom'); ?>
<a class="popup" rel="fancybox[group]" href="<?= $imagefull[0]?>">
  <img src="<?=$image[0]?>" alt="">
</a>
<?php endforeach;endif;?>
