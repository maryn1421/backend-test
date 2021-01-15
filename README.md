# backend-test

#### How to run:
 
```console 
$ composer install
```

I used the streampixel/simplePHPRouter for routing
<a href="https://github.com/steampixel/simplePHPRouter">more about this library:</a>

to run the server:

```console 
$ php -S localhost:8000 Router.php
```


to connect the database (mysql):

In the main folder you can find the database.php file,and there in the openCon() function change the database settings to your own, the contacts table <b> will be generated automatically </b>:

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/879database_connection.png" alt="how to connect the database" />



#### Features:
 
##### GET Requests:

```
http://localhost:8000/contacts
```

This will return all of your stored contacts

example:

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/363allcontact.png" alt="all-contact" />

```
http://localhost:8000/contact/{id}
```


<img src="http://www.kepfeltoltes.eu/images/2021/01/15/913contact1id.png" alt="all-contact" />


##### PUT Requests:

```
http://localhost:8000/contact/add
```

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/263addContact.png" alt="all-contact" />


```
http://localhost:8000/edit/name/{id}
```

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/863udpateName.png" alt="update contacts name by id" />


```
http://localhost:8000/edit/email/{id}
```

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/840updateEmail.png" alt="update contacts email by id" />


```
http://localhost:8000/edit/phone/{id}
```

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/975updatePhone.png" alt="update contacts phone by id" />


```
http://localhost:8000/edit/address/{id}
```

<img src="http://www.kepfeltoltes.eu/images/2021/01/15/654updateAddres.png" alt="update contacts address by id" />

The request will return the results ( for example: invalid input, database error, update was successfully)         

    
