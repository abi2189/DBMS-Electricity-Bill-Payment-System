-- 1.	user_details
CREATE TABLE user_details(user_id integer(6), first_name varchar(30), last_name varchar(30), DOB date, phone_no integer(10), email_id varchar(30), passw varchar(20), CONSTRAINT PK_Customer PRIMARY KEY(user_id, phone_no);
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER, postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

insert into user_details values(202208,'Arav','Abi','20 Jan 22','1232348904','pat.johnston@example.com','jarhead');
insert into user_details values(902348,'Landon ','Morris','12 Feb 20','9023488904','landon.morris@example.com','homeboy');
insert into user_details values(333444,'Gladys ','Morris','10 Jan 21','1232333444','gladys.morris@example.com','drpepper');
insert into user_details values(612903,'Lonnie','Hopkins','22 Aug 20','6129038904','lonnie.hopkins@example.com','justus');
insert into user_details values(809080,'Yvonne','Garrett','31 Dec 20','8090808904','yvonne.garrett@example.com','mustang6');

-- 2.	customer_details
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER(1), postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);

INSERT INTO customer_details VALUES(202208, 1, '679543','icici9981365427765','parag','22 jan 24');
INSERT INTO customer_details VALUES(902348, 1, '537341','hdfc23998136154776','adithya','15 feb 23');
INSERT INTO customer_details VALUES(333444, 1, '479001','cub12345098764512','amir','02 jan 25');
INSERT INTO customer_details VALUES(612903, 0, '432098','canara56789012342','oscar','29 jul 26');
INSERT INTO customer_details VALUES(809080, 0, '324561','indian76543209123','william','20 jun 23');
-- 3.	Admin_details
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));

