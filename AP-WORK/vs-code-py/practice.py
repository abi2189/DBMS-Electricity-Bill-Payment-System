# STACK
class mystack():
    def __init__(self, size):
        self.s=[]
        self.max=size
        self.top=-1
        for i in range(0,self.max):
            self.s.append(None)
        
    def isempty(self):
        return ((self.top<0))
    
    
    def printstack(self):
        if(self.isempty()):
            print("Stack is empty")
        else:
            for i in range(self.max):
                if(self.s[i]!=None):
                    print(self.s[i], end=" ")
            print(" ")
    
    def push(self, item):
        self.top=self.top+1 
        self.s[self.top]=item
    
    def pop(self):
        if (not(self.isempty())):
            self.s[self.top]=None
            self.top=self.top-1
        else:
            print("stack is empty")
    
    def size(self):
        return(self.top+1)
        
    def topelement(self):
        print(self.s[self.top])
        
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

# QUEUE ADT
class MyQueue():
    
    def __init__(self,size):
        # this is the queue container called 'queue'
        self.queue = []
        # front and back indexes
        self.f = 0
        self.r = -1
        # define the queue size 'max_queue_size' and initialize it
        self.max_queue_size = size
        for i in range(0,self.max_queue_size):
            self.queue.append(None)
        self.sz=0

    # define the enqueue operation which inserts the value into the queue, must throw a queue full exception("Queue Full Exception")
    def enqueue(self, value):
        #@start-editable@

        if  self.size() == self.max_queue_size:
            print ("Queue Full Exception")
            return
        else:
            self.r = (self.r+1) % self.max_queue_size
            self.queue[self.r] = value
            self.sz+=1
            self.printQueue()
        
        #@end-editable@
        return
                
    # returns first elt of the queue if not empty, else throws "Queue Empty Exception"
    
    def dequeue(self):
        if self.size()==0:
            print("Queue Empty Exception")
        else:
            #@start-editable@

            obj = self.queue[self.f]
            self.queue[self.f] = None                
            self.f = (self.f+1)%self.max_queue_size            
            self.sz = self.sz-1
            #@end-editable@
            return obj
       
    
    # returns front element without removing it if the queue is not empty, else throws exception  ("Queue Empty Exception") 
    def front(self):
        #@start-editable@

        if (self.size()!=0):
            return self.queue[self.f]
        else:
            print("Queue Empty Exception")
        
        #@end-editable@
     
    # returns True if queue is empty
    def isEmpty(self):
        #@start-editable@

        return (self.sz==0)
        
        #@end-editable@

    # returns the number of elements currently in queue
        
    def size(self):
        #@start-editable@

        return (self.sz)
        #@end-editable@

    def printQueue(self):
        if (self.isEmpty()):
            print ("Queue Empty")
        else:
            for i in range(self.max_queue_size):
                if self.queue[i]!=None:
                    print(self.queue[i],end=" ")
            print(" ")

q1=MyQueue(7)
print(q1.size())
print(q1.isEmpty())
q1.enqueue(10)
q1.enqueue(20)
q1.enqueue(30)
q1.enqueue(40)
q1.enqueue(50)
print(q1.dequeue())
print(q1.dequeue())
print(q1.dequeue())
q1.printQueue()           
print(q1.front())
print(q1.f)
print(q1.r)

# LinkedList ADT
class SLList():
    class node():
        def __init__(self,data):
            self.element=data
            self.next = None
    
    def __init__(self):
        self.head = self.node(None)
        self.size = 0
    
    def isEmpty(self):
        if self.size>0:
            return False
        else:
            return True
        
    def insertFirst(self,data):
        newNode = self.node(data)
        if self.size == 0:
            self.head.element = newNode.element
        else:
            newNode.next = self.head
            self.head = newNode
        self.size += 1
        
     
    
    def printList(self):
        if (self.isEmpty()):
            print("List is Empty")
        else:
            currentNode = self.head
            while(currentNode != None):
                print(currentNode.element, end =" ")
                currentNode = currentNode.next
            print("")
            
        
    def deleteFirst(self):
        if(self.isEmpty()):
            print("List is Empty")
        else:
            if (self.head.next == None):
                self.head.element = None
            else:
                temp = self.head
                self.head = self.head.next
                del temp
            self.size -=1
            
    def insertLast(self,data):
        newNode=self.node(data)
        if(self.size==None):
            self.head.element=newNode.element
        else:
            currentNode=self.head
            while(currentNode.next!=None):
                currentNode=currentNode.next
            currentNode.next=newNode
        self.size+=1
   
    def deleteLast(self):
        currentNode=self.head
        while(currentNode.next.next!=None):
            currentNode=currentNode.next
        currentNode.next=None
            
    def listSize(self):
        return self.size
            


sll = SLList()
print(sll.isEmpty())
sll.insertFirst(10)
sll.insertFirst(20)
sll.insertFirst(30)
sll.insertLast(40)
sll.insertLast(50)
sll.insertLast(60)
sll.printList()
print(sll.listSize())
sll.deleteFirst()
sll.deleteLast()
sll.printList()
print(sll.listSize())
print(sll.isEmpty())
