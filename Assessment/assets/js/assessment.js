//window.alert("Lalalalala");

setInterval(function(){
    x = (x === images.length - 1) ? 0 : x + 1;
    for(var i=0; i<images.length-1; i++){
		var jj = i+x;
		if(jj > images.length-1){jj = jj - images.length;}
		document.getElementById("member"+(i+1)).src = images[jj];	
	}
},3000);
var images = [], x = -1;

for(var no = 0; no < 7; no++){
    images[no] = "sites/all/themes/Assessment/assets/images/members/members-"+ (no+1) +".png";
}

