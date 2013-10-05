package com.example.mutterapp;

import com.example.mutterapp.R;

import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.os.Bundle;
import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.telephony.SmsManager;
import android.view.Menu;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class MainActivity extends Activity {

	Button boton;
	Button boton2;
	Button boton3;
	EditText textoTelefono;
	EditText textoMensaje;
	private static final long DISTANCIA_MINIMA_PARA_CAMBIAR =1;
	private static final long TIEMPO_MINIMO_ENTRE_ACTUALIZACIONES = 1000; //en milisegundos

	protected LocationManager locationManager;
	protected Button retrivelocationButton;
    @Override
    public void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_main);
        
        //////////////////////////////////////////////
        boton = (Button) findViewById(R.id.button1);
        boton2 = (Button) findViewById(R.id.button2);
        boton3 = (Button) findViewById(R.id.button3);
       boton.setBackgroundColor(getResources().getColor(R.color.verdecania));
      boton2.setBackgroundColor(getResources().getColor(R.color.naranja));
        textoTelefono = (EditText) findViewById(R.id.telefonoTxt);
        textoMensaje = (EditText) findViewById(R.id.mensajeTxt);
       boton3.setBackgroundColor(getResources().getColor(R.color.rosadopur));
        
        boton.setOnClickListener(new OnClickListener() {
        	
			public void onClick(View v) {
				mostrarL();
				// TODO Auto-generated method stub
//				String numeroTelefono = textoTelefono.getText().toString();
//				String mensajeEnviar = textoMensaje.getText().toString();
//				try {
//					SmsManager smsManager  = SmsManager.getDefault();
//					smsManager.sendTextMessage(numeroTelefono, null, mensajeEnviar, null, null);
//					Toast.makeText(getApplicationContext(), "Mensaje Enviado", Toast.LENGTH_LONG).show();
//				} catch (Exception e) {
//					// TODO: handle exception
//					Toast.makeText(getApplicationContext(), "No se pudo enviar el mensaje", Toast.LENGTH_LONG).show();
//					e.printStackTrace();
//				}
			}
		});
        
        boton3.setOnClickListener(new OnClickListener() {
			
			public void onClick(View v) {
				mostrarH();
				
			}
		});
        locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
        LocationListener localist = new LocationListener() {
			
        	public void onLocationChanged(Location location) {
    			// TODO Auto-generated method stub
    			String  mensaje = String.format("Nueva posición \n Long: %1$s \n Lat: %2$s", location.getLongitude(), location.getLatitude());
    			Toast.makeText(getApplicationContext(), mensaje, Toast.LENGTH_LONG).show();
    			//acá mandamos 
    			
    		}

    		public void onProviderDisabled(String provider) {
    			// TODO Auto-generated method stub
    			Toast.makeText(getApplicationContext(), "Gps apagado", Toast.LENGTH_LONG).show();
    			
    		}

    		public void onProviderEnabled(String provider) {
    			// TODO Auto-generated method stub
    			Toast.makeText(getApplicationContext(), "Gps encendido", Toast.LENGTH_LONG).show();
    			
    		}

    		public void onStatusChanged(String provider, int status, Bundle extras) {
    			// TODO Auto-generated method stub

    			Toast.makeText(getApplicationContext(), "Estado del proveedor cambiado", Toast.LENGTH_LONG).show();			
    		}
		};
       locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, TIEMPO_MINIMO_ENTRE_ACTUALIZACIONES, DISTANCIA_MINIMA_PARA_CAMBIAR, new MyLocationListener());

       
        boton2.setOnClickListener(new OnClickListener() {
			
			public void onClick(View v) {
				// TODO Auto-generated method stub
				//mostrarLocalizacionActual();
				mostrarM();
			}
		});
    }
    public void mostrarH(){
    	Intent i;
    	i = new Intent(this, ShowHigh.class);
    	startActivity(i);
    }
    public void mostrarL(){
    	Intent i;
    	i = new Intent(this, ShowLow.class);
    	startActivity(i);
    }
    public void mostrarM(){
    	Intent i;
    	i = new Intent(this, ShowMid.class);
    	startActivity(i);
    }

private void mostrarLocalizacionActual(){
    	
    	Location location = locationManager.getLastKnownLocation(locationManager.GPS_PROVIDER);
    	if(location != null){
    		String  mensaje = String.format("Nueva posición \n Long: %1$s \n Lat: %2$s", location.getLongitude(), location.getLatitude());
			Toast.makeText(getApplicationContext(), mensaje, Toast.LENGTH_LONG).show();
    	}
    }
    private class MyLocationListener implements LocationListener{

		public void onLocationChanged(Location location) {
			// TODO Auto-generated method stub
			String  mensaje = String.format("Nueva posición \n Long: %1$s \n Lat: %2$s", location.getLongitude(), location.getLatitude());
			Toast.makeText(getApplicationContext(), mensaje, Toast.LENGTH_LONG).show();
			//acá mandamos 
			
		}

		public void onProviderDisabled(String provider) {
			// TODO Auto-generated method stub
			Toast.makeText(getApplicationContext(), "Gps apagado", Toast.LENGTH_LONG).show();
			
		}

		public void onProviderEnabled(String provider) {
			// TODO Auto-generated method stub
			Toast.makeText(getApplicationContext(), "Gps encendido", Toast.LENGTH_LONG).show();
			
		}

		public void onStatusChanged(String provider, int status, Bundle extras) {
			// TODO Auto-generated method stub

			Toast.makeText(getApplicationContext(), "Estado del proveedor cambiado", Toast.LENGTH_LONG).show();			
		}
    	
    }
    
    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.activity_main, menu);
        return true;
    }
}
