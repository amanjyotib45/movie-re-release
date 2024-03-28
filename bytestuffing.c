#include <stdio.h>
#include <string.h>

int main(int argc, char const *argv[]) {
    char a[30];         // Original data string
    char sd, ed;        // Starting and ending delimiters
    char ans[100] = " "; // Stuffed data string
    char x[3], y[3], t[3], s[3], e[3]; // Temporary buffers

    // Prompt user to enter original data string
    printf("Enter original data string:\n");
    scanf("%s", a);

    // Prompt user to enter starting delimiter
    printf("Enter starting delimiter:\n");
    scanf(" %c", &sd); // Add a space before %c to consume any leading whitespace

    // Prompt user to enter ending delimiter
    printf("Enter ending delimiter:\n");
    scanf(" %c", &ed); // Add a space before %c to consume any leading whitespace

    // Display the original data string
    printf("\nBefore stuffing, the data is: %s\n", a);

    // Prepare delimiter strings
    x[0] = s[0] = s[1] = sd;
    y[0] = e[0] = e[1] = ed;
    x[1] = y[1] = '\0';
    s[2] = e[2] = '\0';

    // Add starting delimiter to the stuffed data
    strcat(ans, x);

    // Iterate through each character in the original data
    for (int i = 0; i < strlen(a); i++) {
        t[0] = a[i];    // Get current character
        t[1] = '\0';    // Null terminate the string

        // Check if the current character is the starting delimiter
        if (t[0] == sd) {
            strcat(ans, s); // Add the stuffed starting delimiter
        }
        // Check if the current character is the ending delimiter
        else if (t[0] == ed) {
            strcat(ans, e); // Add the stuffed ending delimiter
        }
        else {
            strcat(ans, t); // Add the character as it is
        }
    }

    // Add ending delimiter to the stuffed data
    strcat(ans, y);

    // Display the stuffed data
    printf("\nAfter stuffing, the data becomes: %s\n", ans);

    return 0;
}
