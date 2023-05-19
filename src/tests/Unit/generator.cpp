// generator.cpp
#include<bits/stdc++.h>
using namespace std;

int rnd(int a, int b) {
	return a + rand() % (b - a + 1);
}

int main(int argc, char* argv[]) {
	srand(atoi(argv[1]));
	
	int tt = rnd(1, 10000);
	
	cout << "data = [\n";

	for(int i = 0; i < tt; i++) {
		string name = "";
		int name_length = rnd(4, 10);
		for(int j = 0; j < name_length; j++) {
		    name += char('a' + rnd(0, 25));
		}
		
		string email = "";
		int email_length = rnd(3, 10);
		for(int j = 0; j < email_length; j++) {
		    email += char('a' + rnd(0, 25));
		}
		email += "@mail.com";
		
		string pass = "";
		int pass_length = rnd(5, 10);
		for(int j = 0; j < pass_length; j++) {
		    pass += char('a' + rnd(0, 25));
		}
		cout << "[" << "\""<< name << "\""<< ',' << "\""<< email << "\""<< ',' << "\""<< pass << "\""<<"],";
		cout << endl;
	}
	cout << "]";
	
	return 0;
}