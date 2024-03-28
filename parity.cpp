#include<bits/stdc++.h>
using namespace std;
void sender(string &str,int flag){
    int count =0;
    for(int i=0;i<str.size();++i){
        if(str[i] == '1')
            count++;
    }
    if(flag % 2 == 0 && count % 2 == 0){//if even count even parity
        str+='0';
    }
    else if(flag % 2 != 0 && count % 2 != 0){//if odd parity odd count
        str+='0';
    }
    else if(flag % 2 != 0 && count % 2 == 0){//if odd parity even count
        str+='1';
    }
    else if(flag % 2 == 0 && count % 2 != 0){//if even parity odd count
        str+='1';
    }
    cout<<endl<<"DATA SEND TO RECIEVER IS :"<<str<<endl;
}
void reciever(string & str,int flag){
    int count =0;
    int n=str.size();
    for(int i=0;i<n-1;++i){
        if(str[i] == '1')
            count++;
    }
    if((flag % 2 == 0 && count % 2 != 0) || (flag % 2 != 0 && count % 2 == 0)){
        if(str[n-1] == '1')
            cout<<"Correct message .";
        else
            cout<<"Wrong message .";
    }
    else if((flag % 2 == 0 && count % 2 == 0) || (flag % 2 != 0 && count % 2 != 0)){
        if(str[n-1] == '0')
            cout<<"Correct message .";
        else
            cout<<"Wrong message .";
    }

}
int main(){
    string str;
    cout<<"Enter data in bits format :";
    cin>>str;
    int flag;//flag == 0 for even parity
    cout<<"\n Enter even or odd parity (0/1) :";
    cin>>flag;
    sender(str,flag);
    cout<<endl<<"Reciever side \n";
    str[3]='1';//we changed bit in order to check whether it is working for all cases
    reciever(str,flag);
    return 0;
}