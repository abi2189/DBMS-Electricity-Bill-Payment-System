class SLList():
    class node():
        def __init__(self,data):
            self.element=data
            self.next = None #declares and intializes to NONE
        #NODE class is visible to every method in SLLIST class
    
    def __init__(self):#happens at every obj creation for SLList class
        self.head = self.node(None)#creation of obj for node class
        self.size = 0#declared and intializes to 0
    
    def isEmpty(self):
        if self.size>0:
            return False
        else:
            return True
        
    def insertFirst(self,data):
        newNode = self.node(data)
        if self.size == 0:
            #head, newNode -> objs of node class
            self.head.element = newNode.element #self.head.element was NONE, now it's newNode.element=>.element stands for data
        else:
            newNode.next = self.head#contains ref to next node//makes LINK bw newNode and head
            self.head = newNode #assigning the obj to head
        self.size += 1
        
    def insertLast(self,data):
        newNode=self.node(data)#created a node
        if(self.size==None):
            self.head.element=newNode.element
        else:
            currentNode=self.head #like i=0, first element
            while(currentNode.next!=None):
                currentNode=currentNode.next
            #currentNode that comes out will be the last node
            currentNode.next=newNode#linked the node
        self.size+=1
     
    
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
            if (self.head.next == None):#if there's only one value
                self.head.element = None
            else:
                temp = self.head
                self.head = self.head.next #next obj assigned as new head, first obj del
                del temp
            self.size -=1
            
   
    def deleteLast(self):
        currentNode=self.head
        while(currentNode.next.next!=None):
            currentNode=currentNode.next
            #last but one, second last element comes out
        currentNode.next=None#ref for next is none, lost
            
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
