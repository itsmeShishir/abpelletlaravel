$(document).ready(function () {
  if (sessionStorage.getItem('#pop') !== 'true') {
    setTimeout(open, 1000)
    function open(event) {
      document.querySelector(".wrapper").classList.add("blur");
      document.querySelector(".popup").style.display = "block";
    }

    sessionStorage.setItem('#pop', 'true');
  }
});
document.querySelector("#close").addEventListener("click", clo);
function clo(event) {
  document.querySelector(".wrapper").classList.remove("blur");
  document.querySelector(".popup").style.display = "none";
}

document.querySelector("#mybttn").addEventListener("click", clos);
function clos(event) {
  document.querySelector(".slideover").classList.add("animate-slider-over-open"); 
}
document.getElementsById("demo1").addEventListener("mouseover", mouseOver);
function mouseOver() {
  document.getElementById("demo1").style.borderColor = "red";
} function mouseOut() {
  document.getElementById("demo1").style.borderColor = "rgba(136, 133, 133, 0.58)";
}
document.getElementsById("demo2").addEventListener("mouseover", mouseover);
function mouseover() {
  document.getElementById("demo2").style.borderColor = "red";
} function mouseout() {
  document.getElementById("demo2").style.borderColor = "rgba(136, 133, 133, 0.58)";
}
document.getElementsById("demo3").addEventListener("mouseover", mouseoveR);
function mouseoveR() {
  document.getElementById("demo6").style.borderColor = "red";
} function mouseouT() {
  document.getElementById("demo6").style.borderColor = "rgba(136, 133, 133, 0.58)";
}
document.getElementsById("demo4").addEventListener("mouseover", Mouseover);
function Mouseover() {
  document.getElementById("demo4").style.borderColor = "red";
} function Mouseout() {
  document.getElementById("demo4").style.borderColor = "rgba(136, 133, 133, 0.58)";
}




