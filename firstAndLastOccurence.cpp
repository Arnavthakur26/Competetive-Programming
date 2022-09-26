#include <iostream>
using namespace std;

int firstOccurence(int arr[],int size,int key){
    int s=0;
    int e=size-1;
    int mid=s +(e-s)/2;
    int ans=-1;

    while(s<=e){
        if(arr[mid]==key){
            ans=mid;
            e=mid-1;
        }
        else if(key>arr[mid]){
            s=mid+1;
        }
        else
        {
            e=mid-1;
        }
        mid=s +(e-s)/2;
    }
    return ans;
}
int lastOccurence(int arr[],int size,int key){
    int s=0;
    int e=size-1;
    int mid=s +(e-s)/2;
    int ans=-1;

    while(s<=e){
        if(arr[mid]==key){
            ans=mid;
            s=mid+1;
        }
        else if(key>arr[mid]){
            s=mid+1;
        }
        else
        {
            e=mid-1;
        }
        mid=s +(e-s)/2;
    }
    return ans;
}
int main(){
    int n;
    cin>>n;
    int arr[10];
    for (int i = 0; i < n; i++)
    {
        cin>>arr[i];
    }

    cout<<firstOccurence(arr,8,2)<<" "<<lastOccurence(arr,8,2)<<endl;
}