#include <iostream>
#include <set>
using namespace std;

int main(){
    multiset< int, less< int > > ms;
    ms.insert( 10 ); // insert 10
    ms.insert( 35 ); // insert 35
    ms.insert( 10 ); // insert 10 again (allowed)
    // returns the number of entries = 10
    multiset < int, less< int > >::iterator it; // creates an iterator
    it = ms.find(10); //Returns an iterator to the element ‘g’ in the multiset if found, else returns the iterator to end.
    //cout<<endl<<*it;//it contains value 10

    //The multiset::end() returns an iterator pointing to the position past the last element in the container.
    if ( it != ms.end() ){ // iterator not at end 
        cout<<"10 was found"<<endl;
    }else if(it == ms.end()){
        cout<<"reached end not found";
    }
    return 0;
}