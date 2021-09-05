def isValid( s: str) :
    arr=[]
    i=0
    for i in range(0,len(s)):
        if((s[i]==")" or s[i]=="]" or s[i]=="}" ) and len(arr)==0):
            return False
        elif(s[i]=="(" or s[i]=="[" or s[i]=="{" ):
            arr.append(s[i])
        elif(s[i]==")" and arr[len(arr)-1]=="(" and len(arr)!=0):
            arr.pop()
        elif(s[i]=="}" and arr[len(arr)-1]=="{" and len(arr)!=0):
            arr.pop()
        elif(s[i]=="]" and arr[len(arr)-1]=="[" and len(arr)!=0):
            arr.pop()
        else:
            return False
        print(arr , i)
    if(len(arr)==0):
        return True
    else:
        return False
print(isValid("(])"))

