nums=[10,20,30,5,10,50]
arr=[]
sums={}
val=0
i=0
while len(nums)-1 != i:
    print(i)
    if nums[i] < nums[i+1]:
        arr.append(nums[i])
        arr.append(nums[i+1])
        i=i+1
        print(arr)
    else:
        arr =set(arr)
        print(arr)
        for i in arr:
            val = val + i
        arr = list(arr)
        sums[arr[0]] = val
        arr.clear()
print(sums)
