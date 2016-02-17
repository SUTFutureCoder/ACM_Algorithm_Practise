#include <stdio.h>
#include <stdlib.h>
#define N 1000000

int a[N];

void gen_random(int upper_bound){
    int i;
    for (i = 0; i < N; i++){
        a[i] = rand() % upper_bound;
    }
}

int howmany(int value){
    int count = 0, i;
    for (i = 0; i < N; i++){
        if (a[i] == value){
            ++count;
        }
    }
    return count;
}

//void print_random(){
//    int i;
//    for (i = 0; i < N; i++){
//      printf("%d ", a[i]);
//  }
//    printf("\n");
//}

int main(){
    gen_random(10);
    int i;
    printf("value\thow many\n");
    for (i = 0; i < 10; i++){
        printf("%d\t%d\n", i, howmany(i));
    }
    return 0;
}
