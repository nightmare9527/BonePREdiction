#!/usr/bin/env python
from torchvision import models
import torch
from PIL import Image
from skimage import io, transform
import matplotlib.pyplot as plt
import pymysql
import mysql.connector
from flask import Flask, render_template, request

app=Flask(__name__)

@app.route('/')
def home():
    return render_template('1.html')

@app.route('/predict', methods=['POST'])
def predict():
    data1=request.form['image']
    print(type(data1))
    print(data1)
    str='./image/'
    str=str+data1
    alexnet=models.alexnet(pretrained=True)
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
    print("Number of classes: {}".format(len(classes)))

    _, indices = torch.sort(out, descending=True)
    percentage = torch.nn.functional.softmax(out, dim=1)[0] * 100
    i=indices[0][0]
    return render_template('1.html', prediction_text=classes[i])
    #print([(classes[idx], percentage[idx].item()) for idx in indices[0][:10]])
    


if __name__ =="__main__":
    app.debug = True
    app.run(host='localhost', port='3300')