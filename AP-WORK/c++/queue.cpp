// QUEUE STL

#include <iostream> 
#include <queue> 
using namespace std;
            //passing a queue which contains only int
void display(queue <int> Q1)
{ 
    queue <int> Q = Q1; //chuma reassigned
    while (!Q.empty()) 
    { 
        cout << '\t' << Q.front();
        Q.pop();//pop is dequeue from the front 

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
    display(qd);//pass by value
    cout<<"Popping an element from the queue..\n";
    qd.pop();
    display(qd);
    cout<<qd.back()<<"  "<<qd.size()<<"  "<<qd.front();
    //cout<<qd.size();
    return 0; 
}