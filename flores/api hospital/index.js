const express=require("express");
const mysql=require("mysql");
const bodyparse=require("body-parser");
const cors=require("cors")

const app=express();

app.use(bodyparse({extends:false}));
app.use(bodyparse.json());
cors({origin:'*'})

const config={
    host:"localhos",
    user:"root",
    passwor:"",
    database:""
}


app.post("/paciente",(req,res)=>{
    res.sendStatus(202).send("ok");
})

app.get("/paciente",(req,res)=>{

    createPool.query("",(err,resutl)=>{
        if(err){
            res.sendStatus(404).send("{http:404}");
        }
         
    })
})




app.listen(6666,()=>{
    console.log("servidor en linea en pueto")
})