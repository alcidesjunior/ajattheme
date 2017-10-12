<div class="footer">
  <div class="wrap">
    <h2>Fale conosco</h2>
    <?= FrmFormsController::get_form_shortcode(array('id'=>3,'key'=>'','title'=>false,'description'=>false,'readyonly'=>false,'entry_id'=>false)) ?>
  </div>
</div>
<div class="footer-2">
  <div class="wrap">

    <p>Todos os direitos reservados 2017</p>
    <ul class="soc">
    <li><a class="soc-twitter" href="#"></a></li>
    <li><a class="soc-facebook" href="#"></a></li>
    <li><a class="soc-instagram soc-icon-last" href="#"></a></li>
</ul>
<div class="clear">

</div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
    $('.fancybox').fancybox({
      openEffect: 'none',
      closeEffect: 'none'
    });
  });
</script>
<?php wp_footer() ?>

</body>
</html>
