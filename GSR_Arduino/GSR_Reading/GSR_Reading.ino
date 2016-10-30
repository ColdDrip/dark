/*
  Code Snippet from Chris Smith https://github.com/chris-smith/ArduinoGSR
  This code allow GSR circuit detect the data in the shortest interval without 
  being interfered by network connection (compared to similar sketch but ran in Photon). 
*/


// GSR signal
int signalPin = A0;

void setup(){
  Serial.begin(9600); 
  pinMode(signalPin, INPUT);
}

void loop(){
  // read values
  int signal = analogRead(signalPin);
  if (Serial.available() > 0) {
    // check if data was requested
    byte inbyte=Serial.read();
    if(inbyte=='a'){
      sendToProcessing('G', signal);
    }
  }
}

void sendToProcessing(char c, int val){
  Serial.print(c);
  Serial.println(val);
}
