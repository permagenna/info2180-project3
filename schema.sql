CREATE DATABASE IF NOT EXISTS schema;
use schema;

CREATE table Users(id INT UNSIGNED NOT NULL PRIMARY KEY,
                   first_name varchar(50),
                   last_name varchar(50),
                   password varchar(50));
                   telephone INT(10),
                   email varchar(50),
                   date_joined DATE
                   );
                    


CREATE table Jobs(id INT UNSIGNED NOT NULL PRIMARY KEY,
                   job_title varchar(50),
                   job_description varchar(50),
                   category varchar(50));
                   company_name varchar(50),
                   company_location varchar(50),
                   date_posted DATE
                   );

CREATE table Jobs_applied_for(id INT UNSIGNED NOT NULL PRIMARY KEY,
                    job_id INT (4),
                    user_id INT (4),
                    date_applied Date
                    );