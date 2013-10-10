	</div><!-- Row End -->
</section><!-- Container End -->

<div class="row full-width">
	<?php dynamic_sidebar("Footer"); ?>
</div>

<footer class="row full-width" role="contentinfo">
	<div class="small-12 large-4 columns">
		<p>&copy; <?php echo date('Y'); ?>. <?php _e('Crafted on','reverie'); ?> <a href="http://themefortress.com/reverie/" rel="nofollow" title="Reverie Framework">Reverie</a>.</p>
	</div>
	
	<div class="small-12 large-8 columns">
		<?php wp_nav_menu(array('theme_location' => 'utility', 'container' => false, 'menu_class' => 'inline-list right')); ?>
	</div>
</footer>

<?php wp_footer(); ?>

<script>
	(function($) {
		$(document).foundation();
	})(jQuery);
</script>

<script type="text/javascript">
   function showMe(){
   var val = jQuery("#patente").val();
   alert(val);
   alert(selected);
}
</script>
<script type="text/javascript">

var selected = new Array();
jQuery("#selectable").selectable({
    selected: function(event, ui){            
        selected.push(ui.selected.id);
    },
    unselected: function(event, ui){
        for (var i=0; i < selected.length; i++){
        	if (selected[i] == ui.selected.id ){
        		selected.splice(i,1);
        		break;
        	}
        }
    }
});
</script>

<script type="text/javascript">
  jQuery(function() {
    jQuery( "#selectable" ).selectable();
  });
  </script>

  <script type="text/javascript">
/*(function() {
  alert('api-rest');
  var flickerAPI = "http://localhost:1814/Smarty2/books.json";
  
  jQuery.getJSON( flickerAPI, function(data) { console.log(data) } )
    //.done(function( data ) {
     // alert(data);
      /*jQuery.each( data.items, function( i, item ) {
        jQuery( "<img>" ).attr( "src", item.media.m ).appendTo( "#images" );
        if ( i === 3 ) {
          return false;
        }
      });*/
    //});
//})();
  jQuery.ajax({
  dataType: "json",
  url: "http://localhost:8090/Smarty2/preguntas" ,
  }).done(function ( data ) {
  // do my stuff
  console.log(data);

  jQuery.each(data, function(index, value) {
      alert(value.question);
  });
  
 
});

</script>
	
</body>
</html>