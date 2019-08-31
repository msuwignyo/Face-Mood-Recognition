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
    aws_access_key_id='ASIA32BIHZAJA2MZQ36R',
    aws_secret_access_key='3Ijo/1udTP9lzFn9JxV6ZAWfLwOAliW0suygC8kd',
    aws_session_token='FQoGZXIvYXdzEF8aDFVaJwRIgAZWnN+rVyKIAq8w02sxM3FOpIKadACjlRL1yPYUCPjy/VlG0Slqm0FI5p9DGGLPrOaaUfgB1RcuwN6rsSu+Hx70Za497eurKTKRqt1ouuht4pSu88o49nn0zKBatUvBrbLDZvuEgwzIqXfi1yQEWs0phUjPtp/cXXn/RGpPjJtPFCwudIBam5i+Mw02297zPaP2iXe8q6RB68OPJa4kXwa0T06UAKDps4LjHsIxdX1stM2LLXMqMjBh85/chAtmIMwlPMzRC1ZH5ZJpP3k2vKc3qLcmYxOaZM9S8C3cZkro+U8+G2QMcg46AoCc5wUzEEGEAg3I1DadAmzmp1dBRE2iu2og/aynBw6vMa6G41D4Ryin+v3qBQ=='
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
