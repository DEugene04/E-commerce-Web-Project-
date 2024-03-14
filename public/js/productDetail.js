var number = document.getElementById("showNumber");
var currentValue = parseInt(number.innerText);
console.log(number)

document.getElementById("minus").addEventListener("click", function(){
  if (currentValue <= 0){

  } else {
    currentValue --;
    updateValue();
  }
  
})

document.getElementById("plus").addEventListener("click", function(){
  currentValue ++;
  updateValue();
})

function updateValue(){
  number.innerText = currentValue;
}

var addToCart = document.getElementById("ATC-Btn");
var productName = document.getElementById("product-name");
addToCart.addEventListener("click", function(){
  alert("Added " +currentValue+" "+ productName.innerText+ " to cart");
})

var plus = document.getElementById("minus")
var minus = document.getElementById("plus")

function minus(){
  number = number -1
}

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

