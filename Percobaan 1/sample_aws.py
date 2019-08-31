#Copyright 2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
#PDX-License-Identifier: MIT-0 (For details, see https://github.com/awsdocs/amazon-rekognition-developer-guide/blob/master/LICENSE-SAMPLECODE.)

import boto3
import glob

if __name__ == "__main__":

#	ImageFile= glob.glob('./*.tif')

	ImageFile = ['example.jpg']
	client=boto3.client(
		'rekognition',
		aws_access_key_id='ASIAWUQA2C3CJTCUQDTD',
		aws_secret_access_key='3oXRNPmky2r93ik6o398B40ceAOcnAoIMu4jqEdG',
		aws_session_token='FQoGZXIvYXdzEFsaDBHhl8HOc4Ne3mN/ZSKIAgf+4zDmCWoXQjt8Gp0+d8IS9QZfrOKmcfcrWu0IoQpFgBQ2ur/fRIsciMvZ0sXLF/PzSwsQSP5zGlbj9sTDzos0+B/1hejCrHLxBBLVoMcg3WFOvH7LRGw6+ZKNvlNtBAzHe3atYI1WBQnUQd9LfOGIgAyyvXKKGjHZIrNNnz4S6aJtp0NTNDV0RCZWQbRfqSpyXLbWnEVws5TYkbViQ1uYezWKnKPSV8hV0TFU7WViOQOrVM2yCtfiO4eZsdhqmTAOxgkVBa9QHutBWf7Q6x3X41hZu8jH75ewfqqJOoSruiKqWwqXSsfgKls/lSjfaPOq1uKSzEYwFkKv5xsCmCm3YSesNLT/8iiej/3qBQ=='
	)

	for ix, img in enumerate(ImageFile):
		print('Image: ', ix, ' ', img)
		with open(img, 'rb') as image:
			response = client.detect_labels(Image={'Bytes': image.read()})

		print('Detected labels in ' + img)    
		for label in response['Labels']:
			print(label['Name'] + ' : ' + str(label['Confidence']))

		print('Done...')
		print()



