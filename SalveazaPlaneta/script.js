	var butoane = document.getElementById('chestionar');
	var detalii = document.getElementById('detalii');
	var masina = document.getElementById('masina');
	var plimbarea = document.getElementById('plimbarea');
	var energie = document.getElementById('energie');
	var reciclare = document.getElementById('reciclare');
	var ulei = document.getElementById('ulei');
	var copaci = document.getElementById('copaci');
	var foc = document.getElementById('foc');
	var curentelectric = document.getElementById('curentelectric');
	var gaz = document.getElementById('gaz');
	var parere = document.getElementById('parere');
	var rezultat = document.getElementById('rezultat');

	var score = 0;

	var nume,prenume,email,data_nasterii,hobby;
	var r1,r2,r3,r4,r5,r6,r7,r8,r9,r10,r11,r14;
	var raspuns1="", raspuns2="", raspuns3="", raspuns4="", raspuns5="", raspuns6="";
	var co2e_masina,CO2_masina,consum_masina,Range,curentelectric1,CO2_curent,gaze,CO2_gaze;

function utilizatorNou(){
	
	butoane.style.display = "none";
	detalii.style.display = "block";

}


function urmatorulPrimul(){

	detalii.style.display = "none";
	masina.style.display = "block";
	nume = document.getElementById('nume').value;
	prenume = document.getElementById('prenume').value;
	email = document.getElementById('email').value;
	data_nasterii = document.getElementById('data_nasterii').value;
	hobby = document.getElementById('hobby').value;

}


function urmatorulDoi(){
	masina.style.display = "none";
	plimbarea.style.display = "block";
	consum_masina = document.getElementById('consum_masina').value;
	if(consum_masina==0)
		{
			co2e_masina=0;
		}
	else
		{	
			co2e_masina = consum_masina*2.33/100;
		}

	if(co2e_masina<=0.1864)
		{
			score=10;
		}
			else
	if(co2e_masina>0.1864)
		{
			score=5;
		}
}


function urmatorulTrei(){
	
	energie.style.display = "block";
	plimbarea.style.display = "none";
	r1 = document.getElementById('r1');
	r2 = document.getElementById('r2');
	r3 = document.getElementById('r3');

	if(r1.checked)
	{
		score=score+10;
		raspuns1 = r1.value;
	}

	if(r2.checked)
	{
		score=score+5;
		raspuns1 = r2.value;
	}

	if(r3.checked)
	{
		score=score+5;
		raspuns1 = r3.value;
	}
}


function urmatorulPatru(){
	
	energie.style.display = "none";
	reciclare.style.display = "block";
	r4 = document.getElementById('r4');
	r5 = document.getElementById('r5');

	if(r4.checked)
	{
		score=score+10;
		raspuns2 = r4.value;
	}
	else
	if(r5.checked)
	{
		score=score+0;
		raspuns2 = r5.value;
	}
}


function urmatorulCinci(){

	reciclare.style.display = "none";
	ulei.style.display = "block";
	r6 = document.getElementById('r6');
	r7 = document.getElementById('r7');
	r8 = document.getElementById('r8');

	if(r6.checked)
		{
			score=score+0;
			raspuns3 = r6.value;
		}

	else
	if(r7.checked)
		{
			score=score+5;
			raspuns3 = r7.value;
		}

	else
	if(r8.checked)
		{
			score=score+10;
			raspuns3 = r8.value;
		}
}


function urmatorulSase(){
	
	copaci.style.display = "block";
	ulei.style.display = "none";
	r9 = document.getElementById('r9');
	r10 = document.getElementById('r10');
	
	if(r9.checked)
		{
			score=score+0;
			raspuns4 = r9.value;
		}
	else
	if(r10.checked)
		{
			score=score+10;
			raspuns4 = r10.value;
		}
}


function urmatorulSapte(){
	
	foc.style.display = "block";
	copaci.style.display = "none";
	Range = document.getElementById('Range').value;
	if(Range>=5)
		{
			score=score+10;
		}
	else
	if(Range<5)
		{
			score=score+7;
		}
}


function urmatorulOpt(){
	
	foc.style.display = "none";
	curentelectric.style.display = "block";
	r11 = document.getElementById('r11');
	r12 = document.getElementById('r12');
	if(r11.checked)
		{
			score=score+0;
			raspuns5 = r11.value;
		}
	else
	if(r12.checked)
		{
			score=score+10;
			raspuns5 = r12.value;
		}
}


function urmatorulNoua(){

	curentelectric.style.display = "none";
	gaz.style.display = "block";
	curentelectric1 = document.getElementById('curentelectric1').value;
	CO2_curent = 0.306 * curentelectric1;

	if(CO2_curent<=33.66)
		{
			score=score+10;
		}
	else
	if(CO2_curent>=33.66)
		{
			score=score+3;
		}	
}


