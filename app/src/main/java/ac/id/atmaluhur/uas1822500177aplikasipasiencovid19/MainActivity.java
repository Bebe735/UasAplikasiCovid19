package ac.id.atmaluhur.uas1822500177aplikasipasiencovid19;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.*;

public class MainActivity extends AppCompatActivity {
    EditText username;
    EditText password;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate( savedInstanceState );
        setContentView( R.layout.activity_main );
        username = (EditText) findViewById(R.id.username);
        password = (EditText) findViewById(R.id.password);
    }

    public void pindah(View View) {
        String kim1 = username.getText().toString();
        String kim2 = password.getText().toString();
        if (kim1.equals("admin") && kim2.equals("admin")) {
            Intent i = new Intent(this, DashboardActivity.class);
            startActivity(i);
        } else {
            Intent i = new Intent(this, MainActivity.class);
            startActivity(i);
        }
    }
}
