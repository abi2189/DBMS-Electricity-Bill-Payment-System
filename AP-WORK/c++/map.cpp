//The following code fragment shows how to use indexes
//with an object of the class map
#include <iostream>
#include <map>
using namespace std;

int main() {
    map<int, double, less<int>> map_obj;
    // sets the value of key 20 to 125.25. If subscript
    // 20 is not in map then creates new
    // key=20, value=125.25 pair
    map_obj [20] = 125.25;
    cout<<map_obj[20];
    return 0;
}