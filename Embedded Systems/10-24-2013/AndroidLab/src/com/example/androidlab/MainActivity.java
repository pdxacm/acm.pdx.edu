/* Author: Sean Walsh
 * Date: 10/24/2013
 * Location: FAB150 Classroom
 * Time: 2PM-3PM
 * Topic: Basic Android forms
 * Details: How to make a basic button take text input
 * and display in label on click. Also add custom fun
 * messages if a checkbox is marked on button click.
 */

package com.example.androidlab;

import android.os.Bundle;
import android.app.Activity;
import android.view.Menu;
import android.view.View;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.TextView;

public class MainActivity extends Activity 
{
	// Button type
	Button submitBtn;
	
	// Editable text type
	EditText userText;
	
	// Label
	TextView userInput;
	
	// Checkbox type
	CheckBox checkBox1;
	CheckBox checkBox2;
	CheckBox checkBox3;
	
	String input;
	
	@Override
	protected void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.activity_main);
		// findViewById allows you to look into the XML file and grab the control you want.
		// NOTE: Make sure you cast the correct type, for example, (Button).
        checkBox1 = (CheckBox)findViewById(R.id.checkBox1);
        checkBox2 = (CheckBox)findViewById(R.id.checkBox2);
        checkBox3 = (CheckBox)findViewById(R.id.checkBox3);
		
        submitBtn = (Button)findViewById(R.id.submitBtn);
        
        userText = (EditText)findViewById(R.id.userText);
        
        userInput = (TextView)findViewById(R.id.userInput);
        
        // Create an event for the submit button.
        // NOTE: This is the same as the android:onClick="submitClk" in the XML file.
        submitBtn.setOnClickListener(new View.OnClickListener() {
		    public void onClick(View v) {
		    	submitClk(v);
		    }
		});
	}

	private void submitClk(View v) 
	{
		userInput.setText("");
		input = userText.getText().toString();
		userInput.setText(input);
		// Some jokes to render if a checkbox is checked.
		if (checkBox1.isChecked())
			userInput.setText("Ajita loves dogs and " + userInput.getText());
		if (checkBox2.isChecked())
			userInput.setText("Amritha does not like Android and " + userInput.getText());
		if (checkBox3.isChecked())
			userInput.setText("Azadi is having a hard time with his Java language skills and " + userInput.getText());
	}

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		// Inflate the menu; this adds items to the action bar if it is present.
		getMenuInflater().inflate(R.menu.main, menu);
		return true;
	}

}
