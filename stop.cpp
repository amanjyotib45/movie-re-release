#include <bits/stdc++.h>
using namespace std;
void stop(int n){
    int i=1;
    while(i<=n){
        int f=rand()%3;
        cout<<"Sending frame"<<i<<endl;
        if(f==0){
            cout<<"Ack.."<<i<<"received successful"<<endl;
            i++;
        }
        else if(f==1){
             cout<<"lost"<<i<<"rtransmitting"<<endl;
        }
        else if(f==2){
            cout<<"delay"<<i<<"rtransmitting"<<endl;
        }
    }
}

int main() {
    
    cout << "enter the frame";
    int n;
    cin>>n;
    stop(n);

return 0;
}