window.addEventListener("load", () => { 
    document.querySelector("form").addEventListener("submit", async (e) => {  
        let fields = Array.from(document.querySelectorAll(".input-field")) 
        if(!fields.every(element => element.value)){
            e.preventDefault()
            let missingFields = fields.filter(field => !field.value) 
            document.querySelector(".error").textContent = "Missing fields: " + missingFields.map(field => field.name).join(", ")
            return
        }  

        try {
            e.preventDefault();
            const body = new URLSearchParams({
                "username": fields[0].value,
                "email": fields[1].value,
                "password": fields[2].value, 
                "where": "login"
            }) 

            //Checking if user exists with same email
            const response = await fetch("http://localhost:" + port + "/blog/php/checkdb.php", { method: "POST", body }); 
            const data = await response.json()
            
            //If user exists does not exist show hint and return early.
            if(data.exists !== true){ 
                document.querySelector(".error").textContent = "Wrong credentials, try again!"
                return
            } else {
                e.target.submit()
            }
        } catch (error) {
            console.log(error) 
        }
    })
})