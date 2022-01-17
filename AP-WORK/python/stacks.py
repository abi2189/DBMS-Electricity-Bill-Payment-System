class mystack():
    def __init__(self, size):#you are declaring the size of the stack
        self.s=[]#list, mutable
        self.max=size
        self.top=-1
        for i in range(0,self.max):
            self.s.append(None)
        
    def isempty(self):
        return ((self.top<0))#checking if top is -1
    
    
    def printstack(self):
        if(self.isempty()):
            print("Stack is empty")
        else:
            for i in range(self.max):
                if(self.s[i]!=None):#instead of extra if =>i in self.top+1
                    print(self.s[i], end=" ")
            print(" ")
    
    def push(self, item):
        self.top=self.top+1 #by default -1 now added with 1 = 0//INDEX
        self.s[self.top]=item
    
    def pop(self):
        if (not(self.isempty())):
            self.s[self.top]=None#making value at top to NONE
            self.top=self.top-1#decrementing the index
        else:
            print("stack is empty")#stack empty exception
    
    def size(self):
        return(self.top+1)#cuz 0 is a valid index
        
    def topelement(self):
        print(self.s[self.top])#returns topmost element//present size, not size of stack overall
        
s1=mystack(5)
s1.isempty()
s1.push(10)
s1.push(20)
s1.push(30)
d=s1.size()
print(d)
s1.printstack()
s1.topelement()
s1.pop()
s1.pop()
s1.printstack()
s1.topelement()