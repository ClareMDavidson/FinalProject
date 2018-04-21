MySQL user & grants:
create user blogger@localhost identified by 'bcmH$8MV6hM#o8os';

GRANT SELECT on blogPost to blogger@localhost;
GRANT INSERT on blogPost to blogger@localhost;
GRANT SELECT on comment to blogger@localhost;
GRANT INSERT on comment to blogger@localhost;
GRANT UPDATE on comment to blogger@localhost;
GRANT DELETE on comment to blogger@localhost;
GRANT INSERT on users to blogger@localhost;
GRANT SELECT on users to blogger@localhost;

SHOW GRANTS FOR blogger@localhost;

Blogger login:
BLOGGER
password123