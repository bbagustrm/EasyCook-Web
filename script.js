const buttonMakanan = document.querySelector(".filter-makanan");
const buttonMinuman = document.querySelector(".filter-minuman");
const contentMakanan = document.querySelector(".makanan");
const contentMinuman = document.querySelector(".minuman");

buttonMakanan.addEventListener("click", function(){
    contentMakanan.style.display = "flex";
    contentMinuman.style.display = "none";
    buttonMakanan.style.opacity = "1";
    buttonMinuman.style.opacity = "0.5";
})

buttonMinuman.addEventListener("click", function(){
    contentMinuman.style.display = "flex";
    contentMakanan.style.display = "none";
    buttonMakanan.style.opacity = "0.5";
    buttonMinuman.style.opacity = "1";
})