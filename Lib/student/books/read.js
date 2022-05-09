const readmore = document.querySelector('.read_more');
const text = document.querySelector('.text');

readmore.addEventListener('click',(e)=>{
    text.classList.toggle('show-more');

if (readmore.innerText === "Read More") {
    readmore.innerText = "Read Less";
  } else {
    readmore.innerText = "Read More";
  }
});