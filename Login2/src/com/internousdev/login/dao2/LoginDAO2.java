package com.internousdev.login.dao2;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

import com.internousdev.login.dto2.LoginDTO2;
import com.internousdev.login.util2.DBConnector;

public class LoginDAO2 {
	   public LoginDTO2 select(String name,String password) throws SQLException{
		       LoginDTO2 dto=new LoginDTO2();
		       DBConnector db = new DBConnector();
		       Connection con = db.getConnection();

		       String sql="select * from user where user_name=? and password=?";
	   try{
		      PreparedStatement ps = con.prepareStatement(sql);
		      ps.setString(1, name);
		      ps.setString(2, password);

		      ResultSet rs=ps.executeQuery();

		      if(rs.next()){
		    	  dto.setName(rs.getString("user_name"));
		    	  dto.setPassword(rs.getString("password"));
		      }

	   }catch (SQLException e){
		   e.printStackTrace();
	   }finally{
		   con.close();
	   }
	   return dto;
	   }
}
