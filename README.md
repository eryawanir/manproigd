# Aplikasi Rumah Sakit - !!!! MODUL IGD!!!!
# nanda ruli eryawan - !!!! MODUL IGD!!!!


# Kebutuhan sebelum menjalankan Aplikasi
1. Install GIT terlebih dahulu sesuaikan (64bit/32bit): https://git-scm.com/download/win
2. Install XAMPP terbaru minimal : php versi 7.2.0 : https://www.apachefriends.org/download.html
3. Download & Install Composer via https://getcomposer.org/download/


# Bagaimana cara menggunakannya ?
1. Clone projek git ini kedalam folder htdocs ```"C://xampp/htdocs"``` kemudian buka terminal & pastikan anda sedang aktif didalam direktori ```"C://xampp/htdocs"```
	- Ketikan perintah ==> ```git clone https://github.com/eryawanir/manproigd.git```
2. Jika projek sudah berhasil diclone maka akan muncul folder baru namanya ***manpro-rs***. Masuk kedalam folder projek "C://xampp/htdocs/manpro-rs" dengan cara :
	- Ketikan perintah ==> ```cd manproigd ```
3. Buka terminal & pastikan anda sedang aktif didalam direktori "C://xampp/htdocs/manproigd"
	- Ketikan perintah ==> ```composer install```
4. Buka aplikasi XAMPP Control Panel
	- Start Apache Server
	- Start Mysql Server
5. Buat database di mysql dengan nama : ***manpro-rs***
6. Buka kembali terminal & pastikan anda sedang aktif didalam direktori "C://xampp/htdocs/manproigd"

	***Drop All Tables*** Jika diperlukan !!!!! ***WARNING*** !!!!!!
	- Ketikan perintah ==> ```php index.php tools drop``` !!!!! ***WARNING*** !!!!!!
	
	***Migrate Database***
	- Ketikan perintah ==> ```php index.php tools migrate```
	
	***Membuat Data Palsu***
	- Ketikan perintah ==> ``` php index.php tools seed RolesSeeder```
	- Ketikan perintah ==> ``` php index.php tools seed UsersSeeder```

	
7. Lalu buka dibrowser anda :
	- Admin Login Page	: http://localhost/manproigd/admin/login
	
8. Test login :

	| Field  	| value 				|
	| ------------- | --------------------------------------|
	| **Username** 	| ```Lihat ditable user pilih salah satu yg memiliki role id 1``` 	|
	| **Password**  | ```123123A```  				|

