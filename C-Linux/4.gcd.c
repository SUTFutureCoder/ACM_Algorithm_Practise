#include <stdio.h>

int gcd(int a, int b){

	if (a % b == 0){
		return b;
	} else {
		return gcd(b, a%b);
	}
}

int main(void){
	int a = 12;
	int b = 8;

	printf("%d\n", gcd(a, b));

	return 0;
}
