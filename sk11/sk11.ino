

#include <NewPing.h>
#define TRIGGER_PIN 13
#define ECHO_PIN 12
#define MAX_DISTANCE 400

NewPing sonar(TRIGGER_PIN, ECHO_PIN, MAX_DISTANCE);

void setup() {
  Serial.begin(9600);

}


void loop() {
    delay(500);
    unsigned int uS = sonar.ping();
    pinMode(ECHO_PIN,OUTPUT);
    digitalWrite(ECHO_PIN,LOW);
    pinMode(ECHO_PIN,INPUT);
    int a=uS / US_ROUNDTRIP_CM;
    if(uS>200)
    {
      Serial.println("0");  
    }
    else
    {
      Serial.println("1");
    }
    
}

