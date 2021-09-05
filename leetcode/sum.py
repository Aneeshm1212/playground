def twoSum(nums, target):
        ans=[]
        var=[]
        if(len(nums) <= 2):
                if(nums[0]+nums[1]==target):
                        return([0,1])
        else:
                for i in range(0,len(nums)):
                        for j in range(1,len(nums)):
                                if(nums[i]+nums[j]==target):
                                    ans.append(i)
                                    ans.append(j)
                                    if(len(ans)>2):
                                            var.append(ans[0])
                                            var.append(ans[1])
                                            return(var)
                                    else:
                                            return(ans)
                                    
        
(twoSum([2,7,11,15],9))
(twoSum([3,2,4],6))
(twoSum([3,3],6))