function urmatorulZece(){
	
	parere.style.display = "block";
	gaz.style.display = "none";
	gaze = document.getElementById('gaze').value;

	CO2_gaze = 1.9 * gaze;

	if(CO2_gaze<=570)
		{
			score=score+10;
		}
	else
	if(CO2_gaze>570)
		{
			score=score+1;
		}
}


function urmatorulFinal(){
	parere.style.display="none";
	rezultat.style.display="block"
	r13 = document.getElementById('r13');
	r14 = document.getElementById('r14');

	if(r13.checked)
	{
		score=score+10;
		raspuns6 = r13.value;
	}
	else
	if(r14.checked)
	{
		score = score+0;
		raspuns6 = r14.value;
	}

	var table = document.getElementsByTagName('table')[0];
	var newRow1 = table.insertRow(0);
	var newRow = table.insertRow(1);

	newRow1.style.fontWeight = "bold";

	var cel1 = newRow.insertCell(0);
	var cel2 = newRow.insertCell(1);
	var cel3 = newRow.insertCell(2);
	var cel4 = newRow.insertCell(3);
	var cel5 = newRow.insertCell(4);
	var cel6 = newRow.insertCell(5);
	var cel7 = newRow.insertCell(6);
	var cel8 = newRow.insertCell(7);
	var cel9 = newRow.insertCell(8);
	var cel10 = newRow.insertCell(9);
	var cel11 = newRow.insertCell(10);
	var cel12 = newRow.insertCell(11);
	var cel13 = newRow.insertCell(12);

	var cela = newRow1.insertCell(0);
	var celb = newRow1.insertCell(1);
	var celc = newRow1.insertCell(2);
	var celd = newRow1.insertCell(3);
	var cele = newRow1.insertCell(4);
	var celf = newRow1.insertCell(5);
	var celg = newRow1.insertCell(6);
	var celh = newRow1.insertCell(7);
	var celj = newRow1.insertCell(8);
	var celk = newRow1.insertCell(9);
	var cell = newRow1.insertCell(10);
	var celm = newRow1.insertCell(11);
	var celn = newRow1.insertCell(12);

	cel1.innerHTML = nume;
	cel2.innerHTML = prenume;
	cel3.innerHTML = parseFloat(co2e_masina).toPrecision(3)*1000+" gCO2e/km";
	cel4.innerHTML = raspuns1;
	cel5.innerHTML = raspuns2;
	cel6.innerHTML = raspuns3;
	cel7.innerHTML = raspuns4;
	cel8.innerHTML = Range;
	cel9.innerHTML = raspuns5;
	cel10.innerHTML = parseFloat(CO2_curent).toPrecision(3)+" kg CO2e";
	cel11.innerHTML = CO2_gaze+" kg CO2";
	cel12.innerHTML = raspuns6;
	cel13.innerHTML = score;
	CO2_masina = parseFloat(co2e_masina).toPrecision(3)+" gCO2e pe km";
	CO2_curent=parseFloat(CO2_curent).toPrecision(3)+" kg CO2e";
	CO2_gaze = CO2_gaze+" kg CO2";

	
	cela.innerHTML ="Nume";
	celb.innerHTML = "Prenume";
	celc.innerHTML = "Emisie CO2 la mașină.";
	celd.innerHTML = "Care răspunsuri ți se potrivesc ție mai bine?";
	cele.innerHTML = "Folosești panouri solare?";
	celf.innerHTML = "Cât de mult reciclezi?";
	celg.innerHTML = "Ce faci cu uleiul alimentar utilizat?";
	celh.innerHTML = "Câți copaci plantezi de obicei?";
	celj.innerHTML = "Arzi diverse deșeuri în interioul unei clădiri sau în afara sa?";
	celk.innerHTML = "Emisie CO2 la energie electrică.";
	cell.innerHTML = "Emisie CO2 la gaze.";
	celm.innerHTML = "Ești dispus să renunți la anumite plăceri numai ca să îți salvezi planeta?";
	celn.innerHTML = "Scor";

	document.getElementById("endresult").value = score;
	
	document.getElementById("nume1").value = nume;
	document.getElementById("prenume1").value = prenume;
	document.getElementById("email1").value = email;
	document.getElementById("data_nasterii1").value = data_nasterii;
	document.getElementById("hobby1").value = hobby;
	document.getElementById("CO2_masina1").value = CO2_masina;
	document.getElementById("raspuns11").value = raspuns1;
	document.getElementById("raspuns21").value = raspuns2;
	document.getElementById("raspuns31").value = raspuns3;
	document.getElementById("raspuns41").value = raspuns4;
	document.getElementById("Range1").value = Range;
	document.getElementById("raspuns51").value = raspuns5;
	document.getElementById("CO2_curent1").value = CO2_curent;
	document.getElementById("CO2_gaze1").value = CO2_gaze;
	document.getElementById("raspuns61").value = raspuns6;
	document.getElementById("score1").value = score;
}


