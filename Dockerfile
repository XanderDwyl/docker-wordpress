FROM tutum/apache-php:latest
MAINTAINER XanderDwyl <janderbacalso@gmail.com>

WORKDIR /

# install requirements
RUN apt-get update && \
    apt-get -yq install mysql-client curl sendmail && \
    rm -rf /app && \
	rm -rf /var/lib/apt/lists/*

RUN sed -i "s/AllowOverride None/AllowOverride All/g" /etc/apache2/apache2.conf
RUN a2enmod rewrite

# setup wordpress
ADD ./wordpress /app
ADD ./config/wp-config.php /app/wp-config.php
ADD run.sh /run.sh
RUN chmod +x /*.sh

# setup db
ADD ./db/db_ls.sql /db_ls.sql

# Expose environment variables
ENV DB_HOST **LinkMe**
ENV DB_PORT **LinkMe**
ENV DB_NAME wordpress
ENV DB_USER admin
ENV DB_PASS **ChangeMe**

EXPOSE 80
VOLUME ["/app/wp-content"]
CMD ["/run.sh"]
