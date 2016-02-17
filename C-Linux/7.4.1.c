#include <stdio.h>

struct segment {
    struct complex_struct start;
    struct complex_struct end;
};

struct segment s = {{ 1.0, 2.0 }, {4.0, 6.0}};

struct segment s = {1.0, 2.0, 4.0, 6.0};

