<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="th" xml:lang="th">
<head>
<meta http-equiv="content-type" content="text/html; charset=tis-620" />
<title>calculate number</title>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$(":text[name='k[]'], :text[name='p[]']").keypress(function(evt){
		var code = evt.keyCode ? evt.keyCode : evt.which;
		if (code === 8 ||code === 9 || code === 13)
			return;
			
		if ( ! /\d/.test(String.fromCharCode(code)))
			evt.preventDefault();
	}).keyup(function(){
		var k1, p1, a1;
		if ($(this).attr('name') == 'k[]'){
			k1 = $(this);
			p1 = $(this).next();
			a1 = $(this).next().next();
		}
		else if($(this).attr('name') == 'p[]'){
			k1 = $(this).prev();
			p1 = $(this);
			a1 = $(this).next();
		}
		
		a1.val(k1.val() * p1.val());
		
		var sum = 0;
		$(":text[name='a[]']").each(function(){
			sum += $(this).val() * 1;
		});
		
		$('#result').val(sum);
	});
});
</script>
</head>
<body>
 
 
<form method="post" action="?" id="box">
 <input type="text" name="a" value="k" disabled="disabled" />
 <input type="text" name="p" value="p" disabled="disabled" />
 <input type="text" name="k" value="a" disabled="disabled" />
 <?php echo '<br'.' />';?>
<?php foreach(range(1,5) as $m):?>
 <input type="text" name="k[]" value="" />
 <input type="text" name="p[]" value="" />
 <input type="text" name="a[]" value="" disabled="disabled" />
 <?php echo '<br'.' />';?>
<?php endforeach;?>
result: <input type="text" id="result" value="" readonly="readonly" />
</form>
 
</body>
</html>