// Problem From - Coding Ninjas
// Problem Link - https://www.codingninjas.com/codestudio/problems/painter-s-partition-problem_1089557

#include <iostream>
#include <vector>
using namespace std;

bool isPossibleSolution(vector<int> &boards, int k, int mid)
{
    int painterCount = 1;
    int partSum = 0;
    int n=boards.size();

    for (int i = 0; i < n; i++)
    {
        if (partSum + boards[i] <= mid){
            partSum+=boards[i];
        }
        else{
            painterCount++;
            if(painterCount>k || boards[i]>mid){
                return false;
            }
            partSum = boards[i];
        }
    }
    return true;
}



int findLargestMinDistance(vector<int> &boards, int k)
{
    
    int s = 0;
    
    int sum = 0;
    int n= boards.size();

    for (int i = 0; i < n; i++)
    {
        sum += boards[i];
    }

    int e = sum;
    int ans = -1;
    int mid = s + (e - s) / 2;
    while (s <= e)
    {
        if (isPossibleSolution(boards,k, mid))
        {
            ans = mid;
            e = mid - 1;
        }
        else
        {
            s = mid + 1;
        }
        mid = s + (e - s) / 2;
    }
}
