#include<bits/stdc++.h>
using namespace std;
void sender(string &str,int flag)
{
    int count = 0;
    for(int i=0;i<str.size();i++)
    {
        if(str[i]=='1') count++;
    }
    if(flag%2==0 && count%2==0)
    {
        str+='0';
    }
    else if(flag%2!=0 && count%2==0)
    {
        str+='1';
    }
    else if(flag%2==0 && count%2!=0)
    {
       str+='1';
    }
    else if(flag%2!=0 && count%2!=0)
    {
       str+='0';
    }
    cout<<endl<<"data send to rcvr is "<<str<<endl;

}
void reciver(string str,int flag)
{   int count = 0;
    int n = str.size();
    for(int i =0;i<n-1;i++)
    { 
      if(str[i]=='1') count++;
    }
    if(flag % 2 == 0 && count % 2 != )
}
int main()
{
    string str;
    cout<<"enter the sring in bits formats";
    cin>>str;
    int flag;
    cout<<"enter the flag value 0 for even parity and 1 for odd parity";
    cin>> flag ;
    sender(str,flag);
    reciver(str,flag);
}