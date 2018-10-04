using System.Collections;
using System.Collections.Generic;
using UnityEngine;
using UnityEngine.UI;

public class Player : MonoBehaviour {

    public Text textLogin, textPoints, textLives;

	// Use this for initialization
	void Start () {
		
	}
	
	// Update is called once per frame
	void Update () {
        textLogin.text = "Name: " + BD.stringLogin;
        textPoints.text = "Points: " + BD.intPoints.ToString();
        textLives.text = "Lives: " + BD.intLives.ToString();
	}
}
