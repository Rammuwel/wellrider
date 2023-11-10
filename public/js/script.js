document.addEventListener('scroll', function() {
    var nav = document.querySelector('.navbar');
    nav.classList.toggle("sticky", window.scrollY > 0);
});

// home slider script start here 
let flag = 2;
slideShow(flag);

function controller(x) {
    flag = flag + x
    slideShow(flag);
}

function slideShow(num) {
    let slides = document.getElementsByClassName("slide");
    if (num == slides.length) {
        flag = 0;
        num = 0;
    }
    if (num < 0) {
        flag = slides.length - 1;
        num = slides.length - 1;
    }
    // console.log("slide no. " + num);

    for (const i of slides) {
        i.style.display = "none"
    }
    slides[num].style.display = "block"

}



// home slidre script end her



// car slider wrapper_box wrapper_car
document.getElementById("pc_next").onclick = function() {
    const widthItem = document.querySelector('.wrapper_car').clientWidth;

    document.querySelector(".car_list").scrollLeft += widthItem + 20;
}
document.getElementById("pc_prew").onclick = function() {
    const widthItem = document.querySelector('.wrapper_car').clientWidth;
    document.querySelector(".car_list").scrollLeft -= (widthItem + 20);
}


// sub profile menu user_box sub_menu_wrap

let smw = document.getElementById('sub_menu_wrap');
smw.style.display = "none";
document.getElementById('profile_box').onclick = function() {
    smw.style.display == "none" ? smw.style.display = "flex" : smw.style.display = "none";

}

// menu-sub onclick--------------

document.getElementById('box-menu-icon').onclick = function() {
    document.querySelector('.nav-list').classList.add('nav-list-block');
}
document.getElementById('box-menu-out').onclick = function() {
    document.querySelector('.nav-list').classList.remove('nav-list-block');
}