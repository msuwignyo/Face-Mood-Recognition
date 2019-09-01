#Copyright 2018 Amazon.com, Inc. or its affiliates. All Rights Reserved.
#PDX-License-Identifier: MIT-0 (For details, see https://github.com/awsdocs/amazon-rekognition-developer-guide/blob/master/LICENSE-SAMPLECODE.)

import boto3
import glob

if __name__ == "__main__":

#	ImageFile= glob.glob('./*.tif')

	ImageFile = ['example.jpg']
	client=boto3.client(
		'rekognition',
		aws_access_key_id='',
		aws_secret_access_key='',
		aws_session_token=''
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



