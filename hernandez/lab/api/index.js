const express=require("express");
const mysql=require("mysql");
const cors=require("cors");
const bodyParser=require("body-parser");
const jsonwebtoken=require("jsonwebtoken");

const app=express();

app.use(bodyParser({extended:false}));
app.use(bodyParser.json());
cors({origin:'*'})

const jwt = require("jsonwebtoken");

//config mysql

const config={
    host:'localhost',
    user:'root',
    password:'',
    database:'generalpacientes'
};

const pool=mysql.createPool(config);
var crearToken=function(w){

let datostoken={
    correo:w
}
var token= jwt.sign(datostoken,'trukulento',{
    expiresIn:60*60*24
})

return token;
}

var verificartoken=function(token,key){
let estado=false;
jwt.verify(token,key,function(err,token){
if(err){
    estado=false;
}else{
    estado=true;
}

})
return estado;
}

//end pointe


app.post("/verificar",(req,res)=>{
    const nombre=req.body.nombre;
    let token=crearToken(nombre);
    res.send("{token:" + token + "}");
});


app.get("/varificar",(req,res)=>{
let token=req.query.token;
let key=req.query.key;

if(verificartoken(token,key)){
    pool.query("SELECT * FROM pacientes",(err,result)=>{
    if(err){
     res.send(404);   
    }else{
        res.send(result);
    }

    })
}else{
   res.send(404);
}

});



app.get("/",(req,res)=>{
    console.log("si kala");
});

app.listen(5555,()=>{
    console.log("jala esta onda");
})