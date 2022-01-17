
print(0x1011)

thisTuple = (1,2)
print(thisTuple[0])
thisTuple[0] =3 #immutable

thisSet = {1,2}
print(thisSet)
thisSet.remove(1)
print(thisSet)
thisSet.add(123)
print(thisSet)

thisDict = {'n':1, 1:123} #keys cannot be null
print(thisDict.get(1))
print(thisDict['n'])

print(bool(123))
type(True)
type(true) #nah
type(t)
#only-false
print(bool(0))
print(bool([]))

#type cast
a = float(input("hi : "))
print("sha" , a) #concatenate : comma for diff data types, + for both str

a,b = 1,1
print(a is not b)
print(a is b)
#for lists false, cuz diff addressess whereas for 5,5 'hi','hi' it is TRUE

for i in range(3):
    print(i)

print(0o1234)
print(oct(668))
print(0b10011010010)
print(0o123) #1*64 + 2*8 + 3*1

if(True):
    pass
elif(True):
    pass
else:
    pass #to not keep it empty

#short hadn if else
print(0o1234) if 1 < 0 else print(0o123)

#while
while(cond):
    
else:
    # last statement after while loop/ same as putting it outside 

for i in thisTuple:
    print(i)
    print(thisTuple[i])

#loops --> for, while --> continue, break, pass
#range --> range(len(str)), range(start,end,step) => end is >= or <= not ==

#string ->slicing, len, strip, lower, split
#lisst -> len, list(()), append, insert, (remove, pop, del, clear)
#tupe -> tuple(), count, index, del
#set -> add, update, remove, discard
#dict -> get, values, items, len, (pop, popitem, del, clear)




