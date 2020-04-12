
# Merlot
## A Simple LAMP Stack for Local Developement with Vagrant

### Merlot includes the following components

- Ubuntu 18.04
- Apache 2.4.29
- PHP 7.4.4
- phpMyAdmin 4.9.5
- PHP Unit 6.1.4
- MYSQL 5.7.29
- PostreSQL 10.12
- SQLITE 2.8.17
- COMPOSER 1.10.5
- WP-CLI 2.4.0
- NODEJS 12.16.2
- RUBY 2.5.1
- REDIS 4.0.9
- MailHog


## Getting started with Merlot
**Install applications**
- [Download and Install Vagrant](https://www.vagrantup.com/downloads.html)
- [Download and Install VirtualBox](https://www.virtualbox.org/wiki/Downloads)

**Clone repository**

`git clone https://github.com/prefixstudio/merlot my-project`
`cd my-project`
`vagrant up`

**Open browser**
Visit: http://192.168.33.10 to access Merlot


## Accessing the database
There are 2 ways to connect to the MySQL database in Merlot

#### PHPMyAdmin
Visit http://192.168.33.10/phpmyadmin/

Login with
Username: root
Password: root

An empty database called **merlot** has already been created for you

#### Via a desktop client
You can use an application such as Sequel Pro or MySQl Workbench to connect to your database.

Select SSH as the connect method with the following settings

| Setting      | Value |
| ---------------| ------------- |
| SSH Host       | 192.168.33.10 |  
| SSH User       | 	vagrant      |
| SSH Password   | 	vagrant      |
| SSH Port       | 22            |
| MySQL Host     | 127.0.0.1     |
| MySQL User     | root          |
| MySQL Password | root          |
| MySQL Database | merlot        |



## Accessing Mailhog
Visit http://192.168.33.10:8025

---------------

Thanks to [Scotch Box](https://github.com/scotch-io/scotch-box) for inspiring this project.
