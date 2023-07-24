function myFunction() {
    var x = document.getElementById("top-menu");
    if (x.className === "menu") {
      x.className += " responsive";
    } else {
      x.className = "menu";
    }
  }
  //zatím nefunguje