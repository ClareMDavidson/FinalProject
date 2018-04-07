MySQL user & grants:
create user blogger@localhost identified by 'bcmH$8MV6hM#o8os';

GRANT SELECT on blogPost to blogger@localhost;
GRANT INSERT on blogPost to blogger@localhost;

SHOW GRANTS FOR blogger@localhost;

Blogger login:
BLOGGER
password123