<?php
$sec = date('s');
$colorArray = array('#3498db', '#9b59b6');
$colorIndex = $sec % 2;
?>
/* <style> /**/
body  {
	background:#0066FF;
	font:"Roboto Condensed", Roboto;
}
.elgg-body-walledgarden {
	margin: 100px auto 0;
	position: relative;
	width: 530px;
}
.elgg-module-walledgarden {
	position: absolute;
	top: 0;
	left: 0;

    background-color: #FFF;
    border: 1px solid #DEDEDE;
    padding: 10px;

	border-radius: 3px;
	box-shadow:0 -15px 0 rgba(0,0,0,.06),0 0 21px rgba(0,0,0,.18),0 21px 25px rgba(0,0,0,.18);
}
.elgg-module-walledgarden > .elgg-head {
    padding: 20px 20px 0 20px;
	font-size:16px;
	font-variant:small-caps;
}
.elgg-module-walledgarden > .elgg-body {
    padding: 0 20px;
}
.elgg-module-walledgarden > .elgg-foot {
    padding: 0 20px 20px 20px;
}
.elgg-menu-walled-garden {
	margin: 10px 0;
}
.elgg-walledgarden-single > .elgg-body {
	padding: 0 18px;
}
.elgg-body-walledgarden h3 {
	font-size: 1.5em;
	line-height: 1.1em;
	padding-bottom: 5px;
}
.elgg-heading-walledgarden {
	line-height: 1.1em;
}
.elgg-module-walledgarden .elgg-output img {
	width: 100%;
	height: auto;
}

@media (max-width: 600px) {
	.elgg-page-walledgarden {
		padding: 20px;
	}
    .elgg-body-walledgarden {
    	margin: 40px auto 0;
        width: auto;
    }
}
.elgg-input-text{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: #0066FF;
  width: 190px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
.elgg-input-text:hover {
  background-color: #039;
}
.elgg-input-text:focus {
  background-color: white;
  width: 200px;
  color: <?php echo $colorArray[$colorIndex]; ?>;
}
.elgg-input-password{
  -webkit-appearance: none;
     -moz-appearance: none;
          appearance: none;
  outline: 0;
  border: 1px solid rgba(255, 255, 255, 0.4);
  background-color: #0066FF;
  width: 190px;
  border-radius: 3px;
  padding: 10px 15px;
  margin: 0 auto 10px auto;
  display: block;
  text-align: center;
  font-size: 18px;
  color: white;
  -webkit-transition-duration: 0.25s;
          transition-duration: 0.25s;
  font-weight: 300;
}
.elgg-input-password:hover {
  background-color: #039;
}
.elgg-input-password:focus {
  background-color: white;
  width: 200px;
  color: <?php echo $colorArray[$colorIndex]; ?>;
}