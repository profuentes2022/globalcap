#include <iostream>
#include <string.h>
#include <stdlib.h>
#include <stdio.h>
#include <conio.h>
#include <fstream>
using namespace std;

	struct pacientes{
	char nombre[30];
	char nit[30];
	char edad[8];
	char antecedentes[30];
	char tipo_sangre[30];
	char direccion[30];
	char telefono[11];
	char correo[50];
	char lugar_trabajo[50];
	char nombre_empresa[50];
	char salario[30];
	char enfermedad[50];
	char padecimiento[50];
	char dolencia[50];
	char area_referida[30];
	};

	pacientes persona1;
	FILE * arch;
	
	
	
	
	void ingresar(){
	cout<<"ingrese nombre: "<<endl;
	cin>>persona1.nombre;
	cout<<"ingrese nit: "<<endl;
	cin>>persona1.nit;
	cout<<"ingrese edad: "<<endl;
	cin>>persona1.edad;
	cout<<"ingrese antecedentes: "<<endl;
	cin>>persona1.antecedentes;
	cout<<"ingrese tipo de sangre: "<<endl;
	cin>>persona1.tipo_sangre;
	cout<<"ingrese direccion: "<<endl;
	cin>>persona1.direccion;
	cout<<"ingrese telefono: "<<endl;
	cin>>persona1.telefono;
	cout<<"ingrese correo: "<<endl;
	cin>>persona1.correo;
	cout<<"ingrese lugar de trabajo: "<<endl;
	cin>>persona1.lugar_trabajo;
	cout<<"ingrese nombre de la empresa: "<<endl;
	cin>>persona1.nombre_empresa;
	cout<<"ingrese salario: "<<endl;
	cin>>persona1.salario;
	cout<<"ingrese enfermedad: "<<endl;
	cin>>persona1.enfermedad;
	cout<<"ingrese padecimiento: "<<endl;
	cin>>persona1.padecimiento;	
	cout<<"ingrese dolencia: "<<endl;
	cin>>persona1.dolencia;
	cout<<"ingrese area referida: "<<endl;
	cin>>persona1.area_referida;
	
		FILE * arch;
	arch=fopen("dts.txt", "ab");
	fwrite(&persona1,sizeof(pacientes),1,arch);
	fclose(arch);
}






void datos(){
	ofstream archi;
	archi.open("datos.sql", ios::out);
	
		arch=fopen("dts.txt", "rb");
	fread(&persona1,sizeof(pacientes),1,arch);
	while(!feof(arch)){
	archi<<"INSERT INTO pacientes(nombre, nit, edad, antecedentes, tipo_sangre, direccion, telefono, correo, lugar_trabajo, nombre_empresa, salario, enfermedad, padecimiento, dolencia, area_referida) VALUES ('"<<persona1.nombre<<"','"<<persona1.nit<<"','"<<persona1.edad<<"','"<<persona1.antecedentes<<"','"<<persona1.tipo_sangre<<"','"<<persona1.direccion<<"','"<<persona1.telefono<<"','"<<persona1.correo<<"','"<<persona1.lugar_trabajo<<"','"<<persona1.nombre_empresa<<"','"<<persona1.salario<<"','"<<persona1.enfermedad<<"','"<<persona1.padecimiento<<"','"<<persona1.dolencia<<"','"<<persona1.area_referida<<"');"<<endl;
		fread(&persona1,sizeof(pacientes),1,arch);

	}
		fclose(arch);
	}
	
	
	
	
	void extraccion(){
		arch=fopen("dts.txt", "rb");
	fread(&persona1,sizeof(pacientes),1,arch);
	int cont=0;
	while(!feof(arch)){
		cont++;
	cout<<"-------------persona "<<cont<<", "<<persona1.nombre<<"-----------"<<endl;
	cout<<"nombre: "<<persona1.nombre<<endl;
	cout<<"nit: "<<persona1.nit<<endl;
	cout<<"edad: "<<persona1.edad<<endl;
	cout<<"antecedentes: "<<persona1.antecedentes<<endl;
	cout<<"tipo de sangre: "<<persona1.tipo_sangre<<endl;
	cout<<"direccion: "<<persona1.direccion<<endl;
	cout<<"telefono: "<<persona1.telefono<<endl;
	cout<<"correo: "<<persona1.correo<<endl;
	cout<<"lugar de trabajo: "<<persona1.lugar_trabajo<<endl;
	cout<<"nombre de empresa: "<<persona1.nombre_empresa<<endl;
	cout<<"salario: "<<persona1.salario<<endl;
	cout<<"enfermedad: "<<persona1.enfermedad<<endl;
	cout<<"padecimiento: "<<persona1.padecimiento<<endl;
	cout<<"dolencia: "<<persona1.dolencia<<endl;
	cout<<"area referida: "<<persona1.area_referida<<endl;
	cout<<"---------------------------------------------------------"<<endl;

	fread(&persona1,sizeof(pacientes),1,arch);

	}}


int main(int argc, char** argv){

		
	int op;
	cout<<"-------------MENU----------------"<<endl;
	cout<<"1)Extraer datos"<<endl;
	cout<<"2)Ingresar datos"<<endl;
	cout<<"respuesta: ";
	cin>>op;
	
	
	switch(op){
		case 1:
			extraccion();
			
			break;
			
				case 2:
			ingresar();
			datos();
			break;
	}

	
}
