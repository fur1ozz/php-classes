#include <iostream>
#include <string>

using namespace std;

class Dog {
    public:
        string name;
        Dog(string name, int age) {
            this->name = name;
            this->age = age;
        }
        void birthday() {
            this->age++;
        }
        void woof() {
            cout << "woof";
        }
    private:
        int age = 0;
};

int main() {
    // Write C++ code here
    Dog* myDog = new Dog("Reksis", 6);
    myDog->woof();
    delete myDog;

    return 0;
}