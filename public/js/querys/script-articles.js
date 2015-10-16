$(function  () {
	$("#category_id").change(function() {
	    $("#subcategory_id").empty();
	    $.getJSON('/subcategory/'+$("#category_id").val()+'/category',function(data){
	        //console.log(JSON.stringify(data));
	        $(data).each(function(k,v){
	            $("#subcategory_id").append("<option value=\""+v.id+"\">"+v.title+"</option>");
	        }).removeAttr("disabled");
	    });
	});
});