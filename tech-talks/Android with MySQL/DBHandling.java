/***
   * Source Code from Portland State University ACM Speech 10/18/2013
   * Author: Sean Walsh (IRC: Azadi)
   * This work may be reproduced without permission
   * and may be modified in any way, and used for commercial
   * products, provided the original authorship is cited.
   */

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.util.ArrayList;
import java.util.List;

import org.apache.http.HttpEntity;
import org.apache.http.HttpResponse;
import org.apache.http.NameValuePair;
import org.apache.http.client.ClientProtocolException;
import org.apache.http.client.HttpClient;
import org.apache.http.client.entity.UrlEncodedFormEntity;
import org.apache.http.client.methods.HttpPost;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.message.BasicNameValuePair;
import org.json.JSONArray;
import org.json.JSONObject;

import android.util.Log;

public class DBHandling 
{
	// Function to post data...
	public static void postData() {
		// Create a new HttpClient and Post Header
		HttpClient httpclient = new DefaultHttpClient();
		// For Android, 10.0.2.2 is Localhost (IPv6 addressing)
		HttpPost httppost = new HttpPost("http://10.0.2.2/somePostscript.php");

		try {
			// These hashes will get sent to the PHP script as $_POST values.
			List<NameValuePair> nameValuePairs = new ArrayList<NameValuePair>(2);
			nameValuePairs.add(new BasicNameValuePair("someSQLColumn",
					nameOfVariable));

			httppost.setEntity(new UrlEncodedFormEntity(nameValuePairs));

			// Execute HTTP Post Request
			HttpResponse response = httpclient.execute(httppost);
		} catch (ClientProtocolException e) {
			Log.e("log_tag", e.toString());
		} catch (IOException e) {
			Log.e("log_tag", e.toString());
		}
	}

	public static String[] getBasicResults() {
		StringBuilder result = new StringBuilder("");
		// Set the array value to however many columns in database table.
		String[] results = new String[1];
		InputStream isr = null;
		try {
			HttpClient httpClient = new DefaultHttpClient();
			HttpPost httpPost = new HttpPost(
					"http://10.0.2.2/someGetScript.php");
			HttpResponse response = httpClient.execute(httpPost);
			HttpEntity entity = response.getEntity();
			isr = entity.getContent();
		} catch (Exception e) {
			Log.e("log_tag", "Error in http connection" + e.toString());
		}
		try {
			BufferedReader reader = new BufferedReader(new InputStreamReader(
					isr, "iso-8859-1"), 8);
			StringBuilder sb = new StringBuilder("");
			String line = null;
			while ((line = reader.readLine()) != null) {
				sb.append(line + "\n");
			}
			isr.close();
			result.append(sb.toString());
		} catch (Exception e) {
			Log.e("log_tag", "Error converting result " + e.toString());
		}

		try {
			JSONArray jArray = new JSONArray(result.toString());

			for (int i = 0; i < jArray.length(); i++) {
				JSONObject json = jArray.getJSONObject(i);
				results[0] = json.getString("someColumnName");
			}
			System.out.println(results[0]);
		} catch (Exception e) {
			Log.e("log_tag", "Error Parsing Data" + e.toString());
		}
		return results;
	}

	public static boolean checkLoginCredentials() {
		StringBuilder result = new StringBuilder("");
		String[] results = new String[2];
		InputStream isr = null;
		try {
			HttpClient httpClient = new DefaultHttpClient();
			HttpPost httpPost = new HttpPost("http://10.0.2.2/someLoginScript.php");
			List<NameValuePair> nameValuePairs = new ArrayList<NameValuePair>(2);
			nameValuePairs.add(new BasicNameValuePair("username", username));
			httpPost.setEntity(new UrlEncodedFormEntity(nameValuePairs));
			// Execute HTTP Post Request
			HttpResponse response = httpClient.execute(httpPost);
			HttpEntity entity = response.getEntity();
			isr = entity.getContent();
		} catch (Exception e) {
			Log.e("log_tag", "Error in http connection" + e.toString());
		}
		try {
			BufferedReader reader = new BufferedReader(new InputStreamReader(
					isr, "iso-8859-1"), 8);
			StringBuilder sb = new StringBuilder("");
			String line = reader.readLine();
			sb.append(line);
			isr.close();
			result.append(sb.toString());
		} catch (Exception e) {
			Log.e("log_tag", "Error converting result " + e.toString());
		}

		try {
			JSONArray jArray = new JSONArray(result.toString());
			JSONObject json = jArray.getJSONObject(0);
			results[0] = json.getString("username");
			results[1] = json.getString("password");
		} catch (Exception e) {
			Log.e("log_tag", "JSON Error Parsing Data" + e.toString());
		}
		if (username.equals(results[0]) && password.equals(results[1]))
			return true;
		else
			return false;
	}
}