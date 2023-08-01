#include <iostream>
#include <fstream>
using namespace std; 

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

struct preguntas{

int dpi;
	char nombre[20];
	char nit [20];
	int edad ;
	string  antecedente;
	char tipoSangre[10];
	char direccion [50];
	int telefono;
	char correo [20];
	string LugTrabajo;
	char NomEmpresa [30];
	int salario;
	string enfermedad ;
	string padecimiento;
	string dolencia;
	char AreaReferida [50];
};



preguntas user;
FILE * achpreguntas;



void crearPreguntas(){
	cout<<"---------------------------------------------------------------------------"<<endl;
	
    	cout<<"Ingrese Dpi "<<endl;
	cin>>user.dpi;
    cout<<"Ingrese nombre "<<endl;
	cin>>user.nombre;
	cout<<"Ingrese nit "<<endl;
	cin>>user.nit;
	cout<<"Ingrese su edad "<<endl;
	cin>>user.edad;
	cout<<"Ingrese su antecedente"<<endl;
	cin>>user.antecedente;
	cout<<"Ingrese su tipoSangre "<<endl;
	cin>>user.tipoSangre;
	cout<<"Ingrese su direccion"<<endl;
	cin>>user.direccion;
	cout<<"Ingrese su telefono"<<endl;
	cin>>user.telefono;
	cout<<"Ingrese su correo"<<endl;
	cin>>user.correo;
	cout<<"Ingrese su LugTrabajo "<<endl;
	cin>>user.LugTrabajo;
	cout<<"Ingrese su NomEmpresa "<<endl;
	cin>>user.NomEmpresa;
	cout<<"Ingrese su salario "<<endl;
	cin>>user.salario;
	cout<<"Ingrese su enfermedad "<<endl;
	cin>>user.enfermedad;
	cout<<"Ingrese su padecimiento "<<endl;
	cin>>user.padecimiento;
	cout<<"Ingrese su dolencia "<<endl;
	cin>>user.dolencia;
	cout<<"Ingrese su AreaReferida "<<endl;
	cin>>user.AreaReferida;
	
	cout<<"---------------------------------------------------------------------------"<<endl;
	achpreguntas=fopen("dbpreguntas.dat","a++");
	fwrite(&user,sizeof(preguntas),1,achpreguntas);
	fclose(achpreguntas);
}



void extraccion (){
	achpreguntas=fopen("dbpreguntas.dat","r");
	fread(&user,sizeof(preguntas),1,achpreguntas);
	while(!feof(achpreguntas)){
		cout<<"numero de pdi: "<<user.dpi<<endl;
		cout<<"nombre:"<<user.nombre<<endl;
		cout<<"direccion :"<<user.direccion<<endl;
		cout<<"enfermedad: "<<user.enfermedad<<endl;
        cout<<"telefono:"<<user.telefono<<endl;
        cout<<"Area referida :"<<user.AreaReferida<<endl;
		fread(&user,sizeof(preguntas),1,achpreguntas);
	}
	fclose(achpreguntas);
}


void ingreso(){
	
	
	
	achpreguntas=fopen("dbpreguntas.dat","r");
		fread(&user,sizeof(preguntas),1,achpreguntas);
	ofstream fichero("ingreso.sql");
	while(!feof(achpreguntas)){
		fichero <<"insert into dato values ('"<<user.dpi<<"','"<<user.nombre<<"',"<<user.direccion<<","<<user.telefono<<","<<user.enfermedad<<");"<<endl;
		fread(&user,sizeof(preguntas),1,achpreguntas);
}
fichero.close();
fclose(achpreguntas);

}
int main(int argc, char** argv) {
	cout<<"DATOS DE INGRESO DE UN PACIENTE "<<endl;
		crearPreguntas();
	extraccion();
	ingreso();

	
	
	return 0;


}