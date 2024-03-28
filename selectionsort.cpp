#include<bits/stdc++.h>
using namespace std;
void selectionsort(int arr[],int n)
{
   
   for(int i=0;i<=n-2;i++)
   {
    int mini = i;
    for(int j=i;j<=n-1;j++)
    {
        if(arr[j]<arr[mini]) mini = j;
    }
    swap(arr[mini],arr[i]);
   }

cout<<"the array after sort";

    for(int i=0;i<n;i++)
    {
        cout<<arr[i];
    }

}
int main()
{
    int arr[5]={6,1,9,5,7};
    selectionsort(arr,5);
    
    

}

