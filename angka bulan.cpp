#include <iostream>
 
using namespace std;
 
int main()
{
  int pilihan;
  {
    cout << "##  angka bulan ##" << endl;
    cout << "==============================" << endl;
    cout << "1. bulan 1" << endl;
    cout << "2. bulan 2" << endl;
    cout << "3. bulan 3 " << endl;
    cout << "4. bulan 4" << endl;
    cout << "5. bulan 5" << endl;
    cout << "6. bulan 6" << endl;
    cout << "7. bulan 7" << endl;
    cout << "8 bulan 8 " << endl;
    cout << "9 bulan 9" << endl;
    cout << "10 bulan 10" << endl;
    cout << "11 bulan 11" << endl;
    cout << "12 bulan 12" << endl;
    
    
    cout << endl;
 
    cout << "Pilihan anda: ";
    cin >> pilihan;
 
    switch(pilihan){
    case 1:
    cout<< " januari"<< endl;
        break;
    case 2:
        cout << "februari" << endl;
        break;
    case 3:
        cout << "maret" << endl;
        break;
    case 4:
        cout << "April" << endl;
        break;
    case 5:
        cout << "mei" << endl;
        break;
    case 6:
        cout<< " Juni"<< endl;
        break;
    case 7:
        cout << "juli" << endl;
        break;
    case 8:
        cout << "Agustus" << endl;
        break;
    case 9:
        cout << "september" << endl;
        break;
    case 10:
        cout << "oktober" << endl;
        break;
         case 11:
        cout << "november" << endl;
        break;
    case 12:
        cout << "desember" << endl;
    default:
        cout << "Bulan tidak ada" << endl;
    }
   
  }
  cout << "Terimakasih...";
 
  cout << endl;
  return 0;
}
