# Percobaan 2
# Input: live stream dari kamera
# Output: live stream yg sudah diberi bounding-box dan face expression
# Metode: 
# (1) HaarCascade Classifier (face detection), 
# (2) Mini-Xception (expression detection)

from tensorflow.keras.models import model_from_json
import cv2
import numpy as np

json_file = open('model.json', 'r')
loaded_model_json = json_file.read()
json_file.close()
loaded_model = model_from_json(loaded_model_json)
loaded_model.load_weights('model.h5')
print('Loaded model from disk')

cap = cv2.VideoCapture(0)

EMOTIONS = ["angry", "disgust", "scared", "happy", "sad", "surprised", "neutral"]


while(True):
    
    ret, frame = cap.read()
    
    # Display the resulting frame
    cv2.imshow('frame', frame)
        
    # atur ulang posisi kanal
    frame = cv2.cvtColor(frame, cv2.COLOR_BGR2RGB)

    # konversi ke grayscale
    gray = cv2.cvtColor(frame, cv2.COLOR_BGR2GRAY)

    # ambil database wajah
    face_cascade = cv2.CascadeClassifier('./haarcascade_frontalface_default.xml')

    # deteksi wajah
    faces = face_cascade.detectMultiScale(gray, 1.3, 5)

    # perulangan untuk setiap wajah yang ditemukan
    for (x, y, w, h) in faces:
        # gambar kotak
        cv2.rectangle(frame, (x,y), (x+w,y+h), (255,0,0), 2)
        roi_color = frame[y:y+h, x:x+w]
        roi_gray = gray[y:y+h, x:x+w]
        resized = cv2.resize(roi_gray, (48, 48), interpolation = cv2.INTER_AREA)
        resized = resized.reshape(1, 48, 48, 1)
        resized = resized.astype('float') / 255.0
        preds = loaded_model.predict(resized)[0]
        # print(ynew)
        emotion_probability = np.max(preds)
        output = EMOTIONS[preds.argmax()]
        
        # show the inputs and predicted outputs
        print("Predicted = ", output)
        font = cv2.FONT_HERSHEY_SIMPLEX
        cv2.putText(frame, output,(x, y), font, 0.5, (255, 255, 0), 2, cv2.LINE_AA)
    
    # Display the resulting frame
    cv2.imshow('frame',frame)
    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

    if cv2.waitKey(1) & 0xFF == ord('q'):
        break

# cap.release()
cap.release()
cv2.destroyAllWindows()
