
FROM mysql
# Add a database
ENV MYSQL_ALLOW_EMPTY_PASSWORD=true
ENV MYSQL_USER=Test
ENV MYSQL_PASSWORD=supersecret
ENV MYSQL_DATABASE=company
# Add the content of the sql-scripts/ directory to your image
# All scripts in docker-entrypoint-initdb.d/ are automatically
# executed during container startup
COPY ./sql-scripts/ /docker-entrypoint-initdb.d/

EXPOSE 3306
CMD ["mysqld"]
