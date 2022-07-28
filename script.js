var navbar = document.querySelector("nav");

window.onscroll = function () {
  // pageYOffset or scrollY
  if (window.pageYOffset > 0) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
};

function showMe(x) {
  var cont = document.getElementById(x).style.display;

  if (cont == "none") {
    document.getElementById(x).style.display = "flex";
    // document.getElementById(x).classList.add("masuk");
  } else {
    document.getElementById(x).style.display = "none";
    // document.getElementById(x).classList.remove("masuk");
  }
}
