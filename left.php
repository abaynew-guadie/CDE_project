<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;}

.month {
  padding: 10px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}


.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
  display: flex;
  justify-content: space-around;
}

.weekdays li {
  display: inline;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li.active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}
.cal {
	margin-bottom: .5em;
}
/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li.active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}
</style>
<div class="cal">
<div class="month">      
  <ul>
    <li>
      <span id="month"></span><br>
      <span style="font-size:18px" id="year"></span>
    </li>
  </ul>
</div>

<ul class="weekdays">
  <li>Mo</li>
  <li>Tu</li>
  <li>We</li>
  <li>Th</li>
  <li>Fr</li>
  <li>Sa</li>
  <li>Su</li>
</ul>

<ul class="days" id="days"></ul>
</div>
<script type="text/javascript">

	let cdt = new Date();
	var month_of_year = new Array('January','February','March','April','May','June','July','August','September','October','November','December');
	let days = document.getElementById('days');
	let odds = [0, 2, 4, 6, 7, 9, 11];
	document.getElementById('month').innerText = month_of_year[cdt.getMonth()]
	document.getElementById('year').innerText = `${cdt.getFullYear()}`;
	let li;
	for(let i = 1; i < 29; i++){
		li = document.createElement('li');
		if(i == cdt.getDate()){
			li.classList.add('active')
		}
		li.innerText = `${i}`;
		days.appendChild(li);
	}
	if (!odds.includes(cdt.getMonth())){
		for(let i = 29; i < 31; i++){
			li = document.createElement('li');
			if(i == cdt.getDate()){
				li.classList.add('active')
			}
			li.innerText = `${i}`;
			days.appendChild(li);
		}
	} else {
		for(let i = 29; i < 32; i++){
			li = document.createElement('li');
			if(i == cdt.getDate()){
				li.classList.add('active')
			}
			li.innerText = `${i}`;
			days.appendChild(li);
		}
	}
</script>
<div class="anc">
	<div class="title" color="#777">Announcements</div>
	<div class="content"> 
		<div><?php 
		$conn = mysqli_connect('localhost','root','');
	if(!$conn) die("Failed to connect to database!");
	$status = mysqli_select_db($conn,'cde');
	if(!$status) die("Failed to select database!");
		$anc_err = "";
		$sql_anc = "SELECT title, info, dates FROM postss WHERE status = 'register' ORDER BY dates DESC LIMIT 3";
		$stmt_anc = mysqli_prepare($conn,$sql_anc);
		if (mysqli_execute($stmt_anc)){
			$loads = mysqli_field_count($conn);
			if($loads > 0){
				$result = mysqli_stmt_get_result($stmt_anc);
				$row = mysqli_fetch_array($result);
				if (!$row){
					$anc_err = "No announcements for today.";
				} else {
					while($row){
						?><div class="card">
							<div class="card-header"><?php echo $row['title']; ?></div>
							<div class="card-body"><?php echo $row['info']; ?></div>
							<div class="card-footer"><a href="new.php">Read More</a> <?php echo $row['dates']; ?> </div>
						</div><?php
						$row = mysqli_fetch_array($result);
					}
				}
			}
		} else {
			$anc_err = "Cannot load announcements. Try again!";
		}?>
		<div class="err"><?php echo "$anc_err"; ?></div>
		</div>
	</div>
</div>