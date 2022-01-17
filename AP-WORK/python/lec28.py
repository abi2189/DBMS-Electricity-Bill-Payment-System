class abi:
    queen = 69
    def __init__(self ,c ,d):
        self.a = c 
        self.b = d

    def f(self):#minimum
        print("a")

    def __del__(self):
        print("destroyed")

arav = abi(1,2)
print(arav.a)
#refers to the object
arav.f()

print(arav.queen)
#methods inside class need self as a parameter, no one else

#getattr, hasattr, setattr, delattr

