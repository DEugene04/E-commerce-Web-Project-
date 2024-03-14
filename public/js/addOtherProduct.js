console.log("tes");

window.onscroll = function() {myFunction()};

var navBar = document.getElementById("navBar");

var sticky = navBar.offsetTop;

function myFunction(){
  if (window.pageYOffset >= sticky){
    navBar.classList.add("sticky")
    navBar.style.backgroundColor = "#f7e8d9";
    navBar.style.zIndex = 1;
    navBar.style.alignItems = "center"; 
    navBar.style.padding = "5px, 0px"
  } else {
    navBar.classList.remove("sticky")
    navBar.style.backgroundColor = "transparent";
  }
}

document.getElementById("FotoOther").addEventListener("change", function(){
  var selectedFiles = event.target.files[0];

  if(selectedFiles){
    var reader = new FileReader();
    reader.onload = function (e){
      document.getElementById("image-preview").src = e.target.result;
      document.getElementById("image-preview").style.opacity = "100%";
      document.getElementById("image-preview").style.width = "100%";
      document.getElementById("image-preview").style.height = "25vw";
      document.getElementById("fa-pencil").style.opacity = "0";
      document.getElementById("fa-pencil").style.height = "0";
      document.getElementById("fa-pencil").style.width = "0";
    };

    reader.readAsDataURL(selectedFiles);

  } else {
    alert("No file selected!")
  }
});