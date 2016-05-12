# Annotometer website source code
www.annotometer.com
# Run the background programme
  1.Install the SQLite3 database in your server
  
  2.Create the database 
    
    $sqlite3 testdrive.db
    
  3.Run the annotometer.sql file
    
    $sqlite3 testdrive.db < annotometer.sql 
    
  4.Download the sqlite-jdbc-3.8.5-pre1.jar and json-simple-1.1.1.jar
  
  5.Set the competition start time in the programme.
  
  5.Command
    
    java -classpath sqlite-jdbc-3.8.5-pre1.jar:json-simple-1.1.1.jar -jar annotometer.jar 
    
  6.Copy the Website code to your server



