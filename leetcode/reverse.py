x=123
y=str(x)
a=[]
if(x<(2^31)):
    print(0)
elif(x==0):
    print('0')
elif(y[len(y)-1] == '0'):
    for i in range(len(y)-1,-1,-1):
        if(y[len(y)-1] == '0'):
            for i in range(len(y)-1,-1,-1):
                if(y[i]!='0'):
                    a.append(i)
            s=y[0:a[0]+1]
            if(s[0]=='-' or s[0]=='+'):
                z=s.replace(s[0],'')
                print((s[0]+z[::-1]))
            else:
                print((s[::-1]))
elif(y[0]=='-' or y[0]=='+'):
     z=y.replace(y[0],'')
     print((y[0]+z[::-1]))
else:
    print(y[::-1])
        
