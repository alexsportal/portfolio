var header = document.getElementById("pagenav");
var pagenavbuttons = header.getElementsByClassName("pagenavbuttons");
for (var i = 0; i < pagenavbuttons.length; i++) {
  pagenavbuttons[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("active");
  if (current.length > 0) { 
    current[0].className = current[0].className.replace(" active", "");
  }
  this.className += " active";
  });
}
