const mysql = require('mysql2');
const fs = require('fs')

const connection = mysql.createConnection({
  host: 'localhost',
  user: 'root',
  password: 'password', 
  connectionLimit: 10,
});

const sqlStatements = fs.readFileSync("init.sql", 'utf-8').split(";") 
let promises = []

const intitDB = () => {
    sqlStatements.forEach(statement => {
        if(statement.trim()){
            let query = new Promise((resolve, reject) => {
                connection.query(statement, (err, results) => { 
                    if(err){
                        reject(err)
                    } else {
                        console.log("Query ran successfully")
                        resolve()
                    } 
                })
            });
            promises.push(query)
        }
    })
}
intitDB();

Promise.all(promises).then(() => {
    connection.end((err) => {
        if(err){
            throw err
        } else {
            console.log("DB closed successfully")
        }
    })
})