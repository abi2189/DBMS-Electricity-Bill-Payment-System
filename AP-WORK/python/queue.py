class MyQueue():
    
    def __init__(self,size):
        # this is the queue container called 'queue'
        self.queue = []#list, mutable
        # front and back indexes
        self.f = 0
        self.r = -1
        # define the queue size 'max_queue_size' and initialize it
        self.max_queue_size = size
        for i in range(0,self.max_queue_size):
            self.queue.append(None)#every element of the queue
        self.sz=0

    # define the enqueue operation which inserts the value into the queue, must throw a queue full exception("Queue Full Exception")
    def enqueue(self, value):

        if  self.size() == self.max_queue_size:
            print ("Queue Full Exception")
            return
        else:
            self.r = (self.r+1) % self.max_queue_size#index is incremented first
            self.queue[self.r] = value#new index containing value
            self.sz+=1
            self.printQueue()
        
        return
                
    # returns first elt of the queue if not empty, else throws "Queue Empty Exception"
    
    def dequeue(self):
        if self.size()==0:
            print("Queue Empty Exception")
        else:

            obj = self.queue[self.f]
            self.queue[self.f] = None  #deleted first              
            self.f = (self.f+1)%self.max_queue_size  #inc f          
            self.sz = self.sz-1

            return obj
       
    
    # returns front element without removing it if the queue is not empty, else throws exception  ("Queue Empty Exception") 
    def front(self):
        if (self.size()!=0):
            return self.queue[self.f]
        else:
            print("Queue Empty Exception")
     
    # returns True if queue is empty
    def isEmpty(self):
        return (self.sz==0)

    # returns the number of elements currently in queue
        
    def size(self):#only used to check isEmpty or not
        return (self.sz)


    def printQueue(self):
        if (self.isEmpty()):
            print ("Queue Empty")
        else:
            for i in range(self.max_queue_size):
                if self.queue[i]!=None:#prints only if value is not NONE
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