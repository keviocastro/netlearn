//<script>

$(document).ready(function() {		
	
	$('#colorpickerField').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val('#' + hex + ';');
			$(el).ColorPickerHide();
			$('.onchange').css('backgroundColor', '#' + hex);
			
			elgg.action('unita/color', {
				dataType:'json',
				data:{
					selected: '#' + hex + ';'
				}
			});			
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		}
	}).bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});

	$('#colorpickerFieldHover').ColorPicker({
		onSubmit: function(hsb, hex, rgb, el) {
			$(el).val('#' + hex + ';');
			$(el).ColorPickerHide();
			$('.onchange-hover').css('backgroundColor', '#' + hex);
			
			elgg.action('unita/color', {
				dataType:'json',
				data:{
					hover: '#' + hex + ';'
				}
			});			
		},
		onBeforeShow: function () {
			$(this).ColorPickerSetColor(this.value);
		}
	}).bind('keyup', function(){
		$(this).ColorPickerSetColor(this.value);
	});
});
