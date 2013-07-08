# include<stdio.h>
# include<unistd.h>
# include<fcntl.h>
int main()
{
int op;
FILE *fp1;
char input[10],str[60],c[100];
void Create()
{
printf("\nEnter the input file name");
scanf("%s",input);
fp1=fopen(input,"r");
//do
//{

fscanf(fp1,"%s",c); 
printf("Data from file:\n%s",c);
fseek(fp1, 0L, SEEK_END);
printf("\n%ld\n",ftell(fp1)-3);  
//fgets(str,60,fp1);
//puts(str);
//printf("\n Enter the Symbol");
//printf("\n Enter the Symbol Value Type");
//printf("\n Enter the Value of Symbol");
//printf("\n Enter the address of the symbol");
//}
//while(c!="end");
fclose(fp1);
}
do
{
printf("1.create\n");
printf("2.Exit\n");
printf("Enter the Option:");
scanf("%d",&op);
switch(op)
{
case 1:
Create();
break;
}
}
while(op!=2);
}
