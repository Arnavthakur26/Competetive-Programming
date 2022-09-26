#include <iostream>
using namespace std;

int main()
{
    int n;
    cin >> n;
    int a[n];
    for (int i = 0; i < n; i++)
    {
        cin >> a[i];
    }
    int currentSum = 0;
    for (int i = 0; i < n; i++)
    {
        currentSum = 0;
        for (int j = i; j < n; j++)
        {
            currentSum += a[j];
            cout << currentSum << endl;
        }
    }

    return 0;
}