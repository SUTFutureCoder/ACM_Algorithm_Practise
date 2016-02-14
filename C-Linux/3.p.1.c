#include <stdio.h>

int increment(int x){

	return x + 1;

}

int main(void){


	int i = 1, j = 2;

	printf("%d\n", increment(i));

	printf("%d\n", increment(j));

	return 0;
}
