package com.example.mutterapp;


import android.app.Activity;
import android.content.Context;
import android.content.Intent;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.net.Uri;
import android.os.Bundle;
import android.telephony.SmsManager;
import android.view.View;
import android.view.View.OnClickListener;
import android.widget.Button;
import android.widget.Toast;

public class ShowMid extends Activity {

	private static final long DISTANCIA_MINIMA_PARA_CAMBIAR =600;
	private static final long TIEMPO_MINIMO_ENTRE_ACTUALIZACIONES = 1000; //en milisegundos

	protected LocationManager locationManager;
	Button asistenciaBoton;
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		// TODO Auto-generated method stub
		super.onCreate(savedInstanceState);
		setContentView(R.layout.mid_alert);
		//comportamiento para que envie las coordenadas por medio de sms
		 locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
		 locationManager.requestLocationUpdates(LocationManager.GPS_PROVIDER, TIEMPO_MINIMO_ENTRE_ACTUALIZACIONES, DISTANCIA_MINIMA_PARA_CAMBIAR, new MyLocationListener());
		 mostrarLocalizacionActual();
		 asistenciaBoton = (Button) findViewById(R.id.asistenciaBtn2);
		 asistenciaBoton.setOnClickListener(new OnClickListener() {
		
		public void onClick(View v) {
			// TODO Auto-generated method stub
			asistencias();
		}
	});
	}
	private void asistencias(){
		String telefono= "64154350";
        Intent callIntent = new Intent(Intent.ACTION_CALL, Uri.parse("tel:"+telefono));
        startActivity(callIntent);
	}

private void mostrarLocalizacionActual(){
    	
    	Location location = locationManager.getLastKnownLocation(locationManager.GPS_PROVIDER);
    	if(location != null){
    		String  mensaje = String.format("A2 \n Long: %1$s \n Lat: %2$s", location.getLongitude(), location.getLatitude());
			Toast.makeText(getApplicationContext(), mensaje, Toast.LENGTH_LONG).show();
			//enviamos el mensaje por medio de sms
			String numeroTelefono = "62344919";
			String mensajeEnviar = mensaje;
			try {
				SmsManager smsManager  = SmsManager.getDefault();
				smsManager.sendTextMessage(numeroTelefono, null, mensajeEnviar, null, null);
				Toast.makeText(getApplicationContext(), "Mensaje Enviado", Toast.LENGTH_LONG).show();
			} catch (Exception e) {
				// TODO: handle exception
				Toast.makeText(getApplicationContext(), "No se pudo enviar el mensaje", Toast.LENGTH_LONG).show();
				e.printStackTrace();
			}
    	}
    }
    private class MyLocationListener implements LocationListener{

		public void onLocationChanged(Location location) {
			// TODO Auto-generated method stub
			String  mensaje = String.format("Nueva posición \n Long: %1$s \n Lat: %2$s", location.getLongitude(), location.getLatitude());
			Toast.makeText(getApplicationContext(), mensaje, Toast.LENGTH_LONG).show();
			//acá mandamos 62344919
			
			
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

}
