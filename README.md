
# Merlot (v3.0.0)
## A Simple LAMP Stack for Local Developement with Vagrant

Visit https://merlotbox.com for more information.

### Merlot includes the following components

- Ubuntu 21.04
- Apache 2.4.46
- php 7.4.16
- phpMyAdmin 4.9.7
- PHP Unit 9.1.5
- MYSQL 8.0.26
- PostreSQL 13.4
- SQLITE 2.8.17
- COMPOSER 2.1.9
- WP-CLI 2.5.0
- NODEJS 14.18.1
- YARN 1.22.15
- RUBY 2.7.2
- REDIS 6.0.11
- MailHog


## Getting started with Merlot
**Install applications**
- [Download and Install Vagrant](https://www.vagrantup.com/downloads.html)
- [Download and Install VirtualBox](https://www.virtualbox.org/wiki/Downloads)

**Clone repository**

`git clone https://github.com/plutinolabs/merlot my-project`  
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
