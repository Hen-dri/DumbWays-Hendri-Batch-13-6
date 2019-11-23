#include <iostream>
#include <conio.h>
#include <iomanip>
using namespace std;


int main(void)

{
int pilih;
do{

cout<<endl;
cout<<"Menu Pilihan "<<endl;
cout<<endl;
cout<<"1. Diagonal bawah WAYSDUMB"<<endl;
cout<<"2. Diagonal bawah DEV69"<<endl;
cout<<endl;
cout<<"Pilihan anda : "; 
cin>>pilih;
switch(pilih)
{
case 1:
{
for(int i=1;i<=10;i++)
{ for(int j=1;j<=10;j++)
if(i==j)
cout<<"WAYSDUMB";
else
cout<<" ";
cout<<endl;
}
getch();
break;
{
cout<<" Enter Kembali ";
}
}
case 2:
{
for(int i=1;i<=10;i++)
{ for(int j=1;j<=10;j++)
if(i==j)
cout<<"DEV69";
else
cout<<" ";
cout<<endl;
}
getch();
break;

}
}
}while(pilih!=8);
getch();
}