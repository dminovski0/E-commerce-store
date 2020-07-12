kvantitet = []
iminja = []
cena = []

function dodadi0()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet0').value))
	iminja.push("Alpha Romeo")
	cena.push(15000)
	prikazi1()
}

function prikazi1()
{
	alert("a")
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement0(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement0(a){
	iminja.pop(a, 1);
	kvantitet.pop(a, 1)
	cena.pop(a, 1)
	prikazi1()
}
function dodadi1()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet1').value))
	iminja.push("Dodge")
	cena.push(22000)
	prikazi1()
}


function dodadi2()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet2').value))
	iminja.push("Ferrari")
	cena.push(19500)
	prikazi1()
}

function dodadi3()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet3').value))
	iminja.push("Ford")
	cena.push(24900)
	prikazi1()
}


function dodadi4()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet4').value))
	iminja.push("Ford Mustang")
	cena.push(29000)
	prikazi1()
}


function dodadi5()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet5').value))
	iminja.push("Hummer")
	cena.push(12750)
	prikazi1()
}


function dodadi6()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet6').value))
	iminja.push("Jaguar")
	cena.push(31000)
	prikazi1()
}


function dodadi7()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet7').value))
	iminja.push("Lamborghini")
	cena.push(25000)
	prikazi1()
}


function dodadi8()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet8').value))
	iminja.push("Lexus")
	cena.push(34000)
	prikazi1()
}


function dodadi9()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet9').value))
	iminja.push("Lotus")
	cena.push(26500)
	prikazi1()
}


function dodadi10()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet10').value))
	iminja.push("Porsche")
	cena.push(38000)
	prikazi1()
}


function dodadi11()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet11').value))
	iminja.push("Rinspeed")
	cena.push(13000)
	prikazi1()
}


function dodadi12()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet12').value))
	iminja.push("Volvo")
	cena.push(14500)
	prikazi1()
}
