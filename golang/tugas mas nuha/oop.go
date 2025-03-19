package main

import (
	"errors"
	"fmt"
	"time"
)

// Task Ineterface
type task interface{
	Execute() error
	Info() string
	
}

//BaseConstruct
type BaseStruct struct{
	ID string
	created_at time.Time
	Description string
}

// Email Task
type EmailStruct struct{
	BaseStruct
}

func (e EmailStruct) Execute() error{
	if e.ID == ""{
		return errors.New("ID kudu diisi")
	}
	fmt.Printf("Mengirim Email ke %s :\n", e.ID)
	time.Sleep(2 * time.Second)
	fmt.Printf("-> %s\n", e.Description)
	time.Sleep(12 * time.Second)
	fmt.Println("Email telah behasil dikirim")
	return nil
}

func (e EmailStruct) Info() string{
	fmt.Printf("Email info:\n ID: %s,\n Created at : %s,\n Description : %s\n", e.ID, e.created_at, e.Description)
	return ""
}

//SMS Task
type SMSStruct struct{
	BaseStruct
	No string
}

func (s SMSStruct) Execute() error{
	if s.ID == "" || s.No == ""{
		return errors.New("ID atau No kudu diisi")
	}
	fmt.Printf("Mengirim SMS ke %s :\n", s.ID)
	time.Sleep(2 * time.Second)
	fmt.Printf("-> %s\n", s.Description)
	time.Sleep(12 * time.Second)
	fmt.Println("SMS telah behasil dikirim")
	return nil
}

func (s SMSStruct) Info() string{
	fmt.Printf("SMS info:\n ID: %s,\n Created at : %s,\n Description : %s\n No : %s \n", s.ID, s.created_at, s.Description, s.No)
	return ""
}

// Task manager
type TaskManager struct{
	Tasks []task
}

func (t TaskManager) tambah(tugas task){
	t.Tasks = append(t.Tasks, tugas)
}
func main(){
	var email EmailStruct
	email.ID = "3480914"
	email.created_at = time.Now()
	email.Description = "fufufafafufufafa onyetenyafa mafa mafa fiafava"
	email.Execute()
	time.Sleep(2 * time.Second)
	email.Info()

	var sms SMSStruct
	sms.ID = "3480914"
	sms.No = "08123456789"
	sms.created_at = time.Now()
	sms.Description = "fufufafafufufafa onyetenyafa mafa mafa fiafava"
	sms.Execute()
	time.Sleep(2 * time.Second)
	sms.Info()

	var tambahtugas TaskManager
	tambahtugas.tambah(email)
	tambahtugas.tambah(sms)
}