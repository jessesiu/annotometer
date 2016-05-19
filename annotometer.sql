PRAGMA foreign_keys=OFF;
BEGIN TRANSACTION;
CREATE TABLE [tbl_user] ([username] VARCHAR (128) NOT NULL, [password] VARCHAR (128) NOT NULL, [email] VARCHAR (128) PRIMARY KEY NOT NULL, [firstname] VARCHAR (128), [lastname] VARCHAR (128), [institute] VARCHAR (128), [role] VARCHAR (128), [iclikname] VARCHAR (128), [hyponame] VARCHAR (128), [mjournal] BOOLEAN, [mgigadb] BOOLEAN, [mhypo] BOOLEAN, [miclik] BOOLEAN, [misb] BOOLEAN);
INSERT INTO "tbl_user" VALUES('xiaosizhe’,’test’,’jesse@gigasciencejournal.com','Xiao','SiZhe','BGI','DBA','Xiaosizhe','xiaosizhe',1,1,1,1,1);
COMMIT;
