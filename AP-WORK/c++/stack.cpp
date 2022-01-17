// STACK STL
#include <iostream> 
#include<stack>
using namespace std; 
            //Stack passed which contains only int values
void display(stack <int> S)
{ 
    while (!S.empty()) //untill !(true)
    { 
        cout << '\t' << S.top(); 
        S.pop(); //no return
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
    display(s); //pass by value
    cout << "\nThe top element of the stack:\n" << s.top();
    cout << "\nStack after removing the top element from the stack:\n"; 
    s.pop(); 
    display(s); 
    return 0; 
}