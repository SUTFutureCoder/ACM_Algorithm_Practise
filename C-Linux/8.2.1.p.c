#include <stdio.h>
#include <stdlib.h>
#define N 20

int a[N] = {0};

void gen_rand(int range){
    int i;
    srand(time(NULL));
    for (i = 0; i < N; i++){
        a[i] = rand() % range;
    }
}

int main(void){
    int i, histogram[10] = {0};

    gen_rand(10);

    for (i = 0; i < N; i++){
        histogram[a[i]]++;
    }

    int max = 0;
    for (i = 0; i < 10; i++){
        if (histogram[i] > max){
            max = histogram[i];
        }
        printf("%d\t", i);
    }

    printf("\n\n");


    while (max--){
        for (i = 0; i < 10; i++){

            if (histogram[i] > 0 && histogram[i]--){
                printf("*");
            }
            printf("\t");
        }
        printf("\n");

    }

    return 0;
}

