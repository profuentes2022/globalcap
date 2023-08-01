const express=require("express");
const app=express();
const bodyParser =require("body-parser");
const mysql=require("mysql");
const cors=require("cors");
app.use(cors({origin:'*'}));
app.use(bodyParser.urlencoded({extend:false}));
app.use(bodyParser.json());
const jwt = require("jsonwebtoken");
const config={
host:'localhost',
user:'root',
password:'',
database:'almacen'
};
const pool=mysql.createPool(config);
var crearToken=function(x){
let datostoken={
    correo:x
}
var token= jwt.sign(datostoken,'WinnieAndaLoca',{
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
app.post("/tokenveri",(req,res)=>{
    const correo=req.body.correo;
    let toke=crearToken(correo);
    res.send("{token:" + toke + "}");
});
app.get("/tokenveri",(req,res)=>{
let token=req.query.token;
let key=req.query.key;
if(verificartoken(token,key)){
    pool.query("SELECT * FROM datos",(err,result)=>{
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
    console.log(req.query.dpi);
});

app.listen(3333,()=>{
    console.log("servidor de winnie activo en 3333");
})