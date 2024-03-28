#include<bits/stdc++.h>
using namespace std;
void compliment(vector<int> & temp){
    for(int i=0;i<8;++i){
        temp[i]=!temp[i];
    }
}
void solve(vector<int> & temp ,int carry){

    for(int i=7;i>=0;--i){
        int sum=temp[i]+carry;
        if(sum == 3){
            temp[i]=1;
            carry=1;
        }
        else if(sum == 2){
            temp[i]=0;
            carry=1;
        }
        else if(sum == 1){
            temp[i]=1;
            carry=0;
            break;
        }
        else if(sum == 0){
            temp[i]=0;
            carry=0;
            break;
        }
    }
    if(carry == 1)
        solve(temp,carry);
}
void checksum(vector<int>& temp,vector<int>temp2){
    int carry=0;
    for(int i=7;i>=0;--i){
        int sum=temp[i]+temp2[i]+carry;
        if(sum == 3){
            temp[i]=1;
            carry=1;
        }
        else if(sum == 2){
            temp[i]=0;
            carry=1;
        }
        else if(sum == 1){
            temp[i]=1;
            carry=0;
        }
        else if(sum == 0){
            temp[i]=0;
            carry=0;
        }
    }
    if(carry == 1){
        solve(temp,carry);
    }
}
bool reciever(vector<vector<int>>&ans){
    vector<int> temp(8,0);
    for(int i=0;i<ans.size();++i){
        vector<int>temp2(8,0);
        for(int j=0;j<8;++j){
            temp2[j]=ans[i][j];
        }
        checksum(temp,temp2);
    }
    compliment(temp);
    for(int i=0;i<8;++i){
        if(temp[i] == 1)
            return false;
    }
    return true;
}

int main(){
    vector<vector<int>>ans;
    int n;
    cout<<"Number of message you want to send : ";
    cin>>n;
    for(int i=0;i<n;++i){
        vector<int> temp;
        cout<<"Enter data to be send :";
        for(int j=0;j<8;++j){
            int num;
            cin>>num;
            temp.push_back(num);
        }
        ans.push_back(temp);
    }

    // apply checksum to add it to last of ans which help us in error detection 

    vector<int> temp(8,0);
    for(int i=0;i<n;++i){
        vector<int>temp2(8,0);
        for(int j=0;j<8;++j){
            temp2[j]=ans[i][j];
        }
        checksum(temp,temp2);
    }
    // temp[2]=1;
    cout<<endl<<"Temp : ";
    //its working fine  so lets compilment it 
    compliment(temp);
    cout<<endl;
    ans.push_back(temp);

    //lets check whether checksum is working or not
    for(int i=0;i<n+1;++i){
        for(int j=0;j<8;++j){
            cout<<ans[i][j];
        }
        cout<<endl;
    }

    
    //lets check on reciever side
    if(reciever(ans))
        cout<<"Message recieved correctly . ";
    else
        cout<<"Message recieved is incorrect . ";
    

    return 0;
}
