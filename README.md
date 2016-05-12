# Annotometer website source code
www.annotometer.com
# Run the background programme
  1.Install the SQLite3 database in your server
  
  2.Create the database 
    
    $sqlite3 testdrive.db
    
  3.Run the annotometer.sql file
    
    $sqlite3 testdrive.db < annotometer.sql 
    
  4.Download the sqlite-jdbc-3.8.5-pre1.jar and json-simple-1.1.1.jar
  
  5.Get the iCLiKVAL api token in the http://iclikval.riken.jp/, update the token in the geticlicknumber() function,  
  
    httpurlconnection1.setRequestProperty("Authorization", "Bearer <<paste the new token>>
  
  5.Command
    
    java -classpath sqlite-jdbc-3.8.5-pre1.jar:json-simple-1.1.1.jar -jar annotometer.jar  2016-04-09 (Start time parameter)
    
  6.Copy the Website code to your server



