#include <iostream>
#include <map>
using namespace std;
typedef multimap< int, double, std::less< int > > mp_type;
// creates a mutlimap type
int main(){
    mp_type mp;
    // value_type is overloaded in multimap to create objects of the
    //class pair
    mp.insert( mp_type::value_type( 10, 14.5 ) );
    mp.insert( mp_type::value_type( 10, 18.5 ) ); //dup key allowed
    cout << "The elements are " << "\n";
    // use iterator to go through mp
    for (mp_type::iterator it = mp.begin(); it != mp.end(); it ++)
        cout << it->first << '\t' << it->second << '\n';
        //first holds key, second holds value
        //*ptr contains address , *it.first
    return 0;
}