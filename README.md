
# Merlot (v4.0.0)
## A Simple LAMP Stack for Local Developement with Vagrant

Visit https://merlotbox.com for more information.

### Merlot includes the following components

- Ubuntu 23.04
- Apache 2.4.55
- php 8.1.12
- phpMyAdmin 5.2.1
- PHP Unit 9.5.28
- MYSQL 8.0.33
- PostreSQL 15.2
- SQLITE 3.40.1
- COMPOSER 2.5.5
- WP-CLI 2.7.1
- NODEJS 18.16.0
- YARN 1.22.19
- RUBY 3.1.2
- REDIS 7.0.8
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
Visit: http://192.168.56.10 to access Merlot

---------------

## Accessing the database
There are 2 ways to connect to the databases in Merlot - via  web client or a desktop client

#### Via a web client
MySQL has a web client built into Merlot.

Visit http://192.168.56.10/phpmyadmin/ for MySQL

Login with  
Username: root  
Password: root

An empty database called **merlot** has already been created for you

#### Via a desktop client
You can use an application such as Sequel Pro or MySQl Workbench (for MySQL), DBeaver (for PostreSQL) to connect to your database.

Whatever you use, select SSH as the connect method with the following settings

| Setting (SSH)      | Value |
| ---------------| ------------- |
| SSH Host       | 192.168.56.10 |  
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



---------------
## Accessing Mailhog
Visit http://192.168.56.10:8025

---------------

Thanks to [Scotch Box](https://github.com/scotch-io/scotch-box) for inspiring this project.
