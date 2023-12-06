window.addEventListener("load", () => {
    let commentbox = document.querySelector(".commentbox"); 
    let postbox = document.querySelector(".postbox"); 
    
    if(commentbox != null){
        commentbox.addEventListener("input", (e) => { 
            commentbox.style.height = "auto";
            commentbox.style.height = e.target.scrollHeight + "px"; 
        })
    } 

    if(postbox != null){
        postbox.addEventListener("input", (e) => {
            postbox.style.height = "auto";
            postbox.style.height = e.target.scrollHeight + "px"; 
        })
    } 
})