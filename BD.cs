using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;
using UnityEngine.SceneManagement;

//gerenciador de cenas
using UnityEngine.SceneManagement;

public class BD : MonoBehaviour {

    public static string stringLogin;
    public static int intPoints, intLives;

    public InputField login, password;

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
		
	}

    public void TryLogin()
    {
        StartCoroutine(LoginAccount());
    }

    IEnumerator LoginAccount()
    {
        string resp, url = @"http://localhost/aula/";

        WWWForm Form = new WWWForm();
        Form.AddField("action", "login");
        Form.AddField("login", login.text);
        Form.AddField("password", password.text);

        WWW www = new WWW(url, Form);
        yield return www;

        resp = www.text;

        if (resp == "false")
        {
            SceneManager.LoadScene("errado");
        }
        else
        {
            string[] dates = resp.Split('|');
            stringLogin = dates[0];
            intPoints = int.Parse(dates[2]);
            intLives = int.Parse(dates[4]);
            SceneManager.LoadScene(dates[3]);
        }
        
    }
}
