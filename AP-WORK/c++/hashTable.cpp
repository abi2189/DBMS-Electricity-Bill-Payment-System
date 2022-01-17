#include<iostream>
#include<list>
using namespace std;

//main class hash
class Hash{
    int BUCKET; // No. of buckets
    list<int> *table;
    public:
    Hash(int V); // Constructor
    void insertItem(int x);
    void deleteItem(int key);
    int hashFunction(int x) {
        return (x % BUCKET);//returns an index
    }
    void displayHash();
    };
    
Hash::Hash(int b){
    this->BUCKET = b;
    table = new list<int>[BUCKET];//some alloc since table is a ptr
}

void Hash::insertItem(int key){
    int index = hashFunction(key);
    table[index].push_back(key);//pushed to the rear
}

void Hash::deleteItem(int key){
    // get the hash index of key
    int index = hashFunction(key);//returns same index
    // find the key in (index)th list
    list <int> :: iterator i;
    for (i =table[index].begin();i!=table[index].end();i++){
        if (*i == key)//traveersing thru ll of particular index made by hashfucntion(key)
        break;
    }
    // if key is found in hash table, remove it
    if (i != table[index].end())
        table[index].erase(i);//deletion if it exists
} // example Continues in next slide
// function to display hash table
void Hash::displayHash() {
    for (int i = 0; i < BUCKET; i++) {
        cout << i;
        for (auto x : table[i])
            cout << " --> " << x;
        cout << endl;
    }
}
int main()
{
    // array that contains keys to be mapped
    int a[] = {15, 11, 27, 8, 12};
    int n = sizeof(a)/sizeof(a[0]);
    // insert the keys into the hash table
    Hash h(7); // 7 is count of buckets in hash table
    for (int i = 0; i < n; i++)
        h.insertItem(a[i]);//all the values are pushed into keys
    // delete 12 from hash table
    // h.displayHash();
    h.deleteItem(12);
    // display the Hash table
    h.displayHash();
    return 0;
}