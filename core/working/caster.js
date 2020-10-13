/* javascript specific to Waxvapour.com only */

// Clock
function startTime() {
  var today = new Date();
  var h = today.getHours();
  var m = today.getMinutes();
  var s = today.getSeconds();
  m = checkTime(m);
  s = checkTime(s);
  document.getElementById('clock').innerHTML = h + ":" + m + ":" + s;
  var t = setTimeout(startTime, 500);
}
function checkTime(i) {
  if (i < 10) {i = "0" + i};
  return i;
}

// Main Body Loop
function BodyLoad(){
	startTime();
}

function explorer(){
	alert('explorer');
}
function term(){
	alert('term');
}