# Marketplace-test

MarketPlace es un sitio web donde vendedores ofrecen sus productos, dados ciertos datos del producto. Una ves se agrega un producto a la lista de productos, este se vera desplegado en la pagina, para poder ser visitado mas adelante. 

Pre requisitos:
-Servidor de apache (en este caso, a traves de xampp)
-Servidor de Mysql (en este caso, a traves de xampp)


Instalacion:
-Bajar el codigo al directorio de programas en xampp, este se encuentra en:

	***********************
	C:\xampp\htdocs
	***********************
_____________________________________________
-En la direccion:

	C:\xampp\apache\conf\extra\httpd-vhosts.conf

	Crear un nuevo host virtual, que tenga como root el directorio del codigo. 
	
	***********************
	<VirtualHost *:80>

	DocumentRoot "C:/xampp/htdocs/Marketplace-test/MarketPlace/public"
	ServerName marketplace.dev

	</VirtualHost>
	************************
_____________________________________________

	
-En la direccion:
	
	C:\Windows\System32\drivers\etc\hosts
	
	creamos el host de la aplicacion y le asignamos el IP que esta tendra. En este caso, es simplemente local. 
	
	************************
	127.0.0.1       marketplace.dev
	************************
_____________________________________________

-Dentro de phpMyAdmin, crear base de datos llamada marketplacedb
	
	importar el archivo "productos.sql" 
_____________________________________________	



Version 1.0

Autores:
	JOSE ALEJANDRO CRUZ
	

	
























