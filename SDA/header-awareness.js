var lastScrollTop = 0;
    header = document.getElementsByClassName("header")[0];

window.addEventListener("scroll", function(){
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    if (scrollTop > lastScrollTop){
        header.style.top ="-330px"; 
    } else {
        header.style.top ="0";
    }
    lastScrollTop = scrollTop;
})
