// QUEUE STL

#include <iostream> 
#include <queue> 
using namespace std;
void display(queue <int> Q1)
{ 
    queue <int> Q = Q1; 
    while (!Q.empty()) 
    { 
        cout << '\t' << Q.front();
        Q.pop(); 

    } 
    cout << '\n';
}
int main() 
{ 
    int i=1;
    float p;
    queue <int> qd; 
    while (i<5)
    {
        cout<<"enter eleement "<<i<<":\n";
        cin>>p;
        qd.push(p);
        i++;
    }
    cout << "Queue:\n"; 
    display(qd);
    cout<<"Popping an element from the queue..\n";
    qd.pop();
    display(qd);
    cout<<qd.back()<<"  "<<qd.size()<<"  "<<qd.front();
    //cout<<qd.size();
    return 0; 
}

// STACK STL
#include <iostream> 
#include<stack>
using namespace std; 
void display(stack <int> e)
{ 
    while (!e.empty()) 
    { 
        cout << '\t' << e.top(); 
        e.pop(); 
    } 
    cout << '\n'; 
}
int main ()
{ 
    stack <int> s; 
    s.push(1); 
    s.push(0);
    s.push(2); 
    s.push(6); 

    cout << "The stack is : "; 
    display(s); 
    cout << "\nThe top element of the stack:\n" << s.top();
    cout << "\nStack after removing the top element from the stack:\n"; 
    s.pop(); 
    display(s); 
    return 0; 
}

// List STL
#include <iostream>
#include <list>
#include <iterator>
using namespace std;
void showlist(list <int> g)
{
list <int> :: iterator it;
for(it = g.begin(); it != g.end(); ++it)
{ cout << '\t' << *it; }
cout << '\n';
}
int main(){
list <int> gqlist1, gqlist2;
for (int i = 0; i < 10; ++i){
gqlist1.push_back(i * 2);
gqlist2.push_front(i * 3);
}
cout << "\nList 1 (gqlist1) is : ";
showlist(gqlist1);
cout << "\nList 2 (gqlist2) is : ";
showlist(gqlist2);
cout << "\ngqlist1.front() : " << gqlist1.front();
cout << "\ngqlist1.back() : " << gqlist1.back();
cout << "\ngqlist1.pop_front() : ";
gqlist1.pop_front();
showlist(gqlist1);
cout << "\ngqlist2.pop_back() : ";
gqlist2.pop_back();
showlist(gqlist2);
return 0;}
