nums=[2,2,1,1,1,2,2]
vals=()*len(nums)
for i in nums:
    for j in range(0,len(nums)): 
        if(i==nums[j]):
            vals[j]=vals[j]+1
print(vals)
