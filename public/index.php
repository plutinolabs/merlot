<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Merlot - Simple LAMP Stack for Local Developement with Vagrant</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style media="screen">
  body{
    background-color: #e6e3e2;
  }
  .head{
    margin-top: 100px;
  }
  .logo{
    margin-bottom: 50px;
  }
  .code_body{
    background-color: #672b49;
    color: white;
  }
  .code_body code{
    color: white;
  }

  .code_header{

    color:  #6c757d;
  }

  .code_row{
    background-color: #672b49;
    color: white;
  }

  .info_row{
    margin-top:50px;
  }
  .info_row table{
    margin-top:30px;
  }
  .foot{
    margin-top:100px;
    margin-bottom: 100px;
  }
  .card-deck{
    margin-bottom: 30px;
  }
  .mer_col{
    display:flex;
	flex-direction:column;
  margin-bottom: 30px;
  }
  .card{
	flex:1 0 auto;
}
 .mer-tab-cell{

  background-color:rgba(0,0,0,.05);
 }

 .msettings td, .msettings th{
   width: 50%;
 }

 .msettings{
   margin-top:30px;
  border: 1px solid #dee2e6;
 }
 .m_install{
   margin-bottom: 20px;
   margin-top:50px;
 }

 .m_install .card{
   margin-top:20px;
 }

 .m_install pre{
   margin:0;
   padding:0;
 }

 .m_install code{
   margin:0;
   padding:0;
 }
 .m_install_head{
   font-weight: bold;
   color: white;
 }

</style>

  </head>
  <body>



    <div class="container">


  <div class="row head">
    <div class="col-sm  text-center">
      <a href="https://merlotbox.com/"><img src="https://merlotbox.com/merlot.png" alt="Merlot" class="logo"></a>

      <h2>A Simple LAMP Stack for Local Development with Vagrant</h2>
      <p>v 4.0.0</p>
    </div>
  </div>

  <div class="row m_install">

    <div class="col-xl-12 ">
      <div class="card bg-light">
        <div class="card-header m_install_head bg-secondary">To install</div>
        <div class="card-body code_body">
          <p class="card-text code_row">
<pre><code>git clone https://github.com/plutinolabs/merlot my-project
cd my-project
vagrant up</code></pre>
        </p>
        </div>
      </div>
    </div>

    

  </div>


  <div class="row info_row">
    <div class="col-sm ">
      <h3>Merlot includes the following components</h3>

      <table  class="table table_mer_info table-striped table-sm">
          <tr>
            <td>Ubuntu 23.04</td>
            <td>Apache 2.4.55</td>
            <td>PHP 8.1.12</td>
            <td>phpMyAdmin 5.2.1</td>
          </tr>
          <tr>

            <td>MYSQL 8.0.33</td>
            <td>PostreSQL 15.2</td>
            <td>SQLITE 3.40.1</td>
            <td>COMPOSER 2.5.5</td>
          </tr>
          <tr>
            
            <td>WP-CLI 2.7.1</td>
            <td>NODEJS 18.16.0</td>
            <td>RUBY 3.1.2</td>
            <td>PHP Unit 9.5.28</td>
          </tr>
          <tr>
            
            <td>REDIS 7.0.8</td>
            <td>MailHog</td>
            <td></td>
            <td></td>
          </tr>
        </table>

    </div>
  </div>

  <div class="row info_row">
    <div class="col-sm ">
      <h3>Getting started with Merlot</h3>
    </div>
  </div>


<div class="row d-flex">
  <div class="col-md-6 mer_col">
    <div class="card bg-light" >
  <div class="card-header">Install applications</div>
  <div class="card-body">
    <p class="card-text">
      <ol>
        <li><a href="https://www.vagrantup.com/downloads.html" target="_blank">Download and Install Vagrant</a></li>
        <li><a href="https://www.virtualbox.org/wiki/Downloads" target="_blank">Download and Install VirtualBox</a></li>
      </ol>
</p>
  </div>
</div>
  </div>

  <div class="col-md-6  mer_col">
    <div class="card bg-light" >
      <div class="card-header">Clone repository</div>
      <div class="card-body">
        <p class="card-text">
          Run the above commands in terminal (Mac/Linux) or command prompt (Windows).
        </p>
        <p class="card-text">
          More information about Vagrant can be found <a href="https://www.vagrantup.com/docs/" target="_blank">here</a>.
        </p>
      </div>
    </div>
  </div>
