var b = document.createElement("div");
function bachQuotesOn(){
	b.className = "bQuotes";
	b.innerHTML = "<p><cite>Колись і мене вела дорога пригод, але потім стріла влучила в моє коліно.</cite>(Охоронець Вайтрану)</p><p><cite>Капітан, його немає в списку, що з ним робити?...</cite>(Хадвар)</p><p><cite>Дай-но вгадаю, хтось вкрав твій солодкий рулет?</cite>(Охоронець Вайтрану)</p>";
	bach.insertBefore(b, document.getElementById("bachTable"));
}

function bachQuotesOff(){
	b.remove();
}

m = document.createElement("div"); 
function mozartQuotesOn(){
	m.className = "mQuotes";
	m.innerHTML = "<p><cite>Потрібно в будь-що вірити. Інакше жити не хочеться.</cite>(Vesemir)</p><p><cite>Зло - це зло. Менше, більше, середнє - однаково, пропорції умовні, а межі розмиті...</cite>(Geralt)</p><p><cite>Жити вічно не означає жити повним життям.</cite>(Olgerd von Everek)</p>";
	mozart.insertBefore(m, document.getElementById("mozartTable"));
}

function mozartQuotesOff(){
	m.remove();
}

bt = document.createElement("div"); 
function beethovenQuotesOn(){
	bt.className = "btQuotes";
	bt.innerHTML = "<p><cite>Від себе не втечеш. Минуле завжди з тобою ... як би далеко ти не пішов..</cite></p><p><cite>Я вижив, тому що вогонь всередині мене горів яскравіше, ніж навколо мене.</cite></p><p><cite>Втрачаючи час із задоволенням, ти його не втрачаєш.</cite></p><p><cite>Передбачувано непокірним спільнотою можна управляти так само легко, як і безумовно відданим..</cite></p><p><cite>Чоловік змінюється під впливом доріг, по яких він йде..</cite></p>";
	beethoven.insertBefore(bt, document.getElementById("beethovenTable"));
}

function beethovenQuotesOff(){
	bt.remove();
}


function addPicture(){
		var im = document.createElement("img"); 
		im.src="image_4.jpg";
		im.className = "mx-auto d-block"
	document.getElementById("main").appendChild(im);
}

function validateForm(){

	var sname = document.getElementById('surname').value;
	if (sname==null || sname=="" || sname==" ")
	{
		alert("Введіть прізвище");
		return false;
	}

	for (let i = 0; i < sname.length; i++) {
		if(!(sname[i].toUpperCase() != sname[i].toLowerCase())) {
			alert("Прізвище введено неправильно");
			return false;
		}
	}


	var name = document.getElementById('name').value;
	if (name==null || name=="" || name==" ")
	{
		alert("Введіть ім'я");
		return false;
	}

	for (let i = 0; i < name.length; i++) {
		if(!(name[i].toUpperCase() != name[i].toLowerCase())) {
			alert("Ім'я введено неправильно");
			return false;
		}
	}


	var email = document.forms["dform"]["mail"].value;
	if(email==null || email=="" || email==" "){
		alert("Введіть електронну адресу");
		return false;
	}

	var adr_pattern = /[0-9a-z_-]+@[0-9a-z_-]+\.[a-z]{2,5}/i;
	
	if(adr_pattern.test(email)==false){
		alert("Електронна адреса введена неправильно");
		return false;
	}
	
	if(!(document.getElementById("componist1").checked || document.getElementById("componist2").checked || document.getElementById("componist3").checked || document.getElementById("componist4").checked || document.getElementById("componist5").checked)){
		alert("Виберіть композитора");
		return false;
	}
	
	var comment = document.getElementById('subject').value;
	if (comment==null || comment=="" || comment==" ")
	{
		alert("Введіть Ваш коментар. Він для нас є дуже важливий");
		return false;
	}
}

function canvasText(){
	var txt=document.getElementById("myCanvas");
	var ct = txt.getContext("2d");
	ct.font="20px Segoe Script";
	ct.fillText("Good Game!.", 20,50);
}
canvasText();

