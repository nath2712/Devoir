var MonTableau = ["ui","non"];
var MonTableau2 = [];

function AjoutTableChaine(a){
	
	
	for (let i = 0; i < MonTableau.length; i++) {
		
		
		MonTableau[i] = MonTableau[i] + 1;
		
	}
	MonTableau = MonTableau+a
	
}


alert(AjoutTableChaine("hello"));
alert (MonTableau);



function SuppTableChaine(a){
	
	
	while (MonTableau[i] == a ){ 
		
	for(let i = 0; i < MonTableau.length; i++) {
		
		
		MonTableau[i] = MonTableau[i] + 1;
		
	}
	MonTableau[i] = MonTableau[i]-a
	}
}

alert(SuppTableChaine("hello"));




