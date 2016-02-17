#include <stdio.h>
#include <stdlib.h>
#define N 100000

int a[N] = {0};

void gen_random(int range){
    int i;

    srand(time(NULL));

    for (i = 0; i < N; i++){
        a[i] = rand() % range;
    }

}

int main(void){
    int i, histogram[10] = {0};

    gen_random(10);

    for (i = 0; i < N; i++){
        histogram[a[i]]++;
    }

    for (i = 0; i < sizeof(histogram) / sizeof(int); i++){
        printf("%d %d\n", i, histogram[i]);
    }
    return 0;
}