function addHistogram(){
	var myCanvas2 = document.getElementById("myCanvas2");
	if(myCanvas2.style.display=="none"){
		myCanvas2.width = 300;
		myCanvas2.height = 300;
		myCanvas2.style.display ="";
		var ctx = myCanvas2.getContext("2d");
		function drawLine(ctx, startX, startY, endX, endY,color){
		    ctx.save();
		    ctx.strokeStyle = color;
		    ctx.beginPath();
		    ctx.moveTo(startX,startY);
		    ctx.lineTo(endX,endY);
		    ctx.stroke();
		    ctx.restore();
		}
		function drawBar(ctx, upperLeftCornerX, upperLeftCornerY, width, height,color){
		    ctx.save();
		    ctx.fillStyle=color;
		    ctx.fillRect(upperLeftCornerX,upperLeftCornerY,width,height);
		    ctx.restore();
		}
		var years = {
		    "TESV:S - 75": 75,
		    "TW3:WH - 55": 55,
		    "F:NV - 49": 49,
		};
		var Barchart = function(options){
		    this.options = options;
		    this.canvas = options.canvas;
		    this.ctx = this.canvas.getContext("2d");
		    this.colors = options.colors;
		    this.draw = function(){
		        var maxValue = 0;
		        for (var categ in this.options.data){
		            maxValue = Math.max(maxValue,this.options.data[categ]);
		        }
		        var canvasActualHeight = this.canvas.height - this.options.padding * 2;
		        var canvasActualWidth = this.canvas.width - this.options.padding * 2;
		        
		        var gridValue = 0;
		        while (gridValue <= maxValue){
		            var gridY = canvasActualHeight * (1 - gridValue/maxValue) + this.options.padding;
		            drawLine(
		                this.ctx,
		                0,
		                gridY,
		                this.canvas.width,
		                gridY,
		                this.options.gridColor
		            );
		            
		            this.ctx.save();
		            this.ctx.fillStyle = this.options.gridColor;
		            this.ctx.textBaseline="bottom"; 
		            this.ctx.font = "bold 10px Arial";
		            this.ctx.fillText(gridValue, 10,gridY - 2);
		            this.ctx.restore();
		            gridValue+=this.options.gridScale;
		        }      
		        
		        var barIndex = 0;
		        var numberOfBars = Object.keys(this.options.data).length;
		        var barSize = (canvasActualWidth)/numberOfBars;
		        for (categ in this.options.data){
		            var val = this.options.data[categ];
		            var barHeight = Math.round( canvasActualHeight * val/maxValue) ;
		            drawBar(
		                this.ctx,
		                this.options.padding + barIndex * barSize,
		                this.canvas.height - barHeight - this.options.padding,
		                barSize,
		                barHeight,
		                this.colors[barIndex%this.colors.length]
		            );
		            barIndex++;
		        }
		          
		        
		        barIndex = 0;
		        var legend = document.querySelector("legend[for='myCanvas2']");
		        var ul = document.createElement("ul");
		        legend.append(ul);
		        for (categ in this.options.data){
		            var li = document.createElement("li");
		            li.style.listStyle = "none";
		            li.style.borderLeft = "20px solid "+this.colors[barIndex%this.colors.length];
		            li.style.padding = "5px";
		            li.textContent = categ;
		            ul.append(li);
		            barIndex++;
		        }
		    }
		}
		var myBarchart = new Barchart(
		    {
		        canvas:myCanvas2,
		        padding:10,
		        gridScale:10,
		        gridColor:"#eeeeee",
		        data:years,
		        colors:["#BE7BD8","#44D8D8", "#FDD7E4 ","#E8E837", "#7EE86D"]
		    }
		);
		myBarchart.draw();
	}
}

function changeThema(cssFile, cssLinkIndex){
	hideBtn();
	var oldlink = document.getElementsByTagName("link").item(cssLinkIndex);
	var newlink = document.createElement("link");
	newlink.setAttribute("rel", "stylesheet");
	newlink.setAttribute("type", "text/css");
	newlink.setAttribute("href", cssFile);
	document.getElementsByTagName("head").item(0).replaceChild(newlink, oldlink);
}
function hideBtn() {
	var btns = document.getElementsByClassName('togle-img');
	console.log(btns);
	for(i = 0; i < btns.length; ++i) {
		if (btns[i].classList.contains('inactive')) {
			btns[i].classList.remove('inactive');
		} else {
			btns[i].classList.add('inactive');
		}
	}
}

window.onscroll = function(){
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("top").style.display = "block";
  } else {
    document.getElementById("top").style.display = "none";
  }
};

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

$(document).ready(function() {
    $('#send').click(function() {
        var textValue = $('#subj').val();
        $.ajax({
            url: 'comp.php',
            method: 'POST',
            data: {massiv_text: textValue},

	        success: function(data) {
	            alert(data);
	        }
	   	});
	});

	$('#changeStyle').click(function(){
		$('#myCanvas').css({"width": "40%","margin-left": "30%","margin-right": "30%"});
		$('#main').css("background", "rgba(255,155,150,1)");
		$('.table-hover').attr("style", "background:#EAEAEA");
	});

	$('img').mouseover(function(){
		$('.im').css("width","300px");
	});

	$('img').mouseout(function(){
		$('.im').css("width","250px");
	});
});

var app = angular.module("myCompositions", []); 
app.controller("myCmp", function($scope) {
    $scope.compositions = ["Marty Robbins - Big Iron", "The Witcher 3 Wild Hunt Theme", "The Song of the Dragonborn"];
    $scope.addItem = function () {
        $scope.errortext = "";
        if (!$scope.addMe) {return;}        
        if ($scope.compositions.indexOf($scope.addMe) == -1) {
            $scope.compositions.push($scope.addMe);
        } else {
            $scope.errortext = "Дана композиція уже є у списку.";
        }
    }
    $scope.removeItem = function (x) {
        $scope.errortext = "";    
        $scope.compositions.splice(x, 1);
    }
});

function showCustomer(str) {
      var xhttp; 
      if (str == "") {
        document.getElementById("txtHint").innerHTML = "";
        return;
      }
      xhttp = new XMLHttpRequest();
      xhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            const text = this.responseText;
            const imageIndex = text.indexOf('<');
            const image = text.slice(imageIndex);
            const description = text.slice(0, imageIndex);
            document.getElementById("txtHint").innerHTML = description;
            document.getElementsByClassName("cImg")[0].innerHTML = image;
        }
      }
      xhttp.open("GET", "inf.php?q="+str, true);
      xhttp.send();
}
