# Percobaan 1
# Input: satu buah gambar dari kamera
# Output: bounding box + face expression
# Metode: AWS Rekognition

import numpy as np
import cv2
import boto3
import numpy as np
import glob
import time

client=boto3.client(
    'rekognition',
    aws_access_key_id='',
    aws_secret_access_key='',
    aws_session_token=''
)

cap = cv2.VideoCapture(0)

while(True):

    ret, frame = cap.read()
    
    # Display the resulting frame
    cv2.imshow('frame', frame)
    
    if cv2.waitKey(1) & 0xFF == ord('q'):
        cv2.imwrite('C:\\Users\\PC\\Desktop\\DTS_Project\\website\\image.jpg', frame)
        break

# cap.release()

temp = cv2.imread('image.jpg')

height, width, _ = temp.shape

with open('image.jpg', 'rb') as image:
    response = client.detect_faces(Image={'Bytes': image.read()}, Attributes=['ALL'])

for face in response['FaceDetails']:
    
    best = 0
    ix_best = 0
    for ix, emotion in enumerate(face['Emotions']):
        if emotion['Confidence'] > best:
            best = emotion['Confidence']
            ix_best = ix
    
    res = face['Emotions'][ix_best]        
    
    x = int(face['BoundingBox']['Left'] * width)
    y = int(face['BoundingBox']['Top'] * height)
    w = int(face['BoundingBox']['Width'] * width)
    h = int(face['BoundingBox']['Height'] * height)

    cv2.rectangle(temp, (x,y), (x+w,y+h), (255,0,0), 2)

    font = cv2.FONT_HERSHEY_SIMPLEX
    cv2.putText(temp, res['Type'],(x, y), font, 0.5, (255, 255, 0), 2, cv2.LINE_AA)

cv2.imwrite('C:\\Users\\PC\\Desktop\\DTS_Project\\website\\image.jpg', temp)

img = cv2.imread('image.jpg')

while(True):

    cv2.imshow('frame', img)

    time.sleep(10)

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

cv2.destroyAllWindows()
