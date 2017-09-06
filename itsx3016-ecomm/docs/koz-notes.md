# ITSX-3016
## Notes
### Installation
#### macOS Sierra 10.12.5
##### XAMPP
Turn off the built in apache web server
```
$ sudo apachectl graceful-stop
```
Ran the XAMPP xampp-osx-5.6.30-1-installer.dmg file and chose the defaults. The sofwtare
is installed into the ```/Applications/XAMPP``` directory. Start the mysql server. Visit
the http://localhost/index.php link and see the XAMPP welcome page.

A quick test to acces the mysql server.
```
$ curl localhost:3306
5.5.5-10.1.21-MariaDB'hXa_:Ax???X0$cJ&|cYrU4mysql_native_password!??#08S01Got packets out of orderallegro:itsx3016-ecomm koz$ 
$
```
Visit ```http://localhost/phpmyadmin``` to create a shop database.

Copy the shop-script source code to the web server, fix the permissions and run the installer.
```
$ sudo cp -r itsx3016-ecomm /Applications/XAMPP/htdocs
$ sudo chmod 777 cfg products_pictures templates templates_c
$ sudo chmod 666 cfg/*
```
Now visit http://localhost/itsx3016-ecomm/install.php
```
hostname: localhost
username: root
password: <leave blank>
database name: shop
Admin login: admin
Admin password: <choose a password>
```
Leave ```fill database with demo content ``` checked and choose ```install```.

##### Project

###### Students
Mithuna: mithunarkrishna@gmail.com
Souhir Ben Hsan Kessemtini: souhirbenhsan@gmail.com

###### Database 
#### Query
The query needs to return: item ordered, date ordered, quantity ordered, and customer name.
```
Description           Table                    Field
item ordered          SS_ordered_carts         name
date ordered          SS_orders                order_time
quantity ordered      SS_ordered_carts         Quantity    
customer name         SS_orders                cust_firstname, cust_lastname
```
##### Login using the mysql CLI 
```$ /Applications/XAMPP/bin/mysql -u root -h localhost shop```
```
mysql> select SS_ordered_carts.name,SS_orders.order_time,SS_ordered_carts.Quantity,SS_orders.cust_firstname,SS_orders.cust_lastname from SS_ordered_carts,SS_orders where SS_ordered_carts.orderID=SS_orders.orderID;
```

#### Smarty
http://webtrain.austincc.edu/~hben/sc1.JPG
http://webtrain.austincc.edu/~hben/sc2.JPG

