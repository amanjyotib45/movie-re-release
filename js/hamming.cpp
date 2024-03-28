#include<bits/stdc++.h>
using namespace std;
int func(vector<int> & parity , int shift){
    int n=parity.size();
    int count =0 ;
    for(int i =shift ;i< n ;i+=shift){
        int x=shift,j=0;
        while( x != 0 && i+j  < n){
            j++;
            if(parity[i+j] == 1)
                count++;
            x--;
        }
        i+=shift;
    }
    if(count % 2 == 0)
        return 0;
    else    
        return 1;
    //even parity
}
int main(){
    int d,r=0;
    cout<<"Enter number of pits in checksum to check : ";
    cin>>d;
    while(pow(2,r) < d+r+1)
        r++;
    
    vector<int>input(d,0);
    cout<<"\n Enter input Data : ";
    for(int i=0;i<d;++i){
        cin>>input[i];
    }
    int n=d+r+1,j=0,red=0;
    vector<int>parity(n,0);
    for(int i=1 ; i< n; ++i){
        if(pow(2,red) == i){
            red++;
            continue;
        }
    parity[i]=input[j++];
    }
    cout<<"Data encrypted in parity : ";
    for(int i=1 ; i< n; ++i){
        cout<<parity[i]<<" ";
    }
    cout<<endl;
    for(int i=0;i<r;++i){
        int shift=pow(2,i);
        int par=func(parity,shift);
        cout<<"parity bit : p"<<shift<<" : "<<par<<endl;
        parity[shift]=par;
    }
}
