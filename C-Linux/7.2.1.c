#include <stdio.h>

struct reational{
	int x, y;
};

struct reational make_rational(int x, int y){
	struct reational tmp;
	tmp.x = x;
	tmp.y = y;
	return tmp;
}

struct reational add_rational(struct reational a, struct reational b){
	struct reational tmp;
	tmp.x = a.x + b.x;
	//这里应该求最小公倍数
	tmp.y = a.y;
	return tmp;
}

struct reational sub_rational(struct reational a, struct reational b){
	struct reational tmp;
	tmp.x = a.x - b.x;
	tmp.y = a.y;
	return tmp;
}

struct reational mul_rational(struct reational a, struct reational b){
	struct reational tmp;
	tmp.x = a.x * b.x;
	tmp.y = a.y * b.y;
	return tmp;
}


struct reational div_rational(struct reational a, struct reational b){
	struct reational tmp;
	tmp.x = a.x * b.y;
	tmp.y = a.y * b.x;
	return tmp;
}

int euclid(int a, int b){
	if (a % b == 0){
		return b;
	} else {
		return euclid(b, a % b);
	}
}


void print_rational(struct reational a){
	int gcd = euclid(a.x, a.y);

	printf("%d/%d\n", a.x / gcd, a.y / gcd);
}

int main(void){
	struct reational a = make_rational(1, 8);
	struct reational b = make_rational(-1, 8);

	print_rational(add_rational(a, b));
	print_rational(sub_rational(a, b));
	print_rational(mul_rational(a, b));
	print_rational(div_rational(a, b));

	return 0;
}
