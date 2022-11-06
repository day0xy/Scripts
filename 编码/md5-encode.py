import hashlib
data=input('please input: ')
print(hashlib.md5(data.encode(encoding='UTF-8')).hexdigest())
