var status = 0;
var showMore = function(){
	var more = document.getElementById('more-menu');

	if(!status){
		more.style.display = 'block';
		status = 1;
	}
	else{
		more.style.display = 'none';
		status = 0;
	}

}
