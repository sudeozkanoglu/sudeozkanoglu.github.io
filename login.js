const log_btn=document.querySelector("#log-btn");
const content_btn=document.querySelector("#content-btn");
const container=document.querySelector(".container");

content_btn.addEventListener("click" , () => {
    container.classList.add("content-mode");
});

log_btn.addEventListener("click" , () => {
    container.classList.remove("content-mode");
});