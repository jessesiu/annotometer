package annotometer;

import static java.util.concurrent.TimeUnit.DAYS;

import java.io.BufferedReader;
import java.io.BufferedWriter;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.FileWriter;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Date;
import java.util.Iterator;
import java.lang.reflect.Array;
import java.net.HttpURLConnection;
import java.net.URL;

import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import org.json.simple.parser.JSONParser;

import java.util.concurrent.Executors;
import java.util.concurrent.ScheduledExecutorService;
import java.util.concurrent.ScheduledFuture;

import static java.util.concurrent.TimeUnit.*;





public class main {

	static Statement st;
	static Connection c;
	private final static ScheduledExecutorService scheduler= Executors.newScheduledThreadPool(1);
	@SuppressWarnings("unused")
	public static void main( String args[] ) throws IOException, SQLException
	  {
	   
	       updatefile();
	  }
	
	public static void updatefile() throws SQLException, IOException {
		
	     final Runnable beeper = new Runnable() {
	    	  public void run() { 	 
		  try {
		      Class.forName("org.sqlite.JDBC");
		      c = DriverManager.getConnection("jdbc:sqlite:/var/www/html/annotometer/protected/data/testdrive.db");
		      //c = DriverManager.getConnection("jdbc:sqlite:/Library/WebServer/Documents/annotometer/protected/data/testdrive.db");
		      c.setAutoCommit(true);
		      st= c.createStatement();
		    } catch ( Exception e ) {
		      System.err.println( e.getClass().getName() + ": " + e.getMessage() );
		      System.exit(0);
		    }
		    System.out.println("Opened database successfully");
		   // readfile(st); //upload noncode data
		    
		    try {
				readannotation();
			} catch (SQLException | IOException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
		    
		   // readmirnafile(st);
		    try {
				c.close();
			} catch (SQLException e) {
				// TODO Auto-generated catch block
				e.printStackTrace();
			}
	    	  }
		    
    };
    final ScheduledFuture<?> beeperHandle =
    scheduler.scheduleAtFixedRate(beeper, 0, 5, MINUTES);
    
    scheduler.schedule(new Runnable() {
            public void run() { beeperHandle.cancel(true); }
        }, 60 * 60, DAYS);
		
		
	}

	public static void readannotation() throws SQLException, IOException{
		
		String sql="select username,hyponame,iclikname from tbl_user";
		ResultSet rs = st.executeQuery(sql);
		/*
		File file = new File("/var/www/html/annotometer/protected/data/test");
		File file1 = new File("/var/www/html/annotometer/protected/data/test1");
		*/
		File file = new File("/var/www/html/annotometer/file/test.txt");
		//File file = new File("/Users/xiaosizhe/Desktop/filetest/test.txt");
	
		String temp1 = "";
		String temp2 = "";
		String temp3 = "";
		@SuppressWarnings("unused")
		BufferedReader bf= new BufferedReader(new FileReader(file));
		BufferedWriter bw= new BufferedWriter(new FileWriter(file, false));
		@SuppressWarnings("resource")
		
		int totalsum=0;
		while(rs.next()) {
		temp3= rs.getString(1);	
		temp1= rs.getString(2);
		temp2= rs.getString(3);
		
		int hyponumber=0;
		int iclicknumber=0;
		int sum=0;
		
		if(temp1 !=null && temp1 !="" && !temp1.isEmpty())
		{
			System.out.println("here "+ temp1);
			hyponumber= gethyponumber(temp1);
	
		}else
		{
			temp1="None";
		
		}
		
		if(temp2 !=null && temp2 !=""&& !temp2.isEmpty())
		{
			iclicknumber= geticlicknumber(temp2);
			
		}
		else
		{
			temp2="None";
		
		}
		sum= hyponumber+iclicknumber;
		totalsum=totalsum+sum;
		
		bw.write(temp3+"&*&"+temp1+"&*&"+temp2+"&*&"+hyponumber+"&*&"+iclicknumber+"&*&"+sum);
		bw.write("\n");
		System.out.println(temp3+"&*&"+temp1+"&*&"+temp2+"&*&"+hyponumber+"&*&"+iclicknumber+"&*&"+sum);

		}
		System.out.println("totalsum: "+totalsum);
		bw.write("SUMTOTAL:"+String.valueOf(totalsum));
		bw.close();
		
		
		
		
		
		
	}
	
	public static int gethyponumber(String hyponame){
		
		int hyponumber=0;
		
	
		URL url1 = null;
	    HttpURLConnection httpurlconnection1 = null;
	 
		
		try
		    {
		      
			  url1 = new URL("https://hypothes.is/api/search?user=" + hyponame + "&sort=created&order=asc");
			  System.out.println(url1);

		      httpurlconnection1 = (HttpURLConnection) url1.openConnection();
		      httpurlconnection1.setDoOutput(true);
		      httpurlconnection1.setRequestMethod("GET");
		      httpurlconnection1.setRequestProperty("Content-type","text/plain");
		      httpurlconnection1.setRequestProperty("Charset",   "UTF-8");
		     

		      
		      BufferedReader br = new BufferedReader(new InputStreamReader(httpurlconnection1.getInputStream()));
              StringBuilder sb = new StringBuilder();
              String line;
              while ((line = br.readLine()) != null) {
                  sb.append(line+"\n");
              }
              br.close();
              
		   
		      
		     
		      
		      String reply = sb.toString();
		      
		      
		      System.out.println("hypo "+reply);
		      
		     
		      
		      JSONParser parser = new JSONParser();
		      JSONObject json = (JSONObject) parser.parse(reply);
		      
		      
		      JSONArray test = (JSONArray) json.get("rows");
		      Iterator i = test.iterator();
		      DateFormat df1 = new SimpleDateFormat("yyyy-MM-dd'T'HH:mm:ss");
		      Date current = df1.parse("2015-04-01T02:16:18");
		      
		      while (i.hasNext()) {
		            JSONObject slide = (JSONObject) i.next();
		            String title = (String)slide.get("created");
 
		            Date result1 = df1.parse(title);
		            
		            if(result1.after(current))
		            {
		            	hyponumber++;
		            	System.out.println(title);
		            }
		        }
		      

		    }
		    catch(Exception e)
		    {
		      e.printStackTrace();
		    }
		    finally
		    {
		      if(httpurlconnection1!=null)
		        httpurlconnection1.disconnect();
		    }
		

		return hyponumber;
		
	}
	
	public static String getString( InputStream is) throws IOException {
	    int ch;
	    StringBuilder sb = new StringBuilder();
	    while((ch = is.read()) != -1)
	        sb.append((char)ch);
	    return sb.toString();
	}
	
	public static int geticlicknumber(String iclick){
		
		int iclicknumber=0;
		
		URL url1 = null;
	    HttpURLConnection httpurlconnection1 = null;
	 
		
		try
		    {
		      
			  url1 = new URL("http://api.iclikval.riken.jp/user-annotation-count?user="+iclick+"&since=2015%2F04%2F01");
			//  url1 = new URL(http://api.iclikval.riken.jp/user-annotation-count?since=2014/10/25&until=2016/1/1&user=tdtaylor&profile=true;
			  System.out.println(url1);

		      httpurlconnection1 = (HttpURLConnection) url1.openConnection();
		      httpurlconnection1.setDoOutput(true);
		      httpurlconnection1.setRequestMethod("GET");
		      httpurlconnection1.setRequestProperty("Content-type","application/json");
		      httpurlconnection1.setRequestProperty("Charset",   "UTF-8");
		      
		     
		      
		 
		     
		     
		      //httpurlconnection.getOutputStream().write(username.getBytes());
		     
		      
		      InputStream code = httpurlconnection1.getInputStream();
		      
		      
		      String reply = getString(code);
		      
		      System.out.println("iclick "+getString(code));
		      
		      int index1 = reply.indexOf("{\"count\":");
		      int index2 = reply.indexOf(",\"user\":\"");
		      if(reply.contains("{\"count\":")){
		      String result = reply.substring(index1+9, index2);
		      System.out.println("iclick "+result);
		      iclicknumber= Integer.valueOf(result);
		      }
		     
		      
		     
		      
		    }
		    catch(Exception e)
		    {
		      e.printStackTrace();
		    }
		    finally
		    {
		      if(httpurlconnection1!=null)
		        httpurlconnection1.disconnect();
		    }
		
		
		
		
		
		return iclicknumber;
		
	}
	
}
