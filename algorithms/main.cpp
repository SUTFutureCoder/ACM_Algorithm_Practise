#include <iostream>
using namespace std;

void ReplaceBlank(char *string, int length){
    if (string == NULL && length == 0){
        return;
    }

    int originalLength = 0;
    int numberOfBlank = 0;
    int i = 0;
    while (string[i] != '\0'){
        ++originalLength;
        if (string[i] == ' '){
            ++numberOfBlank;
        }
        ++i;
    }

    int newLength = originalLength + numberOfBlank * 2;
    if (newLength > length){
        return ;
    }

    int indexOfOriginal = originalLength;
    int indexOfNew = newLength;
    while (indexOfOriginal >= 0 && indexOfNew > indexOfOriginal){
        if (string[indexOfOriginal] == ' '){
            string[indexOfNew--] = '0';
            string[indexOfNew--] = '2';
            string[indexOfNew--] = '%';
        } else {
            string[indexOfNew--] = string[indexOfOriginal];
        }
        --indexOfOriginal;
    }
}

int main(){
    char str[] = "abc de asdf test";
    ReplaceBlank(str, sizeof(str));

    while (*str != '\0'){
        printf("%c", *str);
        *str += 1;
    }
    return 0;
}