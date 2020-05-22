
# Merlot (v2.0.0)
## A Simple LAMP Stack for Local Developement with Vagrant

Visit https://merlotbox.com for more information.

Visit https://github.com/prefixstudio/merlot-nginx for the Apache version on Merlot.

### Merlot includes the following components

- Ubuntu 20.04
- Apache 2.4.41
- PHP 7.4.6
- phpMyAdmin 4.9.5
- PHP Unit 9.1.4
- MYSQL 8.0.20
- PostreSQL 12.2
- MONGODB 4.2.6
- SQLITE 2.8.17
- COMPOSER 1.10.6
- WP-CLI 2.4.0
- NODEJS 12.16.2
- RUBY 2.7.0
- REDIS 5.0.7
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

---------------

## Accessing the database
There are 2 ways to connect to the databases in Merlot - via  web client or a desktop client

#### Via a web client
MySQL and PostreSQL both have web clients built into Merlot.

Visit http://192.168.33.10/phpmyadmin/ for MySQL
Visit http://192.168.33.10/phppgadmin/ for PostreSQL

Login with  
Username: root  
Password: root

An empty database called **merlot** has already been created for you

#### Via a desktop client
You can use an application such as Sequel Pro or MySQl Workbench (for MySQL), DBeaver (for PostreSQL) or MongoDB Compass (for MongoDB) to connect to your database.

Whatever you use, select SSH as the connect method with the following settings

| Setting (SSH)      | Value |
| ---------------| ------------- |
| SSH Host       | 192.168.33.10 |  
| SSH User       | vagrant      |
| SSH Password   | vagrant      |
| SSH Port       | 22            |

| Setting (MySQL)      | Value |
| ---------------| ------------- |
| Host     | 127.0.0.1     |
| User     | root          |
| Password | root          |
| Database | merlot        |     

| Setting (PostreSQL)     | Value |
| ---------------| ------------- |
| Host     | 127.0.0.1     |
| User     | root          |
| Password | root          |
| Database | merlot        |
| Port  | 5432        |

| Setting (MongoDB)    | Value |
| ---------------| ------------- |
| Host     | 127.0.0.1     |
| Port     | 27017          |


---------------
## Accessing Mailhog
Visit http://192.168.33.10:8025

---------------

Thanks to [Scotch Box](https://github.com/scotch-io/scotch-box) for inspiring this project.
