FROM archlinux:latest

# 1) system update + install Apache, PHP + mysqli & pdo_mysql ext, MariaDB
RUN pacman -Syyu --noconfirm \
 && pacman -S --noconfirm archlinux-keyring \
 && pacman -S --noconfirm apache php php-apache mariadb

# 2) enable PHP in Apache (switch to prefork + load php module)
RUN sed -i 's/^LoadModule mpm_event_module/#&/' /etc/httpd/conf/httpd.conf \
 && sed -i 's/^#LoadModule mpm_prefork_module/LoadModule mpm_prefork_module/' /etc/httpd/conf/httpd.conf \
 && printf "\nLoadModule php_module modules/libphp.so\nAddHandler php-script .php\nInclude conf/extra/php_module.conf\n" \
     >> /etc/httpd/conf/httpd.conf

# 3) enable mysqli & pdo_mysql extensions in php.ini
RUN sed -i 's|;extension=mysqli|extension=mysqli|' /etc/php/php.ini \
 && sed -i 's|;extension=pdo_mysql|extension=pdo_mysql|' /etc/php/php.ini

# 4) set your project as the docroot
RUN sed -i 's|DocumentRoot "/srv/http"|DocumentRoot "/srv/http/portfolio"|' /etc/httpd/conf/httpd.conf \
 && sed -i 's|<Directory "/srv/http">|<Directory "/srv/http/portfolio">|' /etc/httpd/conf/httpd.conf

# 5) copy your PHP site
COPY . /srv/http/portfolio

# 6) initialize MariaDB data directory
RUN mariadb-install-db --user=mysql --basedir=/usr --datadir=/var/lib/mysql

EXPOSE 80

# 7) on container start: run mysql with init-file then Apache in foreground
CMD /usr/bin/mysqld_safe --datadir=/var/lib/mysql --init-file /srv/http/portfolio/schema.sql & \
    httpd -D FOREGROUND
