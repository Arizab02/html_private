import sys 
import PyQt5
from PyQt5.Qtwidgets import Qapplication, Qwidget, Qlabel

if __name__=='__main__':
    a = Qapplication(sys.argv)

    form = Qwidget()
    form.resize(200,10 )
    form.move(300,300)
    form.setWindowTitle("Gui Minimal")
    
    label = Qlabel
    label.move(55,40)
    label.setParent(form)

    form.show()

    a.exec_()

