window.addEventListener("load", () => {
    let commentbox = document.querySelector(".commentbox");
    //commentbox.style.height = 60 + "px";
    commentbox.addEventListener("input", (e) => { 
        commentbox.style.height = "auto";
        commentbox.style.height = e.target.scrollHeight + "px"; 
    })
})