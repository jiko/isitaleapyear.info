var today = new Date();
var year = today.getFullYear();
function Leap(y) {return (y%4 == 0 && !(y%100 == 0 && !(y%400 == 0)))};
var leapyear = Leap(year) ? "YES" : "NO";
document.getElementById("answer").textContent = leapyear;
