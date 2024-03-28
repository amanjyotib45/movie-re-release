#include<stdio.h>
#include<string.h>
using namespace std;
int main(int argc, char const *argv[])
{
    char a[30];
    char sd,ed;
    char ans[100]=" ";
    char x[3],y[3],t[3],s[3],e[3];
    printf("Enter orignial data string\n");
    scanf("%s",a);
    printf("Enter starting deleimeter\n");
    scanf(" %c", &sd);
    printf("Enter ending deleimeter\n");
    scanf(" %c", &ed);
       printf("\n Before stuffing the data =: %s\n",a);
    x[0]=s[0]=s[1]=sd;
    y[0]=e[0]=e[1]=ed;
    x[1]=y[1]='\0';
    s[2]=e[2]='\0';
    strcat(ans,x);
    for(int i=0;i<strlen(a);i++){
        t[0]=a[i];
        t[1]='\0';
        if(t[0]==sd){
            strcat(ans,s);
        }
        else if(t[0]==ed){
            strcat(ans,e);
        }
 else{
            strcat(ans,t);
        }
    }
       strcat(ans,y);
       printf("\n After stuffing the data becomes: %s\n",ans);
      return  0;
}