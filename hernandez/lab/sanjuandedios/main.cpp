#include <iostream>
#include <fstream>
using namespace std;

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

struct preguntas{
char nombre [50];
int nit;
int edad;
char antecedentes [50];
char tipodesangre[20];
char direccion[30];
int telefono;
char correo[20];
char lugardetrabajo[15];
char nombreempresa[20];
char salario[ 30];
char enfermedad[15];
char padecimiento[30];
char dolencia[20];
char areareferida[20];


};



preguntas user;
FILE * achpacientes;



void crearPreguntas(){
cout<<"---------------------------------------------------------------------------"<<endl;
cout<<"Ingrese nombre "<<endl;
cin>>user.nombre;
cout<<"Ingrese nit "<<endl;
cin>>user.nit;
cout<<"Ingrese su edad "<<endl;
cin>>user.edad;
cout<<"Ingrese sus antecedentes"<<endl;
cin>>user.antecedentes;
cout<<"Ingrese su tipo de sangre "<<endl;
cin>>user.tipodesangre;
cout<<"Ingrese su direccion"<<endl;
cin>>user.direccion;
cout<<"Ingrese su telefono"<<endl;
cin>>user.telefono;
cout<<"Ingrese su correo"<<endl;
cin>>user.correo;
cout<<"Ingrese su lugar de trabajo "<<endl;
cin>>user.lugardetrabajo;
cout<<"Ingrese su empresa "<<endl;
cin>>user.nombreempresa;
cout<<"Ingrese su salario "<<endl;
cin>>user.salario;
cout<<"Ingrese su enfermedad "<<endl;
cin>>user.enfermedad;
cout<<"Ingrese su padecimiento"<<endl;
cin>>user.padecimiento;
cout<<"Ingrese su dolencia "<<endl;
cin>>user.dolencia;
cout<<"Ingrese su area referida "<<endl;
cin>>user.areareferida;
cout<<"---------------------------------------------------------------------------"<<endl;
achpacientes=fopen("dbpacientes.dat","a++");
fwrite(&user,sizeof(preguntas),1,achpacientes);
fclose(achpacientes);
}



void extraccion (){
achpacientes=fopen("dbpacientes.dat","r");
fread(&user,sizeof(preguntas),1,achpacientes);
while(!feof(achpacientes)){
	
cout<<"nombre: "<<user.nombre<<endl;
cout<<"nit :"<<user.nit<<endl;
cout<<"edad :"<<user.edad<<endl;
cout<<"antecedentes : "<<user.antecedentes<<endl;
cout<<"tipo de sangre: "<<user.tipodesangre<<endl;
cout<<"direccion :"<<user.direccion<<endl;
cout<<"telefono :"<<user.telefono<<endl;
cout<<"correo : "<<user.correo<<endl;
cout<<"lugar de trabajo : "<<user.lugardetrabajo<<endl;
cout<<"nombre de empresa :"<<user.nombreempresa<<endl;
cout<<"salario :"<<user.salario<<endl;
cout<<"enfermedad : "<<user.enfermedad<<endl;
cout<<"padecimiento : "<<user.padecimiento<<endl;
cout<<"dolencia :"<<user.dolencia<<endl;
cout<<"areareferida :"<<user.areareferida<<endl;

fread(&user,sizeof(preguntas),1,achpacientes);
}
fclose(achpacientes);
}


void ingreso(){

achpacientes=fopen("dbpacientes.dat","r");
fread(&user,sizeof(preguntas),1,achpacientes);
ofstream fichero("ingreso.sql");
while(!feof(achpacientes)){
fichero <<"INSERT INTO pacientes(`nombre`, `nit`, `edad`, `antecedentes`, `tipodesangre`, `direccion`, `telefono`, `correo`, `lugardetrabajo`, `nombreempresa`, `salario`, `enfermedad`, `padecimiento`, `dolencia`, `areareferida`) VALUES ('"<<user.nombre<<"','"<<user.nit<<"','"<<user.edad<<"','"<<user.antecedentes<<"','"<<user.tipodesangre<<"','"<<user.direccion<<"','"<<user.telefono<<"','"<<user.correo<<"','"<<user.lugardetrabajo<<"','"<<user.nombreempresa<<"','"<<user.salario<<"','"<<user.enfermedad<<"','"<<user.padecimiento<<"','"<<user.dolencia<<"','"<<user.areareferida<<"');"<<endl;
fread(&user,sizeof(preguntas),1,achpacientes);
}
fichero.close();
fclose(achpacientes);

}

int main(int argc, char** argv) {
cout<<"bienvenido"<<endl;
crearPreguntas();
extraccion();
ingreso();



return 0;


}

