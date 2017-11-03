<html>
<head>
	<title>Javascript 4 op een rij</title>
	<script type="text/javascript">
	
<!-- 
	var geel = true//kijken of geel of rood aan zet is
	var arij = 8
	var akolom = 10
	var arrVeld = new Array()
	var rijen
	var kolommen
	var knopKleur = 'yellow'
	rijen=prompt("Geef het aantal rijen op : ",5)
	kolommen=prompt("Geef het aantal kolommen op :",8)
	arij = rijen
	akolom = kolommen
	for(i = 0 ; i < akolom; i++){
		arrVeld[i] = new Array()
	}

	function plaatsSchijf(kolom){
		knopKleur = iif(geel,'red','yellow')
		rij = arrVeld[kolom].push(iif(geel,"geel","rood")) -1
		//toonkleur()
		toonVeld()
		controleer(kolom,rij)
		toonSpeler()
	}
	
/************
Functie die de controle uitvoert of er 4 blokken van dezelfde kleur op één rij staan
************/
	
function controleer(kolom,rij){
	var aantal = 0
/************
//vertikale controle
************/
		if(rij > 2){
			 if(geel){//controle of geel aan zet was
				for(i = 0 ; i <= rij ; i++){
					  if(arrVeld[kolom][i]=="geel"){//kijken of in het veld de waarde geel staat
					  	aantal++//wanneer er geel staat het aantal met 1 verhogen
						if(aantal == 4){
							alert("4 op een rij voor de gele blokken (vertikaal)")
						}
					  }
					  else aantal=0//wanneer het niet geel is de reeks terug op 0 zetten
				}	   
			 }else{//rood was hier aan zet
			 	for(i = 0 ; i <= rij ; i++){
					  if(arrVeld[kolom][i]=="rood"){
					  	aantal++
						if(aantal == 4){
							alert("4 op een rij voor de rode blokken (vertikaal)")
						}
					  }
					  else aantal=0
				}	   
			 }
		}
/************
//horizontale controle
************/
	aantal = 0	//aantal terug initialiseren want het aantal kan door de code hierboven meer dan 0 zijn
		if(geel){//controle of geel aan zet was
				for(i = 0 ; i < akolom ; i++){
					  if(arrVeld[i][rij]=="geel"){//kijken of in het veld de waarde geel staat
					  	aantal++//wanneer er geel staat het aantal met 1 verhogen
						if(aantal == 4){
							alert("4 op een rij voor de gele blokken (horizontaal)")
						}
					  }
					  else aantal=0//wanneer het niet geel is de reeks terug op 0 zetten
				}
			}else{	//rood was aan zet
				 for(i = 0 ; i < akolom ; i++){
					  if(arrVeld[i][rij]=="rood"){//kijken of in het veld de waarde rood staat
					  	aantal++//wanneer er rood staat het aantal met 1 verhogen
						if(aantal == 4){
							alert("4 op een rij voor de rode blokken (horizontaal)")
						}
					  }
					  else aantal=0//wanneer het niet rood is de reeks terug op 0 zetten
				} 
			}
/************
//diagonale controle van links naar rechts aflopend
************/

		aantal = 0 //aantal terug initialiseren want het aantal kan door de code hierboven meer dan 0 zijn
		var maxRijKol = (arij + akolom) - 5		//we moeten 5 aftrekken want de array begint vanaf 0
												//Hier wordt het rechtse gebied vastgelegd waar geen lijnen 
												//kunnen gemaakt worden
												
		var beginKolom = kolom + rij //controle waar diagonaal moet gestart worden
		//Het gebied bepalen waar er geen lijnen kunnen gemaakt worden
		
		if((kolom + rij) >= 3 && (kolom + rij) <= maxRijKol){
			if(beginKolom <= akolom-1){	//valt de beginkolom binnen de array?
				if(geel){	//controle of geel aan zet was
					//beginkolom - i  dient om de array niet onder 0 te laten starten
					for(i = 0 ; i < arij && beginKolom-i >= 0 ; i++){
						if(arrVeld[beginKolom-i][i]=="geel"){//kijken of in het veld de waarde geel staat
					  		aantal++	//wanneer er geel staat het aantal in de rij met 1 verhogen
							if(aantal == 4){
								alert("4 op een rij voor de gele blokken (diagonaal)")
							}
						}else{ aantal = 0} //het aantal terug op 0 zetten wanneer er een ander kleur tussenzit
					}
				}else{	//rood was aan zet
					for(i = 0 ; i < arij && beginKolom-i >= 0 ; i++){
						if(arrVeld[beginKolom-i][i]=="rood"){//kijken of in het veld de waarde roodl staat
					  		aantal++//wanneer er rood staat het aantal in de rij met 1 verhogen
							if(aantal == 4){
								alert("4 op een rij voor de rode blokken (diagonaal)")
							}
						}else aantal = 0
					}
				}
			}else{	//de beginrij zal niet op de eerste rij starten. We starten met een grotere rijindex dan 0
			var beginRij = beginKolom - (akolom-1)//De index van de rij bepalen
			beginKolom = akolom-1	//de index van de kolom op de laatste kolom zetten
			if(geel){	//controle of geel aan zet was
					//(beginkolom - i) + beginrij  dient om niet verder te lopen dan 0 in de kolomindex
					for(i = beginRij ; i < arij && (beginKolom-i)+beginRij >= 0 ; i++){
						
						if(arrVeld[(beginKolom-i)+beginRij][i]=="geel"){//kijken of in het veld de waarde geel staat
					  		aantal++//wanneer er geel staat het aantal met 1 verhogen
							if(aantal == 4){
								alert("4 op een rij voor de gele blokken (diagonaal)")
							}
						}else{ aantal = 0}
					}
				}else{	//rood was aan zet
					for(i = beginRij ; i < arij && beginKolom-i >= 0 ; i++){
						if(arrVeld[(beginKolom-i)+beginRij][i]=="rood"){//kijken of in het veld de waarde roodl staat
					  		aantal++//wanneer er rood staat het aantal met 1 verhogen
							if(aantal == 4){
								alert("4 op een rij voor de rode blokken (diagonaal)")
							}
						}else aantal = 0
					}  //einde for i
				}
			} 
		}
		
/************
//diagonale controle van links naar rechts oplopend
************/

aantal = 0 //aantal terug initialiseren want het aantal kan door de code hierboven meer dan 0 zijn
//bepalen in welke cel we zitten en of er van daaruit een lijn kan gemaakt worden
		  if(kolom==0 && rij > arij -4){
		  		//niets doen
		  }else if(kolom == 1 && rij > arij - 3){
		  		
		  }else if(kolom == 2 && rij > arij - 2){
		  		
		  }else if(kolom == akolom -1 && rij < 3){
		  		
		  }else if(kolom == akolom -2 && rij < 2){
		  		
		  }else if(kolom == akolom -3 && rij < 1){
		  		
		  }else{	//We starten in een cel waar een lijn kan gemaakt worden
		  		if(rij<=kolom){		 //lijn kan tot beneden lopen
					beginKolom = kolom - rij
					if(geel){  //geel was aan zet
						for(i = 0;i < arij && beginKolom + i < akolom; i++){
							  if(arrVeld[beginKolom+i][i]=="geel"){
							  	  aantal++
								  if(aantal==4){
								  	  alert("4 op een rij voor de gele blokken (diagonaal naar rechts)")
								  }
							  }else aantal=0
						} //einde for i
					}else{	  //rood was aan zet
						for(i = 0;i < arij && beginKolom + i < akolom; i++){
							  if(arrVeld[beginKolom+i][i]=="rood"){
							  	  aantal++
								  if(aantal==4){
								  	  alert("4 op een rij voor de rode blokken(diagonaal naar rechts)")
								  }
							  }else aantal=0
						}  //einde for i
					}
				}else{	   //rij kan niet tot beneden lopen
					var beginRij = rij - kolom
					beginKolom = 0
					if(geel){  //geel was aan zet
						for(i = 0 ; i + beginRij < arij && i + 1 < akolom ; i++){
							  if(arrVeld[i][beginRij+i]=="geel"){
							  	  aantal++
								  if(aantal==4){
								  	  alert("4 op een rij voor de gele blokken(diagonaal naar rechts)")
								  }
							  }else aantal=0
						} //einde for i
					}else{		  //rood was aan zet
						for(i = 0 ; i + beginRij < arij && i + 1 < akolom ; i++){
							  if(arrVeld[i][beginRij+i]=="rood"){
							  	  aantal++
								  if(aantal==4){
								  	  alert("4 op een rij voor de rode blokken(diagonaal naar rechts)")
								  }
							  }else aantal=0
						} //einde for i
					}	//einde kleurcontrole
				}
		  }  //einde diagonale controle van links naar rechts oplopend
}	//einde functie

