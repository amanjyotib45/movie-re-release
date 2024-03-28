#include <iostream>
#include <stack>
#include <string>
#include <cctype>
#include <stdexcept>

using namespace std;

int evaluateSuffixExpression(const string& expression) {
    stack<int> operands;

    for (char ch : expression) {
        if (isdigit(ch)) {
            operands.push(ch - '0');
        } else if (ch == '+' || ch == '-' || ch == '*' || ch == '/') {
            if (operands.size() < 2)
                throw invalid_argument("Invalid expression: Insufficient operands");

            int operand2 = operands.top();
            operands.pop();
            int operand1 = operands.top();
            operands.pop();

            switch (ch) {
                case '+':
                    operands.push(operand1 + operand2);
                    break;
                case '-':
                    operands.push(operand1 - operand2);
                    break;
                case '*':
                    operands.push(operand1 * operand2);
                    break;
                case '/':
                    if (operand2 != 0)
                        operands.push(operand1 / operand2);
                    else
                        throw invalid_argument("Invalid expression: Division by zero");
                    break;
            }
        }
    }

    if (operands.size() != 1)
        throw invalid_argument("Invalid expression: Extra operands");
    
    return operands.top();
}

int main() {
    string expression;
    cout << "Enter the suffix expression: ";
    getline(cin, expression);

    try {
        int result = evaluateSuffixExpression(expression);
        cout << "Result of the expression: " << result << endl;
    } catch (const exception& e) {
        cerr << "Error: " << e.what() << endl;
    }

    return 0;
}
