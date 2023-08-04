
FROM mysql:latest


COPY init.sql /docker-entrypoint-initdb.d/


ENV MYSQL_ROOT_PASSWORD=0111cs211163
ENV MYSQL_DATABASE=music23


EXPOSE 3306
