MySQL user & grants:
create user blogger@localhost identified by 'bcmH$8MV6hM#o8os';

GRANT SELECT on blogPost to blogger@localhost;
GRANT INSERT on blogPost to blogger@localhost;
GRANT UPDATE on blogPost to blogger@localhost;
GRANT SELECT on comment to blogger@localhost;
GRANT INSERT on comment to blogger@localhost;
GRANT UPDATE on comment to blogger@localhost;
GRANT DELETE on comment to blogger@localhost;
GRANT INSERT on users to blogger@localhost;
GRANT SELECT on users to blogger@localhost;
GRANT SELECT on keyword to blogger@localhost;
GRANT INSERT on keyword to blogger@localhost;
GRANT SELECT on blogPostkeyword to blogger@localhost;
GRANT INSERT on blogPostkeyword to blogger@localhost;


SHOW GRANTS FOR blogger@localhost;

Access Code: ALLOWED


commenters:
JabbaHutt, jabbahutt@starwars.com
Harry22, Harry22@gmail.com
TheBexter, becky@gmail.com
Ghorgon, joe@medusa.co.uk
Pawnstar99, john.smith@google.com
MaryBarry, mary.barry@gmail.com
OlaKitten, kitty@purrfecttreats.com
KatyaZam, katya.zam@gmail.com
Iglu22, iglu22@yahoo.com
OlgaDaPolg, olga@dapolg.me.uk
Katie78, katiemurphy@google.co.uk
KyotoK, kyotok@yahoo.com
Jonah556, jonah_smith@gmail.com
Jumanji99, jermaine.taylor@google.com
