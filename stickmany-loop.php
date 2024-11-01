<?php 

// Sticky One-Many Loop
function stickymany_loop()

{
    
$stickymany_group = cs_get_option('stickymany_group');

foreach($stickymany_group as $single_value):

  ?>

<script type="text/javascript">

   jQuery(function(){

      jQuery('<?php echo $single_value['Stickymany_element']; ?>').sticky({
        topSpacing:<?php echo $single_value['StickyMany_topSpacing']; ?>,
        zIndex:<?php echo $single_value['StickyMany_zindex']; ?>,
        stopper: "<?php echo $single_value['StickyMany_Stopper']; ?>"
      });

    });
  </script>


	<?php
  endforeach;	
   

}

add_action('wp_footer', 'stickymany_loop');