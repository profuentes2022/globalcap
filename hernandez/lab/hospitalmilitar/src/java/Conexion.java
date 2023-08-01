
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author difer
 */
public class Conexion {
    private String server;
    private String user;
    private String pass;
    private String db;
    private String port;
    Connection con;

    public Conexion() {
        this.server = "localhost";
        this.user = "root";
        this.pass = "";
        this.db = "generalpacientes";
        this.port = "3306";
        this.con = null;
    }
    
    public boolean conectar(){
        
        try {
            Class.forName("com.mysql.cj.jdbc.Driver");
            String urlc = "jdbc:mysql://" + this.server + ":" + this.port + "/" + this.db;
            System.out.println(urlc);
            this.con = (Connection) DriverManager.getConnection(urlc, this.user, this.pass);
            System.out.println("Conexion exitosa");
            return true;
        } catch (SQLException ex) {
            Logger.getLogger(Conexion.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        } catch (ClassNotFoundException ex) {
            Logger.getLogger(Conexion.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }
        
    }
    
    public boolean enviar(String sql){
        try {
            PreparedStatement envio = this.con.prepareStatement(sql);
            envio.execute();
            return true;
        } catch (SQLException ex) {
            System.out.println(ex.toString());
            Logger.getLogger(Conexion.class.getName()).log(Level.SEVERE, null, ex);
            return false;
        }
    }
    
    
    
}
