# First steps

Just open terminal and take following steps:

1. `$ mkdir ~/work`
2. `$ sudo mkdir /opt/lampp/htdocs/xampp` xampp default runs files from htdocs directory
3. `$ sudo chown usergroup:username /opt/lampp/htdocs/xampp` set ourself as owner to edit this directory
4. `$ ln -s /opt/lampp/htdocs/xampp ~/work` create symbolic link to access /opt/lampp/htdocs/xampp directory at ~/work/xampp path as well
5. `$ git clone https://github.com/username/portfolio.git ~/work/xampp` clone portfolio repository
6. `$ sudo gedit /opt/lampp/etc/extra/httpd-vhosts.conf` to edit files we can use other editor instead of gedit like vim or nano
7. add the following lines: 
```
<VirtualHost *:80>
  DocumentRoot "/opt/lampp/htdocs/xampp/portfolio"
  ServerName portfolio.local
</VirtualHost>
``` 
8. remove the '#' from line 488 of /opt/lampp/etc/httpd.conf so apache will read httpd-vhosts.conf file
9. `$ sudo gedit /etc/hosts`
10. add line `127.0.0.1  portfolio.local` what means localhost (127.0.0.1) listen behind portfolio.local
11. now create our first php file `$ gedit ~/work/xampp/portfolio/index.php`
12. type `<?php phpinfo(); ?>`
13. `$ sudo /opt/lampp/lampp restart` to restart xampp
14. if got this error: `/opt/lampp/share/xampp/xampplib: line 22: netstat: command not found` just type `$ sudo apt install net-tools` and try again the previous step
15. now open in browser portfolio.local webpage
16. if everything works fine should see php version and environment informations
