import cv2
import numpy as np
image1 = cv2.imread("c1.jpg")
image2 = cv2.imread("c2.jpg")
difference = cv2.subtract(image1, image2)
result = not np.any(difference) #if difference is all zeros it will return False
if result is True:
print("The images are the same")
else:
cv2.imwrite("result.jpg", difference)
print("the images are different")
