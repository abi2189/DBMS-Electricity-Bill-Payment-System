a = 2
b = 2 
print(id(a), id(b))
b = 3
print(id(a), id(b))
b = 4
print(id(a), id(b))

x ="g"
def f():
    x="e"
    def g():
        x='l'
        print(x)
    g()
    print(x)
f()
print(x)
#local, enclosing, global