</div>

<div class="row d-flex">
  <div class="col-md-6 mer_col">
    <div class="card bg-light" >
      <div class="card-header">Open browser</div>
      <div class="card-body">
        <p class="card-text"> Visit:<br><a href="http://192.168.56.10" target="_blank">http://192.168.56.10</a> </p>
      </div>
    </div>
  </div>

  <div class="col-md-6  mer_col">
    <div class="card bg-light" >
      <div class="card-header">Start Developing</div>
      <div class="card-body">
        <p class="card-text"> Place all your files in the public folder to vew your creation</p>
      </div>
    </div>
  </div>
</div>





<div class="row info_row">
  <div class="col-sm ">
    <h3>Accessing the database</h3>
    <p>There are 2 ways to connect to the databases in Merlot - via  web client or a desktop client</p>
  </div>
</div>



<div class="row d-flex">
  <div class="col-md-6 mer_col">
    <div class="card bg-light" >
  <div class="card-header">Via a web client</div>
  <div class="card-body">
    <p class="card-text">
      MySQL has web a client built into Merlot.<br><br>

      Visit <a href="http://192.168.56.10/phpmyadmin/" target="_blank">http://192.168.56.10/phpmyadmin/</a> for MySQL
  </p>
  <p class="card-text">
    Login with<br>Username: root<br>Password: root
  </p>
  <p class="card-text">
    An empty database called <strong style="text-decoration:underline;">merlot</strong> has already been created for you
  </p>
  </div>
  </div>
  </div>

  <div class="col-md-6  mer_col">
    <div class="card bg-light" >
    <div class="card-header">Via a desktop client</div>
    <div class="card-body">
      <p class="card-text">
You can use an application such as Sequel Pro or MySQl Workbench (for MySQL), DBeaver (for PostreSQL) to connect to your database
      <p class="card-text">
        Whatever you use, select SSH as the connect method with the following settings
        <table class="table  table-striped table-sm msettings">
          <tr>
            <th>SSH Host</th>
            <td>192.168.56.10</td>
          </tr>
          <tr>
            <th>SSH User</th>
            <td>vagrant</td>
          </tr>
          <tr>
            <th>SSH Password</th>
            <td>vagrant</td>
          </tr>
          <tr>
            <th>SSH Port</th>
            <td>22</td>
          </tr>
        </table>

        <table class="table  table-striped table-sm msettings">
          <tr>
            <th>MySQL Host</th>
            <td>127.0.0.1</td>
          </tr>
          <tr>
            <th>MySQL User</th>
            <td>root</td>
          </tr>
          <tr>
            <th>MySQL Password</td>
            <td>root</td>
          </tr>
          <tr>
            <th>MySQL Database</th>
            <td>merlot</td>
          </tr>
        </table>

        <table class="table  table-striped table-sm msettings">
          <tr>
            <th>PostreSQL Host</th>
            <td>127.0.0.1</td>
          </tr>
          <tr>
            <th>PostreSQL User</th>
            <td>root</td>
          </tr>
          <tr>
            <th>PostreSQL Password</td>
            <td>root</td>
          </tr>
          <tr>
            <th>PostreSQL Database</th>
            <td>merlot</td>
          </tr>
          <tr>
            <th>PostreSQL Port</th>
            <td>5432</td>
          </tr>
        </table>

       


      </p>
    </div>
    </div>
  </div>
</div>


<div class="row info_row">
  <div class="col-sm ">
    <h3>Accessing Mailhog</h3>
  </div>
</div>
<div class="row d-flex">
  <div class="col-md-6 mer_col">
    <div class="card bg-light" >
  <div class="card-header">Mailhog</div>
  <div class="card-body">
    <p class="card-text">
      Visit <a href="http://192.168.56.10:8025" target="_blank">http://192.168.56.10:8025</a>
  </p>
  </div>
  </div>
  </div>
</div>




  <div class="row foot">
    <div class="col-sm  text-center">

      <p>Thanks to <a href="https://box.scotch.io" target="_blank">Scotch Box</a> for inspiring this project.</p>
      <script type="text/javascript">
user = "box";
domain = "merlotbox.com";
document.write('E-mail: <a href=\"mailto:' + user + '@' + domain + '\">' +
			user + '@' + domain + '</a>');

</script>
    </div>
  </div>

</div>
  </body>
</html>
