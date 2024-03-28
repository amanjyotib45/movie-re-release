#include <string>
#include <iostream>
using namespace std;

class CRC {
    string input, divisor, divident, result; // Member variables for input, divisor, dividend, and result
    int len_divident, len_gen, len_inp; // Length variables

public:
    // XOR operation function
    string fun_xor(string a, string b) {
        string res = "";
        // If MSB is 0, simply remove it
        if (a[0] == '0') {
            return a.substr(1);
        } else { // Otherwise, perform XOR for each bit
            for (int i = 0; i < len_gen; i++) {
                res += (a[i] == b[i] ? '0' : '1');
            }
            return res.substr(1); // Remove MSB
        }
    }

    // Function to perform modulo division
    void modulo_div() {
        string temp_div = divisor;
        string temp_divident = divident.substr(0, len_gen);
        int j = len_gen;
        while (j < len_divident) {
            // Perform XOR operation
            temp_divident = fun_xor(temp_divident, temp_div);
            temp_divident = temp_divident + divident[j];
            j++;
        }
        // Result is input appended with the remainder after division
        result = input + fun_xor(temp_divident, temp_div);
    }

    // Function to get input data
    void getData() {
        cout << "Enter input:" << endl;
        cin >> input;
        cout << "Enter coefficient of generator polynomial: " << endl;
        cin >> divisor;
        len_gen = divisor.length();
        len_inp = input.length();
        divident = input;
        // Append (length of polynomial - 1) zeros to form the dividend
        int r = len_gen - 1;
        for (int i = 0;i < r; i++) {
            divident = divident + '0';
        }
        len_divident = divident.length();
        // Perform modulo division
        modulo_div();
    }

    // Function to simulate receiver side
    void reciver_side() {
        string data_rec;
        cout << "\n Enter Data Received    ";
        cin >> data_rec;
        string temp_div = divisor;
        string temp_divident = data_rec.substr(0, len_gen);
        int j = len_gen;
        // Perform modulo division for received data
        while (j < data_rec.length()) {
            temp_divident = fun_xor(temp_divident, temp_div);
            temp_divident = temp_divident + data_rec[j];
            j++;
        }
        // Calculate the remainder
        string error = fun_xor(temp_divident, temp_div);
        cout << "Remainder=" << error << endl;
        bool flag = 0;
        // Check if any error bits are set
        for (int i = 0; i < len_gen - 1; i++) {
            if (error[i] == '1') {
                flag = 1;
                break;
            }
        }
        // Display whether data is received with errors or not
        if (flag == 0) {
            cout << "\n Correct data received without any error:" << endl;
        } else {
            cout << "\n Data received contains some errors: " << endl;
        }
    }

    // Function to display sender side information
    void sender_side() {
        cout << "Input: " << input << endl;
        cout << "Polynomial: " << divisor << endl;
        cout << "Dividend: " << divident << endl;
        cout << "Data to send: " << result << endl;
    }
};

int main() {
    CRC c; // Create CRC object
    c.getData(); // Get input data
    c.sender_side(); // Display sender side information
    c.reciver_side(); // Simulate receiver side
    return 0;
}
