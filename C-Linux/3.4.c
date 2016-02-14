#include <stdio.h>

void print_time(int hour, int minute){
	printf("%d:%d\n", hour, minute);

}

int main(void){

	int h = 23, m = 59;

	print_time(h, m);

	return 0;

}
