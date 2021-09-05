def plusOne(digits):
    sumr=0
    strr=""
    if((digits[len(digits)-1]) == 9):
        for i in range(0,len(digits)):
            strr = strr + str(digits[i]) 
        strr = str(int(strr) + 1)
        digits.clear()
        for i in range(0,len(strr)):
            digits.append(strr[i])
    else:
        digits[len(digits)-1] = digits[len(digits)-1] +1
    return digits
print(plusOne([9,9]))
