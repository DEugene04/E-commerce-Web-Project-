console.log("JS masuk")

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

document.querySelector(".category").addEventListener("click", function(event) {
  event.preventDefault();
  if (event.target.classList.contains("category-content")) {
      var categories = document.querySelectorAll(".category-content");

      categories.forEach(function(category) {
          category.classList.remove('bold');
          category.style.opacity = "70%";
      });

      event.target.classList.add("bold");
      event.target.style.opacity = "100%";
  }
});

document.querySelector(".gender").addEventListener("click", function(event){
  event.preventDefault();
  console.log(event);
  if(event.target.classList.contains("gender-btn")){
    var buttons = document.querySelectorAll(".gender-btn");

    buttons.forEach(function(gender){
      gender.style.backgroundColor = "transparent";
      gender.style.color = "#392A2A";
      gender.style.border = "1px solid #392A2A";
    })
      event.target.style.backgroundColor = "#392A2A";
      event.target.style.color = "white";
  }
});