/************
Functie die de vakjes terug wit maakt
************/

function maakControlBlank(kolom,rij){
		var kleur="white"
		arrVeld[kolom][rij]=""	
		return kleur		
	}
	
/************
Functie die de array initialiseert
************/
	
	function init(){
		for(i= 0 ; i < akolom ; i++){
			for(j = 0 ; j < arij ; j++){
				maakControlBlank(i,j)
			}
			toonVeld()
		}
		arrVeld.shift()
		for(i = 0 ; i < akolom; i++){
		arrVeld[i] = new Array()
	}
	}
	
/************
Functie die de kleur van de speler bepaalt
************/

	function toonSpeler(){
	 geel =!geel
	 divSpeler.innerHTML = "Beurt aan : <b>Speler " 
	 						+ iif(geel,"1 <font color='yellow'>(geel)</font>",
							"2 <font color='red'>(rood)") +"</b>"
	}

/************
Functie die de een waarde 'waar' teruggeeft wanneer de voorwaarde true is
en een waarde 'onwaar' wanneer de voorwaarde false is
************/

	function iif(voorwaarde,waar,onwaar){
		var terug = (voorwaarde) ? waar : onwaar
		return terug
	}

/************
Functie die de juiste kleur in de vakjes zet ook bij het begin van het spel
************/
	function maakControl(kolom,rij){
		var kleur="white"
		if(arrVeld[kolom][rij]=="geel") kleur="yellow"
		if(arrVeld[kolom][rij]=="rood") kleur="red"
		return kleur		
	}
	
	function toonkleur(){
		if(kleur == 'yellow')knopKleur = 'red'
		else knopKleur = 'yellow'
	}

