#include <iostream>

using namespace std;

const int MAX_SIZE = 100;
int stack[MAX_SIZE], top = -1;

void push(int val) {
   if(top >= MAX_SIZE - 1)
      cout << "Stack Overflow" << endl;
   else {
      top++;
      stack[top] = val;
   }
}

void pop() {
   if(top <= -1)
      cout << "Stack Underflow" << endl;
   else {
      cout << "The popped element is " << stack[top] << endl;
      top--;
   }
}

void display() {
   if(top >= 0) {
      cout << "Stack elements are: ";
      for(int i = top; i >= 0; i--)
         cout << stack[i] << " ";
      cout << endl;
   } else
      cout << "Stack is empty" << endl;
}

int main() {
   int ch, val;
   cout << "1) Push in stack" << endl;
   cout << "2) Pop from stack" << endl;
   cout << "3) Display stack" << endl;
   cout << "4) Exit" << endl;
   
   do {
      cout << "Enter choice: ";
      cin >> ch;
      switch(ch) {
         case 1: {
            cout << "Enter value to be pushed: ";
            cin >> val;
            push(val);
            break;
         }
         case 2: {
            pop();
            break;
         }
         case 3: {
            display();
            break;
         }
         case 4: {
            cout << "Exiting program" << endl;
            break;
         }
         default: {
            cout << "Invalid Choice" << endl;
            break;
         }
      }
   } while(ch != 4);
   
   return 0;
}
