#include<iostream>
using namespace std;
class Intger
{
int i;
public:
Intger()
{
i=7;
}
Intger(int x)
{
i=x;
}
int get_i()
{
return i;
}
int addIntger(Intger a , Intger b){

return (a.i+b.i);
}
};
int main()
{
Intger obj,obj1,obj2(200);
cout<<"i="<<obj1.get_i()<<endl;
cout<<"i="<<obj2.get_i()<<endl;
cout<<obj.addIntger(obj1,obj2);

return 0;
}
