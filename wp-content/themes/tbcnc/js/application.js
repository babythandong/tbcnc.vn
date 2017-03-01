var frontEnd = {
	select:function(obj){
		var url = obj.val();
		if(url != ''){
			window.top.location.href = url;
		}		
	}
}