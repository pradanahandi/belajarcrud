# Cara Deploy Web PHP pada AWS EC2 menggunakan ubuntu
## Install Web Server
* > sudo apt update -y
* > sudo LC_ALL=C.UTF-8 add-apt-repository ppa:ondrej/php
* > sudo apt update -y
* > sudo apt install -y apache2 php7.4 libapache2-mod-7.4 php7.4-mysql php7.4-cli php7.4-common git mysql-client

## Clone Web Apps
* > sudo git clone https://github.com/pradanahandi/belajarcrud.git /var/www/html/
* > sudo chmod 755 /var/www/html/belajarcrud/
* > cd /var/www/html/belajarcrud

## Config Database
1. Buat cluster database menggunakan RDS dari MySQL
2. Akses cluster database tersebut menggunakan tambahan software seperti Chrome MySQL Admin
3. Buat database dengan nama "karyawan"
4. Buat table dengan perintah berikut 
   * > CREATE TABLE `tbl_karyawan` (
   * >  `idkaryawan` int(11) NOT NULL,
   * >  `namakaryawan` varchar(200) DEFAULT NULL,
   * >  `alamat` text
   * > ) ENGINE=InnoDB DEFAULT CHARSET=latin1;
5. Tambahkan data pada tabel karyawan dengan perintah berikut :
   * > INSERT INTO `product` (`product_id`, `product_name`, `product_price`) VALUES
   * > (1, 'Product 1', 2000),
   * > (2, 'Product 2', 2000),
   * > (3, 'Product 3', 3000),
   * > (4, 'Product 4', 2000),
   * > (5, 'Product 5', 1500); 
6. Kembali ke putty, dan buka file conn.php yang ada di folder /var/www/html/belajarcrud dengan perintah berikut :
   * > sudo nano conn.php
   * > Edit seperti host(endpoint), username, password, dan nama database seperti berikut :
       * > $host =  isi dengan endpoint RDS contoh -> "endpoint.rds.amazon.com"
       * > $username = isi dengan username RDS contoh -> "admin"
       * > $password = YOUR PASSWORD contoh -> "password"
       * > $database = YOUR DATABASE contoh -> "karyawan"
   * > Jika sudah, simpan dan keluar menggunakan perintah ctrl + x + y enter
## Test Program
* > Buka browser dan masukan ip address
