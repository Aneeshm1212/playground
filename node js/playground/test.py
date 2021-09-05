import requests

url="localhost:3000/media"
value = requests.get(url)
print(value)