// PRELOADING IMAGES
if (document.images) {
 img_on =new Image();  img_on.src ="KnopInit2.gif"; 
 img_off=new Image();  img_off.src="KnopInit.gif"; 
}

function handleOver() { 
 if (document.images) document.imgName.src=img_on.src;
}

function handleOut() {
 if (document.images) document.imgName.src=img_off.src;
}
	

/************
Functie die het speelveld aanmaakt met vakjes en knoppen
************/
	
	function toonVeld(){
		var strHTML = "<table >"
		strHTML += "<tr>"
		strHTML += "<td align=center width='150'>"
		strHTML += "<a href='#any_URL' onMouseOver='handleOver();return true;' onMouseOut='handleOut();return true;'>"
		strHTML += "<img src='knopInit.gif' width=138 height=37  border=0 img name='imgName'"
		strHTML += "alt='Klik hier om het raster leeg te maken' onclick='init()'></a></td>"
		strHTML += "</tr></table><table border='0' cellpadding='2' cellspacing='2'>"
		strHTML += "<tr>"
		for(knop = 0 ; knop < akolom ; knop++){
			 strHTML += "<td align=center width='50'><input style='width:50' type='button' value='" + (knop+1) + 
			 "' style='background:\""+knopKleur+"\"' onclick='plaatsSchijf(" + knop +")'></td>"
		}
		strHTML += "</tr></table><table border='1'>"
		
		for(var rij = arij-1 ; rij >= 0 ; rij--){
			strHTML += "<tr height='50'>"
			for(var kolom = 0 ; kolom < akolom ; kolom++){
				strHTML += "<td width='50' bgcolor='" + maakControl(kolom,rij)+"'>&nbsp</td>"
			}
			strHTML += "</tr>"
		}
		strHTML += "</table>"
		divSpel.innerHTML = strHTML
	}
	

 -->

</script>
</head>

<body onload="toonVeld()" bgcolor="#99CCFF#FFFFCC">
<div id="divSpeler">Beurt aan :  <b> speler 1 <font color='yellow'>(geel)</font><b></div>
<div id="divSpel"></div>


</body>
</html>
