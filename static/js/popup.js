window.onload = function() {
    setTimeout(function(){
      document.getElementById('popup').classList.add('active');
    }, 5000);
  }
  

function showPopup(text) {
  var popup = document.getElementById("popup");
  var popupText = document.getElementById("popup-text");
  popup.style.display = "block";
  popupText.innerHTML = text;
}

function hidePopup() {
  var popup = document.getElementById("popup");
  popup.style.display = "none";
}


