#include <iostream>

using namespace std;

/*
 * Complete the 'getString' function below.
 *
 * The function is expected to return a STRING.
 * The function accepts STRING input_str as parameter.
 */

string getString(string input_str)
{
    string s = input_str;
    int n = input_str.size();
    int count[26] = {0};
    int vis[26] = {0};
    for (int i = 0; i < n; i++)
    {
        count[s[i] - 'a']++;
    }
    string res = "";
    for (int i = 0; i < n; i++)
    {
        count[s[i] - 'a']--;

        if (!vis[s[i] - 'a'])
        {
            while (res.size() > 0 && res.back() < s[i] && count[res.back() - 'a'] > 0)
            {
                vis[res.back() - 'a'] = 0;
                res.pop_back();
            }
            res += s[i];
            vis[s[i] - 'a'] = 1;
        }
    }
    return res;
}

int main()
{
    ofstream fout(getenv("OUTPUT_PATH"));

    string input_str;
    getline(cin, input_str);

    string result = getString(input_str);

    fout << result << "\n";

    fout.close();

    return 0;
}
