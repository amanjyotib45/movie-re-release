// #include <iostream>
// using namespace std;

// void bitStuff(int arr[], int n) {
//     // Define a buffer for the stuffed bits
//     int stuffed[100];
//     int j = 0; // Index for the stuffed array

//     // Start iterating through the original bit stream
//     for (int i = 0; i < n; i++) {
//         // Check if the current bit is a '1'
//         if (arr[i] == 1) {
//             int count = 0; // Counter for consecutive '1's

//             // Copy the current '1' bit to the stuffed array
//             stuffed[j++] = arr[i];

//             // Continue iterating through consecutive '1's and add them to the stuffed array
//             for (int k = i + 1; k < n && arr[k] == 1 && count < 5; k++) {
//                 stuffed[j++] = arr[k];
//                 count++;
//             }

//             // If there were more than 5 consecutive '1's, insert a '0' after the fifth '1'
//             if (count >= 5) {
//                 stuffed[j++] = 0;
//             }

//             // Update the index 'i' to skip over the consecutive '1's that have been processed
//             i += count;
//         } else {
//             // If the current bit is not a '1', simply copy it to the stuffed array
//             stuffed[j++] = arr[i];
//         }
//     }

//     // Print the stuffed bit stream
//     for (int i = 0; i < j; i++) {
//         cout << stuffed[i] << " ";
//     }
//     cout << endl;
// }

// int main() {
//     // Original bit stream
//     int arr[30] = {1, 1, 1, 1, 1, 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 1, 0,1, 1, 1, 1, 1, 1,0,1,1,1,1,1,1};
//     int n = 30; // Size of the original bit stream

//     // Call the bitStuff function to perform bit stuffing
//     bitStuff(arr, n);

//     return 0;
// }

// #include<bits/stdc++.h>
// #define MAX 100
// using namespace std;
// int main(){
//     string str;
//     cin>>str;
//     string res="";
//     cout<<"Encrypted Data : ";
//     for(int i=0;i<str.length();++i){
//         res+=str[i];
//         res+=str[i]+5;//you can condition according to your choice just be aware to use in sender fucntion as well to remove redundant added data
//         res+=str[i]-5;
//     }
//     cout<<res;
//     cout<<"\n Decrypting data : ";
//     for(int i=0;i<res.length();++i){
//         cout<<res[i]<<" ";
//         i+=2;
//     }
//   return 0;
// }

#include<bits/stdc++.h>
using namespace std;
int main(){
    string str;
    cout<<"Enter your string : ";
    cin>>str;
    string res="";
    int count=0;
    for(int i=0;i<str.size();i++)
    {
        if(str[i]=='1')
        {
            count++;
        }
        else if(str[i]=='0')
        {
            count = 0;
        }
        if(count==5)
        {
            res+='0';
           
        }
        cout<<"\nEncrypted Data : "<<res;
        count=0;
        cout<<"\n Decrypted string : ";   
        for(int i=0;i<str.size();i++)
        {
            cout<<str[i]<<endl;
            
            if(res[i]=='1')
            {
                count++;
            }
            else if(res[i]=='0')
            {
               count = 0;
            }
            if(count=5)
            {
                count = 0;
                i+=1;
            }
        }  
    }
}