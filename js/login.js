window.addEventListener("load", () => { 
    document.querySelector("form").addEventListener("submit", (e) => {  
        let fields = Array.from(document.querySelectorAll(".input-field")) 
        if(!fields.every(element => element.value)){
            e.preventDefault()
            let missingFields = fields.filter(field => !field.value) 
            document.querySelector(".error").textContent = "Missing fields: " + missingFields.map(field => field.name).join(", ")
        }  
    })
})