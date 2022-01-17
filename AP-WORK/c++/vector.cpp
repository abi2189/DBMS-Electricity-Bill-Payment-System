#include <iostream>
#include <vector>
using namespace std;
int main()
{
vector<int> v;
// add integers at the end of the vector
v.push_back( 2 );
v.push_back( 3 );
v.push_back( 4 );
// v.pop_back(); //to pop the last element i.e rear
cout << "\nThe size of v is: " << v.size()//actual size of the vector
<< "\nThe capacity of v is: "
<< v.capacity();//returns size of storage space currently allocated in terms of no. of elements

vector<int>::const_iterator it;
cout<<"\nelements are: ";
//it is a ptr, v.begin() is an address
for (it = v.begin(); it != v.end(); it++)
{ cout <<*it; }
return 0;
}

//not same as stack => can traverse and change values in bw as well