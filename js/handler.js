fetch('https://jsonplaceholder.typicode.com/todos/1').then((response)=> {
    if (!response.ok) {
        window.location.href = "status.html";
        throw new Error(response.status);
    }
    return response.json();
})