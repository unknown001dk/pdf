let dialbutton = document.querySelector("#dialButton");
let dialContent = document.querySelector("#dialContent")

dialbutton.onclick = () => {
    dialContent.classList.toggle("hidden");
    dialContent.classList.toggle("flex");
};
