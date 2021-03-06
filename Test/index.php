<!DOCTYPE html>
<html lang="ukr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Найпопулярніші комп'ютерні ігри</title>
	<link href="style.css" rel="stylesheet" type="text/css"/>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
	
</head>
<body>

<?php
        if(file_exists("cnt.dat"))
        {
          $exist_file = fopen("cnt.dat", "r");
          $new_count = fgets($exist_file, 255);
          $new_count++;
          fclose($exist_file);
          
          echo "<p id='count'>$new_count people have visited this page</p>";
          $exist_count = fopen("cnt.dat", "w");
          fputs($exist_count, $new_count);
          fclose($exist_count);
        }
        else
        {
            $new_file = fopen("cnt.dat", "w");
            fputs($new_file, "1");
            fclose($new_file);
        }
?>

    
    	<?php if(!isset ($_SESSION['session_username'])){
    		echo "<a href=\"login.php\">Вхід</a>    ";
    		echo "<a href=\"register.php\">Реєстрація</a>";
    	}else{
			echo "<a href=\"logout.php\">Вихід</a>";
    	}?>
    

	<img  src="gamepad.jpg" class="togle-img inactive style-img" onclick="changeThema('style.css', 0)">
    <img src="games.jpg" class="togle-img style-img " onclick="changeThema('style2.css', 0)">
	<div id="main"> 
		<h1 id="comphead" style=" text-align: center;">Комп'ютерні ігри</h1>

		<div  id="bach">
			<h3 >1.The Elder Scrolls V: Skyrim</h3>
			<p><img  class="im rounded" id="componistsImg" src="бах/Skyrim.jpg" alt="TESV" title="VideoGame, The Elder Scrolls V: Skyrim" style="float: left; width: 250px" />
			<b>The Elder Scrolls V: Skyrim</b> (з англ. Стародавні Сувої V: Скайрім; також The Elder Scrolls V або Skyrim; скорочено TESV: Skyrim або TESV) — рольова відеогра, розроблена Bethesda Game Studios і опублікована Bethesda Softworks. Це п'ята гра в серії The Elder Scrolls, попередньою була The Elder Scrolls IV: Oblivion. Гра вийшла 11 листопада 2011 для Microsoft Windows, PlayStation 3 та Xbox 360. Влітку 2016 було анонсоване перевидання The Elder Scrolls V: Skyrim – Special Edition зі значно покращенною графікою. Реліз перевидання відбудеться 28 жовтня 2016 для платформ PC, PlayStation 4 та Xbox One. Власники повної ліцензійної гри на PC отримають перевидання безкоштовно.</p>

			<p>Головна лінія сюжету Skyrim присвячена намаганням головного героя перемогти Алдуїна, старшого сина головного бога Тамріеля Акатоша. За пророцтвом Алдуїн знищить світ. Події гри відбуваються в провінції Скайрим через 200 років після подій Oblivion. У той час у Скайримі починається громадянська війна, що розпочалася з убивства Верховного короля. Skyrim має відкритий кінець, як це властиво всій серії. Гравець може при бажанні досліджувати світ, замість виконання завдань основного квесту.</p>

			<p>Основним елементом гри є розвиток героя. На початку гравець обирає для свого героя одну з людських, ельфійських або зооморфічних рас, у кожної з яких є свої природні задатки. Крім того гравець має змогу дещо змінити те, як виглядатиме його герой. Далі перед гравцем стоїть завдання покращувати «вміння» свого героя. Ці «вміння» задаються числовими характеристиками, й відповідають можливостям героя у відповідних областях діяльності. Усі «вміння» поділені на катерогії, що відподають бою, магії та непомітності.</p>
				
			<p><em><a href="https://uk.wikipedia.org/wiki/The_Elder_Scrolls_V:_Skyrim" class=" btn btn-link" >Детальніше</a></em></p>

			<button class="button btn btn-outline-primary" onclick="bachQuotesOn()">Показати цитати</button>
			<button class="button btn btn-outline-primary" onclick="bachQuotesOff()">Приховати цитати</button>

			<p></p>
			<table id="bachTable"  class="table-hover table-responsive-sm ">
				<thead >
					<tr><th>Найвідоміші саундтреки</th><th>Аудіо файл</th></tr>
				</thead>
				<tbody>
					<tr><td>"The Song of the Dragonborn"</td><td><audio controls><source src="бах/Skyrim_The_Song_of_the_Dragonborn.mp3" type="audio/mp3"></audio></td></tr>
				</tbody>
			</table>
		</div>

		<div  id="mozart">
			<h3>2.The Witcher 3: Wild Hunt</h3>
			<p><img class="im rounded float-right" id="componistsImg" src="моцарт/witcher.jpg" alt="TW3:WH" title="VideoGame, The Witcher 3: Wild Hunt" style="float: left; width: 230px" />
			Рольова відеогра, розроблена польською компанією CD Projekt RED за мотивами серії романів «Відьмак» письменника Анджея Сапковського, продовження відеоігор «Відьмак» і «Відьмак 2: Вбивці королів». Завершальна частина трилогії. Вихід гри був запланований на 2014 рік, але потім було прийнято рішення про перенесення випуску на лютий 2015 року. Зрештою, остаточною датою було обрано 19 травня. За словами розробників, на консолях сьомого покоління Xbox 360 і PlayStation 3 гра виходити не буде.
				Станом на квітень-травень 2015 року The Witcher 3: Wild Hunt стала найшвидше продаваною відеогрою Великої Британії. Станом на 2017 рік продано понад 20 мільйонів копій. Гра набагато частіше звертається до літературного першоджерела, ніж попередні частини.</p>

			<p><b>Ігровий процес</b> Третя частина серії поєднує в собі нелінійний сюжет і відкритий ігровий світ, який у тридцять разів більший, ніж світ Відьмака 2. Для пересування можна використати різний транспорт, наприклад, кобилу Плітку або човен. Проходження основної сюжетної лінії займає близько 50 годин гри. Побічні квести займають приблизно стільки ж. За цей час герой може розвинутись до максимального 35-го рівня.</p>	

			<p><em><a href="https://uk.wikipedia.org/wiki/The_Witcher_3:_Wild_Hunt" class=" btn btn-link">Детальніше</a></em></p>

			<button class="button btn btn-outline-primary" onclick="mozartQuotesOn()">Показати цитати</button>
			<button class="button btn btn-outline-primary" onclick="mozartQuotesOff()">Приховати цитати</button>
			<p></p>
			<table id="mozartTable" class="table-hover table-responsive-sm ">
				<thead>
					<tr><th>Найвідоміші саундтреки</th><th>Аудіо файли</th></tr>
				</thead>
				<tbody>
					<tr><td>"The Witcher 3 Wild Hunt Theme"</td><td><audio controls><source src="моцарт/The_Witcher_3_Wild_Hunt_Theme.mp3"type="audio/mp3"></audio></td></tr>
				</tbody>
			</table>
		</div>

		<div  id="beethoven">
			<h3>3.Fallout: New Vegas</h3>
			<p><img class = "im rounded" id="componistsImg" src="бетховен/vegas.jpg" alt="F:NV" title="VideoGame, Fallout: New Vegas" style="float: left; width: 250px"/>
			(укр. Радіоактивні опади: Новий Вегас) — відеогра жанру Action RPG з відкритим світом, розроблена студією Obsidian Entertainment та видана компанією Bethesda Softworks. Вийшла на Microsoft Windows, PlayStation 3 та Xbox 360 у жовтні 2010 року. Події відбуваються на постапокаліптичному просторі навколо Лас-Вегаса, штат Невада, США.</p>
			<p><b>Fallout: New Vegas</b>  Хоч гра і базується на тому ж рушії, що і попередня гра серії, New Vegas не є прямим продовженням Fallout 3, однак гра використовує ту ж саму рольову систему. У гру повернулись багато елементів з попередніх ігор серії, бо багато співробітників Obsidian Entertainment раніше працювали у студії Black Isle Studios, яка розробляла Fallout та Fallout 2.</p>
			<p>Грі на даний час належить рекорд по кількості діалогів серед рольових ігор. New Vegas містить близько 65 000 рядків діалогів, таким чином перемігши за кількістю свого попередника і попереднього рекордсмена Fallout 3 в якому міститься 40 000.</p>
			<p>Гравець грає людиною, відомою просто як "Кур'єр", що працює у «Мохаве Експрес». Одного разу Кур'єру пропонують доставити загадкову "платинову фішку" у Нью-Вегас, але дорогою він втрапляє у засідку Бенні (озвучений Меттью Перрі), керівника одного з казино в Нью-Вегасі, який краде фішку, стріляє в голову Кур'єру і йде, заливши гравця в неглибокій могилі.  </p>

			<p><em><a href="https://uk.wikipedia.org/wiki/Fallout:_New_Vegas" class=" btn btn-link">Детальніше</a></em></p>

			<button class="button btn btn-outline-primary" onclick="beethovenQuotesOn()">Показати цитати</button>
			<button class="button btn btn-outline-primary" onclick="beethovenQuotesOff()">Приховати цитати</button>
			<p></p>

			<table id="beethovenTable" class="table-hover table-responsive-sm ">
				<thead>
					<tr><th>Найвідоміші саундтреки</th><th>Аудіо файли</th></tr>
				</thead>
				<tbody>
					<tr><td>"Marty Robbins - Big Iron"</td><td><audio controls><source src="бетховен/Marty_Robbins_-_Big_Iron.mp3" type="audio/mp3"></audio></td></tr>
				</tbody>
			</table>
		</div>

		<button class="button btn btn-outline-primary" onclick="addPicture()">Додати зображення</button>
		<button class="button btn btn-outline-primary" id="addHist" onclick="addHistogram()">Додати гістограму</button>
		<button class="button btn btn-outline-primary" id="changeStyle">Змінити стиль</button>

		<br><br>

		<canvas id="myCanvas2" style = "background-color: white; display: none"></canvas>
		<legend for="myCanvas2"></legend>
		
		
		<form  id="select-comp">
			<p>Виберіть гру:</p>
		    <select class=" form-group custom-select"  name="componist" onchange="showCustomer(this.value)">
		      <option value="0"></option>
		      <option value="1">The Elder Scrolls V: Skyrim</option>
		      <option value="2">The Witcher 3: Wild Hunt</option>
		      <option value="3">Fallout: New Vegas</option>
		      </select>
		    <br>
		    
		    <div id="txtHint"><b>Опис буде тут...</b></div>
		    <div class="cImg" ></div>
	    </form>

		<h3>Саундтреки із сайту</h3>
		<div ng-app="myCompositions" ng-controller="myCmp">
		  <ul type="circle">
		    <li ng-repeat="x in compositions">{{x}}<span ng-click="removeItem($index)">×</span></li>
		  </ul>
		  <input ng-model="addMe">
		  <button ng-click="addItem()" class="btn btn-outline-primary">Додати</button>
		  <p>{{errortext}}</p>
		</div>
		<br>
		
		<canvas id="myCanvas"></canvas>

		<div >
			<textarea  id="subj" name="subj" placeholder="Напишіть коментар..." style="width: 100%; height: 80px"></textarea>
			<input class="button btn btn-outline-primary" id="send" value="Надіслати" >
		</div>

		<h4 style="text-align: center; font-style: oblique; ">Залиште будь ласка коментар. Він є дуже важливий для нас)</h4>
		<div class="comment" style="margin-top: 0">
			<form  id="dform" action="index.php" onsubmit='return validateForm()' method="post">
				<div class="row">
      				<div class="col-25">
						<label class="form-group" for="lname">Прізвище:</label>
					</div>
					<div class="col-75">
						<input class="form-control"  type="text" id="surname"><br>
					</div>
				</div>
				<div class="row">
      				<div class="col-25">
						<label class="form-group" for="fname">Ім'я:</label>
					</div>
					<div class="col-75">
						<input class="form-control"   type="text" id="name"><br>
					</div>
				</div>
				<div class="row">
      				<div class="col-25">
						<label class="form-group"  for="e-mail">Електронна пошта:</label>
					</div>
					<div class="col-75">
						<input class="form-control"   type="text" name="mail"><br>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="country">Країна:</label>
					</div>
					<div class="col-75">
						<select  class="form-group custom-select"  id="country" name="country" >
							<option value="ukraine">Україна</option>
							<option value="england">Англія</option>
							<option value="usa">США</option>
							<option value="germany">Німеччина</option>						
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label for="check">Яка гра Вам найбільше імпонує?</label>
					</div>
					<div class="col-75 form-check-label form-group ">
						<input type="radio" class="form-check-input" name="componist" id="componist1">The Elder Scrolls V: Skyrim<br>
						<input type="radio" class="form-check-input" name="componist" id="componist2">The Witcher 3: Wild Hunt<br>
						<input type="radio" class="form-check-input" name="componist" id="componist3">Fallout: New Vegas<br>
					</div>
				</div>
				<div class="row">
					<div class="col-25">
						<label class="form-group"  for="subject">Коментар:</label>
					</div>
					<div class="col-75">
						<textarea  class="form-control"  id="subject" name="subject" placeholder="Напишіть коментар..." style="width: 100%; height: 80px"></textarea>
					</div>
				</div>
				<input type="hidden" id="h" value="скрипічний ключ" name="hidden">
				<!--<div class="row">
					<div class="col-25">
						<input class="button form-group" type="button" value ="Запропонувати"onclick="var btn=document.getElementById('time'); btn.type='text'">
					</div>
					<div class="col-75">
						<input class="form-group"  type="hidden" id="time" >
					</div>
				</div>-->
				<input class="button btn btn-outline-primary" style="float:right"  type="submit" id="submit" name="send" value="Надіслати" >
			</form>
		</div>
	</div>


<button class="btn btn-outline-primary" id="top" onclick="topFunction()" >Угору</button>

<script type="text/javascript" src="script.js"></script>
</body>
</html>