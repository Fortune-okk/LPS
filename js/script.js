window.onscroll = () =>{
    if(scrollY > 250){
        document.querySelector('.gotop').classList.add('active');
    }else{
        document.querySelector('.gotop').classList.remove('active');
    }
    document.querySelector('.navbar').classList.remove('active');
}

let menu = document.querySelector('.menubtn');
menu.onclick = () =>{
    document.querySelector('.navbar').classList.toggle('active');
}