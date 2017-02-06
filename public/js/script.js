function selectAll(){
	if ($('#select_all').is(':checked')) {
		$('.checkbox').prop('checked', true);
		$('.pull-left button').removeAttr('disabled');
	} else {
		$('.checkbox').prop('checked', false);
		$('.pull-left button').attr('disabled', 'disabled');
	}
}

function checkChoose(){
	var checked = false;
	var checkAll = true;
	$('.checkbox').each(function(){
		if ($(this).is(':checked')) {
			checked = true;
		} else {
			checkAll = false;
		}
	});

	if (checked) {
		$('.pull-left button').removeAttr('disabled');
		
	} else {
		$('.pull-left button').attr('disabled', 'disabled');
	}

	if (checkAll) {
		$('#select_all').prop('checked', true);
	} else {
		$('#select_all').prop('checked', false);
	}
}

$(document).ready(function(){

//delete
$('.pull-left button').click(function(){
	if (confirm("ban co chac la muon xoa khong?")) {
		var url = $(this).data('url');
		var token = $('body').data('token');
		var id = [];
		$(':checkbox:checked').each(function(i){
			id[i] = $(this).val();
		});
		//console.log(id);
		$.ajax({
			url: url,
			method:'POST',
			data:{id: id,_token: token},
			success:function(res){
				for(var i=0; i<id.length; i++){
					$('tr#'+id[i]+'').css('background-color','#ccc');
					$('tr#'+id[i]+'').fadeOut('slow');
				}
			}
		});

	}else {
		return false;
	}
});
//validate form
$('#validate').validate({

	rules:
	{
		title:
		{
			required:true,
			maxlength:2000
		},
		name:
		{
			required:true,
			maxlength:20
		},
		image_link:
		{
			required:true
		},
		categoriesId:
		{	
			required:true,
		},
		productsId:
		{	
			required:true,
			number:true
		},
		category_id:
		{	
			required:true,
			number:true
		},
		created_on:
		{	
			required:true,
			dateISO:true
		},
		created:
		{	
			required:true,
			dateISO:true
		},
		updated:
		{	
			required:true,
			dateISO:true
		},
		last_login:
		{	
			required:true,
			dateISO:true
		},
		updated_on:
		{	
			required:true,
			dateISO:true
		},
		groupsId:
		{	
			required:true,
			number:true
		},
		userId:
		{	
			required:true,
			number:true
		},
		ordering_count:
		{	
			required:true,
			number:true
		},
		active:
		{	
			required:true,
			number:true
		},
		initialPrice:
		{	
			required:true,
			number:true
		},
		discount:
		{	
			required:true,
			number:true
		},
		quantity:
		{	
			required:true,
			number:true
		},
		email:
		{	
			required:true,
			email:true
		},
		password:
		{	
			required:true
		},
		body:
		{	
			required:true
		},
		parsed:
		{	
			required:true
		},
		thumbnail:
		{	
			required:true
		},
		keywords:
		{	
			required:true
		},
		Comments_enabled:
		{
			required:true
		}
	},
	messages:
	{
		title:
		{
			required:"Please fill title here"
		},
		name:
		{
			required:"Please fill name here"
		},
		image_link:
		{
			required:"Please fill image_link here"
		},
		categoriesId:
		{
			required:"Please fill categoriesId here"
		},
		productsId:
		{
			required:"Please fill productsId here"
		},
		initialPrice:
		{
			required:"Please fill initialPrice here"
		},
		discount:
		{
			required:"Please fill discount here"
		},
		quantity:
		{
			required:"Please fill quantity here"
		},
		email:
		{
			required:"Please fill email here"
		},
		password:
		{
			required:"Please fill password here"
		},
		ordering_count:
		{
			required:"Please fill ordering_count here"
		},
		created:
		{
			required:"Please fill created here"
		},
		last_login:
		{
			required:"Please fill last_login here"
		},
		updated_on:
		{
			required:"Please fill updated_on here"
		}
	}

});

});



