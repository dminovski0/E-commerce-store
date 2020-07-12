kvantitet = []
iminja = []
cena = []
var re = new RegExp("[0-9]");
x = document.cookie
y = x.substring(0, x.indexOf('PHP'))
y = y.slice(0, -2)
alert(x)
alert(y)
document.getElementById('koshnica').innerHTML = y
/*if(x!="")
{
	j = ","
	ki = x.split(/[?,!]/)
	alert(ki)
	z = x.replace(/,/g, '');
	y = Array.from(z)
	alert(y)
	for(k=0;k<ki.length;++k)
	{
	cena = cena.concat(ki[k*3+2])
	iminja = iminja.concat(ki[k]*3)
	kvantitet = kvantitet.concat(ki[k*3+1])
	alert(y[0])
}

}
*/
/*alert(cena)
alert(iminja)
alert(kvantitet)*/
//prikazi0()
function dodadi0()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet0').value))
	iminja.push("Alpha Romeo")
	cena.push(15000)
	prikazi0()
}

function prikazi0()
{
	
	podatoci = '<table><h3>Кошница</h3><tr><th>Име</th><th>Квантитет</th><th>Цена</th><th>Вкупно</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		if (re.test(kvantitet[i]) != true)
			kvantitet[i]=0
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement0(" + i + ")'>Избриши</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci
	//for(l=0;l<kvantitet.length;l++)
	document.cookie = podatoci

}

function delElement0(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi0()
}
function dodadi1()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet1').value))
	iminja.push("Dodge")
	cena.push(22000)
	prikazi0()
}

function prikazi1()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement1(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement1(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi2()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet2').value))
	iminja.push("Ferrari")
	cena.push(19500)
	prikazi0()
}

function prikazi2()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement2(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement2(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi3()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet3').value))
	iminja.push("Ford")
	cena.push(24900)
	prikazi0()
}

function prikazi3()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement3(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement3(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi4()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet4').value))
	iminja.push("Ford Mustang")
	cena.push(29000)
	prikazi0()
}

function prikazi4()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement4(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement4(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi5()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet5').value))
	iminja.push("Hummer")
	cena.push(12750)
	prikazi0()
}

function prikazi5()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement5(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement5(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi6()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet6').value))
	iminja.push("Jaguar")
	cena.push(31000)
	prikazi0()
}

function prikazi6()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement6(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement6(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi7()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet7').value))
	iminja.push("Lamborghini")
	cena.push(25000)
	prikazi0()
}

function prikazi7()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement7(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement7(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi8()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet8').value))
	iminja.push("Lexus")
	cena.push(34000)
	prikazi0()
}

function prikazi8()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement8(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement8(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi9()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet9').value))
	iminja.push("Lotus")
	cena.push(26500)
	prikazi0()
}

function prikazi9()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement9(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement9(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi10()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet10').value))
	iminja.push("Porsche")
	cena.push(38000)
	prikazi0()
}

function prikazi10()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement10(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement10(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi11()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet11').value))
	iminja.push("Rinspeed")
	cena.push(13000)
	prikazi0()
}

function prikazi11()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement11(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement11(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}

function dodadi12()
{
	kvantitet.push(parseInt(document.getElementById('kvantitet12').value))
	iminja.push("Volvo")
	cena.push(14500)
	prikazi0()
}

function prikazi12()
{
	podatoci = '<table><tr><th>Ime</th><th>Kvantitet</th><th>Cena</th><th>Vkupno</th></tr>';

	total = 0

	for (i=0; i < kvantitet.length; i++){
		total += kvantitet[i] * cena[i]
		podatoci += "<tr><td>" + iminja[i] + "</td><td>" + kvantitet[i] + "</td><td>" + cena[i] + "</td><td>" + kvantitet[i] * cena[i] + "</td><td><button onclick='delElement12(" + i + ")'>Delete</button></td></tr>"
	}

	podatoci += '<tr><td></td><td></td><td></td><td>' + total + '</td></tr></table>'

	document.getElementById('koshnica').innerHTML = podatoci

}

function delElement12(a){
	iminja.splice(a, 1);
	kvantitet.splice(a, 1)
	cena.splice(a, 1)
	prikazi()
}
