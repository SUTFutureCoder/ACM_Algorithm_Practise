#include <stdio.h>
#include <math.h>

int main(void){

	int line;
	char ch;
	
	scanf("%d%c", &line, &ch);

	int half = (line + 1) / 2;

	for (int j = 1; j <= line; j++){
		
		int i = 1;
		for (; i <= fabs(half - j); i++){
			printf(" ");
		}
		
		--i;

		for (int k = 0; k < line - 2 * fabs(half - j) ; k++){
			printf("%c", ch);
		}
		
		printf("\n");
	}

	return 0;


}



