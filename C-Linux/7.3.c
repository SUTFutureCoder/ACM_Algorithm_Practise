#include <stdio.h>

enum coordinate_type { RECTANGULAR, POLAR };

struct complex_struct {
    enum coordinate_type t;
    double a, b;
};

struct complex_struct make_from_real_img (double x, double y){
    struct complex_struct z;
    z.t = RECTANGULAR;
    z.a = x;
    z.b = y;
    return z;
}

struct complex_struct make_from_mag_ang (double r, double A){
    struct complex_struct z;
    z.t = POLAR;
    z.a = r;
    z.b = A;
    return z;
}



