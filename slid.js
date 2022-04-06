const slideShow = document.querySelectorAll(".slideShow-element");
//console.log(slideShow);

let count=1;
setInterval(()=>{
	count++ ;
	let slideShowElement = document.querySelector(".current");
	slideShowElement.classList.remove("current");
	if(count > slideShow.length) {
		slideShow[0].classList.add("current");
		count =1;
	}else{
		slideShowElement.nextElementSibling.classList.add("current");
	}

}, 2000);