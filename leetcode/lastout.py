nums=[1]
val=1
for i in range(len(nums)-1,-1,-1):
    print(i)
    if(val == nums[i]):
        nums.remove(val)
print(nums)
