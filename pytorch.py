#!/usr/bin/env python
from torchvision import models
import torch
from PIL import Image
from skimage import io, transform
import matplotlib.pyplot as plt
import pymysql
import mysql.connector
import sys
#import nltk
alexnet=models.alexnet(pretrained=True)
#input=sys.argv[1]
#connect=pymysql.connect(host="localhost",port=3306, user="root", passwd="", database="image" )
connect1=pymysql.connect(host="localhost",port=3306, user="root", passwd="", database="patient_data" )
cursor=connect1.cursor()
#cursor.execute("SELECT name FROM image")
cursor.execute("SELECT num FROM search WHERE id=(SELECT MAX(id) FROM search);")
result = cursor.fetchone()
#print(result)
#print(connect)
connect1.close()
#str1='./image/'+result
str='./image/'
stradd='.jpg'
for item in result:
    str=str+item
    #print(str)

str=str+stradd
img=Image.open(str)
n=255
img.resize((256,256))
from torchvision import transforms
transform = transforms.Compose([        # Defining a variable transforms
 transforms.Resize(256),                # Resize the image to 256×256 pixels
 transforms.CenterCrop(224),            # Crop the image to 224×224 pixels about the center
 transforms.ToTensor(),                 # Convert the image to PyTorch Tensor data type
 transforms.Normalize(                  # Normalize the image
 mean=[0.485, 0.456, 0.406],            # Mean and std of image as also used when training the network
 std=[0.229, 0.224, 0.225]      
 )])

img_t = transform(img)
img_t.shape
batch_t = torch.unsqueeze(img_t, 0)
alexnet.eval()

out = alexnet(batch_t)
out.shape

with open('imagenet_classes.txt') as f:
  classes = [line.strip() for line in f.readlines()]
#print("Number of classes: {}".format(len(classes)))

_, indices = torch.sort(out, descending=True)
percentage = torch.nn.functional.softmax(out, dim=1)[0] * 100
#print([(classes[idx], percentage[idx].item()) for idx in indices[0][:10]])
i=indices[0][0]
print(classes[i])