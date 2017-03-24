#!/usr/bin/python
import time
import picamera

with picamera.PiCamera() as picam:
    picam.start_preview()
    time.sleep(50)
    picam.capture('nombre.jpg')
    picam.stop_preview()
    picam.close()
