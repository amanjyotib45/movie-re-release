#include<bits/stdc++.h>
#include<string.h>

using namespace std;
int main(){
    string input;
    char output[50];
    strcat(output,"axydfg");
    cin>>input;
    int k=6;
    for(int i=0;i<input.size();++i){
        char ch=input[i];
        output[k++]=ch+13;
        output[k++]=ch-13;
    }
    cout<<"\nEncrypted string is  : ";
    for(int i=0;i<k;++i){
        cout<<output[i];
    }
    cout<<"\n Reciever side : ";
    for(int i=6;i<k;i+=2){
        char ch=output[i]-13;
        cout<<ch;
    }
}