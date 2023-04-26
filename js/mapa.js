<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD61vTmcRGMNnrEYRFO7o1w4sDFsiRRFzA"></script>;

var tooltip1 = document.getElementById("tooltip1");
var tooltip2 = document.getElementById("tooltip2");
var tooltip3 = document.getElementById("tooltip3");
var tooltip4 = document.getElementById("tooltip4");

var map = document.getElementById("mapa");
map.addEventListener("mousemove", function (event) {
  var x = event.pageX - map.offsetLeft;
  var y = event.pageY - map.offsetTop;

  tooltip1.style.display = "none";
  tooltip2.style.display = "none";
  tooltip3.style.display = "none";
  tooltip4.style.display = "none";

  if (x >= 150 && x <= 250 && y >= 250 && y <= 300) {
    tooltip1.style.display = "block";
    tooltip1.style.top = y + "px";
    tooltip1.style.left = x + "px";
  }
  if (x >= 400 && x <= 500 && y >= 150 && y <= 200) {
    tooltip2.style.display = "block";
    tooltip2.style.top = y + "px";
    tooltip2.style.left = x + "px";
  }
  if (x >= 550 && x <= 650 && y >= 300 && y <= 350) {
    tooltip3.style.display = "block";
    tooltip3.style.top = y + "px";
    tooltip3.style.left = x + "px";
  }
  if (x >= 750 && x <= 850 && y >= 250 && y <= 300) {
    tooltip4.style.display = "block";
    tooltip4.style.top = y + "px";
    tooltip4.style.left = x + "px";
  }
});
