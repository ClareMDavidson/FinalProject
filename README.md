MySQL user & grants:
create user blogger@localhost identified by 'bcmH$8MV6hM#o8os';

GRANT SELECT on blogPost to blogger@localhost;
GRANT INSERT on blogPost to blogger@localhost;
GRANT SELECT on comment to blogger@localhost;
GRANT INSERT on comment to blogger@localhost;

SHOW GRANTS FOR blogger@localhost;

Blogger login:
BLOGGER
password123


commenters:
JabbaHutt, jabbahutt@starwars.com
Harry22, Harry22@gmail.com
TheBexter, becky@gmail.com
Ghorgon, joe@medusa.co.uk
Pawnstar99, john.smith@google.com
MaryBarry, mary.barry@gmail.com