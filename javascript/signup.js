const slidePage = document.querySelector(".slide-page");
const nextBtnFirst = document.querySelector(".firstNext");
const prevBtnSec = document.querySelector(".prev-1");
const nextBtnSec = document.querySelector(".next-1");
const prevBtnThird = document.querySelector(".prev-2");
const nextBtnThird = document.querySelector(".next-2");
const prevBtnFourth = document.querySelector(".prev-3");
const submitBtn = document.querySelector(".submit");
const progressText = document.querySelectorAll(".step p");
const progressCheck = document.querySelectorAll(".step .check");
const bullet = document.querySelectorAll(".step .bullet");
let current = 1;
const fname = document.getElementById('firstname');
const lname = document.getElementById('lastname');
const email = document.getElementById('email');
const phone = document.getElementById('phone');
const dob = document.getElementById('date');
const sex = document.getElementsByName('sex');

nextBtnFirst.addEventListener("click", function(event){
  event.preventDefault();
  if(fname.value == 0)
  {
    alert("First name is required");
  }
  else
  {
    if(fname.value != 0)
    {
      var term = fname.value;
      var re = new RegExp("^([a-zA-Z]){5,}$");
      if (re.test(term)) {
        var sec1 = 1;
        console.log("Valid");
      } else {
        var sec1 = 0;
        alert("only letters allowed & minimum 5 characters and no space allowed");
      }
    }
  }
  if(lname.value == 0)
  {
    alert("Last name is required");
  }
  else 
  {
    if(lname.value != 0)
    {
      var term = lname.value;
      var re = new RegExp("^([a-zA-Z]){1,}$");
      if (re.test(term)) {
        console.log("Valid");
        var sec2 = 1;
      } else {
        var sec2 =0;
        alert("only letters allowed & minimum 1 characters and no space allowed");
      }
    }
  }
  if (sec1 == 1 && sec2 == 1 )
  {
    slidePage.style.marginLeft = "-25%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});
nextBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  if(email.value == 0)
  {
    alert("email is required");
  }
  else
  {
    if(email.value != 0)
    {
      var term = email.value;
      var re = new RegExp("^[A-Za-z0-9._]+@[A-Za-z]+\.[A-Za-z]{2,4}$");
      if (re.test(term)) {
        var sec1 = 1;
        console.log("Valid");
      } else {
        var sec1 = 0;
        alert("please type correct mail id");
      }
    }
  }
  if(phone.value == 0)
  {
    alert("Mobile is required");
  }
  else 
  {
    if(phone.value != 0)
    {
      var term = phone.value;
      var re = new RegExp("^([0-9])\\d{9}$");
      if (re.test(term)) {
        console.log("Valid");
        var sec2 = 1;
      } else {
        var sec2 =0;
        alert("only numbers are allowed and it should be 10 digits");
      }
    }
  }
  if (sec1 == 1 && sec2 == 1 )
  {
    slidePage.style.marginLeft = "-50%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }

});
nextBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  

  if(dob.value == 0)
  {
    alert("Date of Birth is required");
  }
  else
  {
    if(dob.value != 0)
    {
      var term = dob.value;
      var re = new RegExp("^\\d{4}-\\d{2}-\\d{2}$");
      if (re.test(term)) {
        var sec1 = 1;
        console.log("Valid");
      } else {
        var sec1 = 0;
        alert("please type correct DOB");
      }
    }
  }
  if(document.getElementById('m').checked || document.getElementById('f').checked || document.getElementById('o').checked)
  {
    var sec2 =1;
  }
  else 
  {
    var sec2 = 0;
    alert("gender is required");
  }
  if (sec1 == 1 && sec2 == 1 )
  {
    slidePage.style.marginLeft = "-75%";
    bullet[current - 1].classList.add("active");
    progressCheck[current - 1].classList.add("active");
    progressText[current - 1].classList.add("active");
    current += 1;
  }
});
submitBtn.addEventListener("click", function(){
  bullet[current - 1].classList.add("active");
  progressCheck[current - 1].classList.add("active");
  progressText[current - 1].classList.add("active");
  current += 1;
  setTimeout(function(){
    alert("sorry all fields are required");
    
  },800);
});

prevBtnSec.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "0%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnThird.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-25%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});
prevBtnFourth.addEventListener("click", function(event){
  event.preventDefault();
  slidePage.style.marginLeft = "-50%";
  bullet[current - 2].classList.remove("active");
  progressCheck[current - 2].classList.remove("active");
  progressText[current - 2].classList.remove("active");
  current -= 1;
});