-- CREATE TABLE Admin_details(admin_id varchar(6), user_id varchar(6), admin_control_area varchar(15), CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
insert into Admin_details values('300011',202208,560024); 
insert into Admin_details values('766090',902348,560024);
insert into Admin_details values('504044',333444,560024);
insert into Admin_details values('872022',612903,231102); 
insert into Admin_details values('772902',809080,231102); 
select*from Admin_details;

-- 4.	Address
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

insert into Address values('599118','bangalore','karnataka');
insert into Address values('600001','chennai','tamilnadu');
insert into Address values('110001','dehli','haryana');
insert into Address values('230532','mumbai','maharashtra');
insert into Address values('560091','hyderabad','andrapradesh');
select * from Address;

-- 5.	service_details
CREATE TABLE service_details(service_no integer(6), pincode integer, CONSTRAINT PK_ser PRIMARY KEY(service_no), FOREIGN key(pincode) REFERENCES Address(pincode));

INSERT INTO service_details VALUES(234516,600632);
INSERT INTO service_details VALUES(089543,456732);
INSERT INTO service_details VALUES(780523,462735);
INSERT INTO service_details VALUES(246890,713908);
INSERT INTO service_details VALUES(546890,586213);

-- 6.	Billing
CREATE TABLE Billing(bill_no varchar(10) AUTO_INCREMENT, cons_category_id integer AUTO_INCREMENT, cons_appl_id integer AUTO_INCREMENT, ec_id integer AUTO_INCREMENT, oc_id  integer AUTO_INCREMENT, units_consumed_cycle integer(5), FOREIGN key(ec_id) REFERENCES Energy_charge(ec_id), FOREIGN key(oc_id) REFERENCES other_charge(oc_id),
FOREIGN key(cons_appl_id) REFERENCES Appliances(cons_appl_id),
);

INSERT INTO Billing(units_consumed_cycle) VALUES('1200');
INSERT INTO Billing(units_consumed_cycle) VALUES('1650');
INSERT INTO Billing(units_consumed_cycle) VALUES('2100');
INSERT INTO Billing(units_consumed_cycle) VALUES('970');
INSERT INTO Billing(units_consumed_cycle) VALUES('2250');
-- 7.	Energy_charge //BILLS
CREATE TABLE Energy_charge(ec_id integer AUTO_INCREMENT , energy_charge_per_unit float, tariff_slab varchar(10), total_energy_charges float, CONSTRAINT PK_EC PRIMARY KEY(ec_id));

INSERT INTO Energy_charge VALUES(222,'1200','2342','4366');
INSERT INTO Energy_charge VALUES(222,'2200','3442','2340');
INSERT INTO Energy_charge VALUES(222,'3200','4442','2531');
INSERT INTO Energy_charge VALUES(222,'1908','2341','1234');
INSERT INTO Energy_charge VALUES(222,'4312','1231','3421');

-- 8.	other_charge //BILLS
CREATE TABLE other_charge(oc_id integer AUTO_INCREMENT, Duty float, GST float, fixed_charges float, total_other_charges float CONSTRAINT PK_EC PRIMARY KEY(oc_id));
INSERT INTO other_charge VALUES(111,'1212','5656','8988','5676');
INSERT INTO other_charge VALUES(111,'1122','3908','7771','3411');
INSERT INTO other_charge VALUES(111,'1200','5096','8966','5006');
INSERT INTO other_charge VALUES(111,'3213','2000','1090','5555');
INSERT INTO other_charge VALUES(111,'1012','7878','2134','6191');




-- 9.	Appliances //Analysis
CREATE TABLE Appliances(cons_appl_id integer(5), office integer(3), laundry integer(3), Heating_Cooling integer(3), Living_Room integer(3), lights integer(3), kitchen integer(3), misc integer(3), tools integer(3), CONSTRAINT PK_EC PRIMARY KEY(cons_appl_id));

INSERT INTO Appliances VALUES(86490,10,20,15,23,12,18,6,9); 
INSERT INTO Appliances VALUES(24313,23413,23211,22111,11231,22113,11223,11223,11223); 
INSERT INTO Appliances VALUES(11233,34521,33442,22323,13132,45321,12323,12323,12323); 
INSERT INTO Appliances VALUES(23231,19867,18881,14341,10932,54123,12342,12342,12342); 
INSERT INTO Appliances VALUES(11223,45421,90213,32412,32675,45451,23421,23421,23421); 



-- 10.	Consumption //Analysis
CREATE TABLE Consumption(cons_category_id integer, units_consumed_heavy integer(3), units_consumed_medium integer(3), units_consumed_low integer(3), CONSTRAINT PK_EC PRIMARY KEY(cons_category_id));

INSERT INTO Consumption VALUES(86490,102,48,89);
INSERT INTO Consumption VALUES(20320,4441,123,250); 
INSERT INTO Consumption VALUES(30333,2221,212,250); 
INSERT INTO Consumption VALUES(23434,1231,120,250); 
INSERT INTO Consumption VALUES(55785,7676,671,250); 
INSERT INTO Consumption VALUES(20321,2345,567,250); 



-- 11.	Payment_details //Transaction
CREATE TABLE Payment_details(transaction_id varchar(10), pay_amt float, pay_status varchar(10), pay_date date, pay_time timestamp, CONSTRAINT PK_Payment PRIMARY KEY(transaction_id));

INSERT INTO Payment_details VALUES("642583257212",4791,"Successfull",'2022-01-21','2021-01-20 23:30:23'); 
INSERT INTO Payment_details VALUES("569225387797" ,4326, "Successfull", '02 Nov 21','2021-11-02 14:48:33'); 
INSERT INTO Payment_details VALUES("936810891522" ,4326, "Failed", '09 Nov 21','2021-09-02 14:48:33'); 
INSERT INTO Payment_details VALUES( "159320833161", 4873,"Successfull",  '18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Payment_details VALUES( "640961225729", 7931 ,"Successfull", '13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Payment_details VALUES( "481215591710", 7931 ,"Failed", '13 Feb 21','2021-08-23 12:56:45'); 
INSERT INTO Payment_details VALUES( "629331870828" ,6080, "Successfull",'09 Dec 21','2021-12-09 11:13:56'); 
INSERT INTO Payment_details VALUES( "954297254243" ,7347 ,"Successfull",'01 Oct 21','2021-10-01 17:00:45'); 
INSERT INTO Payment_details VALUES( "446864205641" ,7347 ,"Failed",'30 Oct 21','2021-10-01 17:00:45'); 



-- 12.	Bill_details //BILLS
CREATE TABLE Bill_details(bill_no varchar(10), user_id integer(6), transaction_id integer(10), bill_amt float, bill_area integer, issue_month varchar(9), issue_date date,due_date date,discon_date date, CONSTRAINT PK_billDet PRIMARY KEY(bill_no, user_id), FOREIGN key(bill_no) REFERENCES Billing(bill_no), FOREIGN key(user_id) REFERENCES customer_details(user_id), FOREIGN KEY(transaction_id) REFERENCES Payment_details(transaction_id));


INSERT INTO Bill_details VALUES('642581757212',1234, 642583757212, 4791, 231348 ,'Jan', '2022-02-02', '2022-02-02', '2022-02-02'); 
INSERT INTO Bill_details VALUES('569225387797',1234, 569225387797, 4326, 611273 ,'Nov', '02 Nov 21', '02 Feb 21', '02 Feb 21'); 
INSERT INTO Bill_details VALUES('159320833161',1234, 159320833161, 4873, 893958 ,'Jan', '18 Jan 21', '18 Mar 21', '18 Mar 21'); 
INSERT INTO Bill_details VALUES('640961225729',1234, 640961225729, 7931, 388011 ,'Feb', '13 Feb 21', '13 Apr 21', '13 Apr 21'); 
INSERT INTO Bill_details VALUES('629331870828',1234, 629331870828, 6080, 818357 ,'Dec', '09 Dec 21', '09 May 21', '09 May 21'); 
INSERT INTO Bill_details VALUES('954297254243',1234, 954297254243, 7347, 813010 ,'Oct', '01 Oct 21', '01 Jun 21', '01 Jun 21'); 
INSERT INTO Bill_details VALUES('936810891522',1234, 936810891522, 7347, 813010 ,'Oct', '01 Oct 21', '01 Jul 21', '01 Jul 21'); 
INSERT INTO Bill_details VALUES('481215591710',1234, 481215591710, 7347, 813010 ,'Oct', '01 Oct 21', '01 Aug 21', '01 Aug 21'); 
INSERT INTO Bill_details VALUES('446864205641',1234, 446864205641, 7347, 813010 ,'Oct', '01 Oct 21', '01 Sep 21', '01 Sep 21');


-- 13.	Feedback
CREATE TABLE Feedback(fb_id integer(3), user_id integer(6),fb_desc varchar(50), fb_date date, fb_time timestamp, Constraint PK_Feedback PRIMARY KEY(fb_id, user_id), FOREIGN KEY(user_id) REFERENCES customer_details(user_id)); 

INSERT INTO Feedback VALUES(127 , 202208, 'It was a really good user friendly website, made the paymenet process esier','20 Jan 21','2021-01-20 23:30:23'); 
INSERT INTO Feedback VALUES(929 , 902348, 'Had a problem with payment process','2021-11-02','2021-11-02 14:48:33'); 
INSERT INTO Feedback VALUES(244 , 333444, 'Payment was pretty smooth','18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Feedback VALUES(743 , 612903, 'Auto renewal not working','13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Feedback VALUES(192 , 809080, 'It is good','09 Dec 21','2021-12-09 11:13:56'); 
INSERT INTO Feedback VALUES(632 , 809280, 'Auto renewal option is really helpful','01 Oct 21','2021-10-01 17:00:45'); 



-- 

-- Bill_details-bill_no,user_id
--  Consumption-cons_category_id
--  Appliances-cons_appl_id

