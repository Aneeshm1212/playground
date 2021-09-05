

import re
class Solution:
    def lengthOfLastWord(s) :
        s=s.strip()
        q=""
        if(s.find(" ")== -1):
            return len(s)
        elif(s.find(" ") != -1):
            while str(s.find(" ") == -1):
                for i in range(0,len(s)):
                    if(s[i]==" "):
                        q = s[i+1::]      
                        if(q.find(" ") != -1):
                            return len(q.strip())
                        else:
                            return len(q.strip())                        
        else:
            return  0
##        p=""
##        q=""
##        if(s.find(" ")!=-1):
##            for i in range(0,len(s)):
##                if(s[i]==" "):
##                    q = s[i+1::]
##                    if(q.find(" ") != -1):
##                        p = s  
##                    else:
##                        p = q
##        elif(s.find(" ")==-1):
##            p=s
##        print(p)
##        if(re.search('[a-zA-Z]',p)):
##            return len(p.strip())
##        else:
##            return  0
    print(lengthOfLastWord("Today is a nice day"))
