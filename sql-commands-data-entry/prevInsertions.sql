CREATE TABLE User(user_id varchar(6), phone_no varchar(10), first_name varchar(20), last_name varchar(20), passw varchar(20), email_id varchar(20), CONSTRAINT PK_Customer PRIMARY KEY(user_id, phone_no));
insert into User values('abc090','9728910006','parag','agarwal','parry142w','para011@gmail.com');
insert into User values('qrs044','9940596886','rohit','saravanan','rohitrage198','rsa902@gmail.com');
insert into User values('xyz011','9952985913','amit','rawat','am2324wat','amitwat011@gmail.com');
insert into User values('lmn011','2928710106','arjun','kapoor','junu444','kapoor601@gmail.com');
insert into User values('ijk681','8989367615','shivaji','rao','rao1212','gaikwa1212@gmail.com');
insert into User values('zxc011','9278467283','akshita','luffy','luffy01','akshita01@gmail.com');
insert into User values('bnm090','9652738946','abi','sadhashivam','abi0308','abi08@gmail.com');
insert into User values('asd044','9037352947','arav','suresh','arav0308','aravind126@gmail.com');
insert into User values('bar011','9879273973','arav','b','barav123','barvind@gmail.com');
select * from User;

CREATE TABLE Address(pincode integer, city varchar(15), state varchar(15), CONSTRAINT PK_Address PRIMARY KEY(pincode));
insert into Address values('599118','bangalore','karnataka');
insert into Address values('600001','chennai','tamilnadu');
insert into Address values('110001','dehli','haryana');
insert into Address values('230532','mumbai','maharashtra');
insert into Address values('560091','hyderabad','andrapradesh');
insert into Address values('682222','chennai','tamilnadu');
insert into Address values('983432','hyderabad','andrapradesh');
insert into Address values('680021','mumbai','maharashtra');
insert into Address values('692323','mumbai','maharashtra');
select * from Address;

CREATE TABLE customer_details(user_id varchar(6), pincode integer, auto_renewal INTEGER, DOB date, postal_code varchar(6), bank_name varchar(10), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id), CONSTRAINT FK_cust FOREIGN KEY(pincode) REFERENCES Address(pincode)); 
insert into customer_details values('lmn090','230532' ,'1','2002-12-25','090','sbi','22334451678901823','arjun kapoor','2024-10-10'); 
insert into customer_details values('qrs044','599118','1','2000-07-15','044','icici','91984678223100566','rohit saravanan','2027-01-20'); 
insert into customer_details values('ijk011','110001','0','2002-04-01','011','cub','6198885324001266','shivaji rao','2023-11-19'); 
insert into customer_details values('abc090','682222','1','1999-10-05','090','sbi','22090977781236674','parag agarwal','2025-03-11');
insert into customer_details values('xyz011','692323','0','2002-10-01','011','uco','12890345667786233','amit rawat','2022-12-07'); 
insert into customer_details values('bar011','680021','0','2002-10-03','011','pnb','839572839026','b arvind','2022-12-23'); 
select * from customer_details;

CREATE TABLE Admin_details(admin_id varchar(6), user_id varchar(6), admin_control_area integer, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
insert into Admin_details values('zxc011','xyz011',011); 
insert into Admin_details values('zxc011','ijk011',011);
insert into Admin_details values('zxc011','bar011',011);
insert into Admin_details values('bnm090','abc090',090);
insert into Admin_details values('bnm090','lmn090',090);
insert into Admin_details values('asd044','qrs044',044);
select*from Admin_details;

CREATE TABLE Bill(bill_no varchar(10), units_consumed_cycle integer, totalCharges float, units_consumed_heavy integer, units_consumed_medium integer, units_consumed_low integer, energy_charges float, tariff_category varchar(20), tariff_slab varchar(10), fixed_charges integer, Total float, Duty float, GST float, office integer, laundry integer, Heating_Cooling integer, lights integer, kitchen integer, misc integer, tools integer, CONSTRAINT PK_Bill PRIMARY KEY(bill_no));
insert into Bill values('8302270274',10,4000.89,6,2,2,2500.89,'Domestic','1-A',500,1500,200,800,0,2,3,2,2,1,0);
insert into Bill values('2342342342',20,8132.87,8,2,2,6132.87,'Domestic','1-B',500,2000,500,1000,5,2,3,2,2,1,5);
insert into Bill values('6743744247',15,6300.32,4,2,2,5300.32,'Domestic','1-A',500,500,200,300,3,2,3,2,2,1,2);

CREATE TABLE Payment_details(transaction_id varchar(12), bill_amt float, pay_status varchar(30), pay_date date, pay_time timestamp, CONSTRAINT PK_Payment PRIMARY KEY(transaction_id));
insert  into Payment_details values('782738905672',4000.89, 'payment successful','2021-12-22','2021-12-22 15:23:08 PM');
insert  into Payment_details values('82953643277',0,'payment failed','2021-11-02','2021-11-02 13:13:18 PM');
insert  into Payment_details values('873048905672',8132.87 ,'payment successful','2021-11-18','2021-11-18 10:45:45 AM');
select * from Payment_details;

CREATE TABLE Bill_details(bill_no varchar(10), user_id varchar(6), transaction_id varchar(12), bill_area varchar(15), issue_month varchar(9), issue_date date, CONSTRAINT PK_billDet PRIMARY KEY(bill_no, user_id), FOREIGN key(bill_no) REFERENCES Bill(bill_no), FOREIGN key(user_id) REFERENCES customer_details(user_id), FOREIGN KEY(transaction_id) REFERENCES Payment_details(transaction_id));
insert into Bill_details values('8302270274','abc090','248527493063',090,'dec','2021-12-5');
insert into Bill_details values('2342342342','qrs044','347937593653',044,'nov','2021-11-8');
insert into Bill_details values('6743744247','xyz011','396294860739',011,'dec','2021-12-6');

CREATE TABLE Feedback(fb_id number, user_id varchar(6), fb_type varchar(20), rating float, fb_desc varchar(30), fb_date date, fb_time timestamp, Constraint PK_Feedback PRIMARY KEY(fb_id, user_id), FOREIGN KEY(user_id) REFERENCES customer_details(user_id)); 
insert into Feedback values('15151','abc090','Bill Generation','i was able to view the generated bill easily','2021-12-22','2021-12-22 15:28:08 PM');
insert into Feedback values('12365','qrs044','Bill Payment','my payment got rejected the first time i tried','2021-11-02','2021-11-02 13:18:18 PM');
insert into Feedback values('98723','xyz011','Analysis','the analysis was very informative, thank you','2021-11-18','2021-11-18 10:48:45 AM');
