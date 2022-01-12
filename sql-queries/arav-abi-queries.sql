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

insert into user_details values(231105,'Abi','Arav','10 Jan 21','9023488904','abi.ofcl@example.com','abi123');
insert into user_details values(766090,'Landon ','Morris','12 Feb 20','9023488904','landon.morris@example.com','homeboy');
insert into user_details values(504044,'Gladys ','Morris','10 Jan 21','1232333444','gladys.morris@example.com','drpepper');
insert into user_details values(872022,'Lonnie','Hopkins','22 Aug 20','6129038904','lonnie.hopkins@example.com','justus');
insert into user_details values(772902,'Yvonne','Garrett','31 Dec 20','8090808904','yvonne.garrett@example.com','mustang6');

-- 2.	customer_details
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER(1), postal_code integer(6), account_no varchar(16), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);

INSERT INTO customer_details VALUES(202208, 1, '679543','6052501403744375','parag','22 jan 24');
INSERT INTO customer_details VALUES(902348, 1, '537341','9759007875959620','adithya','15 feb 23');
INSERT INTO customer_details VALUES(333444, 1, '479001','7503589801761989 ','amir','02 jan 25');
INSERT INTO customer_details VALUES(612903, 0, '432098','3057171446652151 ','oscar','29 jul 26');
INSERT INTO customer_details VALUES(809080, 0, '324561','8417146815012068 ','william','20 jun 23');



CREATE TABLE customer_details(user_id varchar(6), auto_renewal INTEGER(1), postal_code integer(6), account_no varchar(16), card_holder_name varchar(20), expiry_date date, service_no integer(3), CONSTRAINT PK_cust PRIMARY KEY(user_id));

INSERT INTO customer_details VALUES('pat228', 1, 679543,'6052501403744375','Pat','2024-01-22',   599);
INSERT INTO customer_details VALUES('lan348', 1, 537341,'9759007875959620','Landon','2023-02-15',600);
INSERT INTO customer_details VALUES('gla343', 1, 479001,'7503589801761989','Gladys','2025-01-02',110);
INSERT INTO customer_details VALUES('lon612', 0, 432098,'3057171446652151','Lonnie','2026-07-29',230);
INSERT INTO customer_details VALUES('yvo809', 0, 324561,'8417146815012068','Yvonne','2023-06-20',560);






-- 3.	Admin_details
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));

-- CREATE TABLE Admin_details(admin_id varchar(6), user_id varchar(6), admin_control_area varchar(15), CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
insert into Admin_details values(231105,202208,560024); 
insert into Admin_details values(766090,902348,560024);
insert into Admin_details values(504044,333444,560024);
insert into Admin_details values(872022,612903,231102); 
insert into Admin_details values(772902,809080,231102); 
select*from Admin_details;

-- 4.	Address
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

insert into Address values(679543,'bangalore','karnataka');
insert into Address values(537341,'chennai','tamilnadu');
insert into Address values(479001,'dehli','haryana');
insert into Address values(432098,'mumbai','maharashtra');
insert into Address values(324561,'hyderabad','andrapradesh');

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

INSERT INTO Energy_charge VALUES(222, 1.5,'Domestic LT-1',220);
INSERT INTO Energy_charge VALUES(262, 1.5,'Domestic LT-1',145);
INSERT INTO Energy_charge VALUES(939, 1.5,'Domestic LT-2',823);
INSERT INTO Energy_charge VALUES(738, 1.5,'Domestic LT-1',923);
INSERT INTO Energy_charge VALUES(278, 1.5,'Domestic LT-1',1043);

-- 8.	other_charge //BILLS
CREATE TABLE other_charge(oc_id integer AUTO_INCREMENT, Duty float, GST float, fixed_charges float, total_other_charges float CONSTRAINT PK_EC PRIMARY KEY(oc_id));
INSERT INTO other_charge VALUES(222,'1212','5656','8988',153);
INSERT INTO other_charge VALUES(262,'1122','3908','7771',133);
INSERT INTO other_charge VALUES(939,'1200','5096','8966',164);
INSERT INTO other_charge VALUES(738,'3213','2000','1090',136);
INSERT INTO other_charge VALUES(278,'1012','7878','2134',184);




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
CREATE TABLE Payment_details(transaction_id integer(10), pay_amt float, pay_status varchar(10), pay_date date, pay_time timestamp, CONSTRAINT PK_Payment PRIMARY KEY(transaction_id));

INSERT INTO Payment_details VALUES(642583257212,4791,'Successfull',   '2021-02-12','2021-01-20 23:30:23'); 
INSERT INTO Payment_details VALUES(569225387797,4326, 'Successfull',  '2021-03-12','2021-11-02 14:48:33'); 
INSERT INTO Payment_details VALUES(936810891522,4326, 'Successfull',  '2021-04-12','2021-09-02 14:48:33'); 
INSERT INTO Payment_details VALUES( 159320833161, 4873,'Successfull', '2021-05-12','2021-01-18 06:46:34'); 
INSERT INTO Payment_details VALUES( 640961225729, 7931 ,'Successfull','2021-06-12','2021-02-13 12:56:45'); 
INSERT INTO Payment_details VALUES( 481215591710, 7931 ,'Successfull','2021-07-12','2021-08-23 12:56:45'); 
INSERT INTO Payment_details VALUES( 629331870828 ,6080, 'Successfull','2021-08-12','2021-12-09 11:13:56'); 
INSERT INTO Payment_details VALUES( 954297254243 ,7347 ,'Successfull','2021-09-12','2021-10-01 17:00:45'); 
INSERT INTO Payment_details VALUES( 446864205641 ,7347 ,'Successfull','2021-10-12','2021-10-01 17:00:45');
INSERT INTO Payment_details VALUES( 546864205641 ,7347 ,'Successfull','2021-11-12','2021-10-01 17:00:45');
INSERT INTO Payment_details VALUES( 646864205641 ,7347 ,'Successfull','2021-12-12','2021-10-01 17:00:45');
INSERT INTO Payment_details VALUES( 746864205641 ,7347 ,'Successfull','2022-01-12','2021-10-01 17:00:45');

-- 12.	Bill_details //BILLS
CREATE TABLE Bill_details(bill_no varchar(10), user_id integer(6), transaction_id integer(10), bill_amt float, bill_area integer, issue_month varchar(9), issue_date date,due_date date,discon_date date, CONSTRAINT PK_billDet PRIMARY KEY(bill_no, user_id), FOREIGN key(bill_no) REFERENCES Billing(bill_no), FOREIGN key(user_id) REFERENCES customer_details(user_id), FOREIGN KEY(transaction_id) REFERENCES Payment_details(transaction_id));


INSERT INTO Bill_details VALUES('642581757212',1234, 642583757212, 479, 231348 , 'Feb', '2021-02-12', '2021-02-17', '2021-02-22'); 
INSERT INTO Bill_details VALUES('569225387797',1234, 569225387797, 432, 611273 , 'Mar', '2021-03-12', '2021-03-17', '2021-03-22'); 
INSERT INTO Bill_details VALUES('159320833161',1234, 159320833161, 487, 893958 , 'Apr', '2021-04-12', '2021-04-17', '2021-04-22'); 
INSERT INTO Bill_details VALUES('640961225729',1234, 640961225729, 793, 388011 , 'May', '2021-05-12', '2021-05-17', '2021-05-22'); 
INSERT INTO Bill_details VALUES('629331870828',1234, 629331870828, 608, 818357 , 'Jun', '2021-06-12', '2021-06-17', '2021-06-22'); 
INSERT INTO Bill_details VALUES('954297254243',1234, 954297254243, 734, 813010 , 'Jul', '2021-07-12', '2021-07-17', '2021-07-22'); 
INSERT INTO Bill_details VALUES('936810891522',1234, 936810891522, 967, 813010 , 'Aug', '2021-08-12', '2021-08-17', '2021-08-22'); 
INSERT INTO Bill_details VALUES('481215591710',1234, 481215591710, 858, 813010 , 'Sep', '2021-09-12', '2021-09-17', '2021-09-22');
INSERT INTO Bill_details VALUES('446864205641',1234, 446864205641, 568, 813010 , 'Oct', '2021-10-12', '2021-10-17', '2021-10-22');
INSERT INTO Bill_details VALUES('546864205641',1234, 546864205641, 856, 813010 , 'Nov', '2021-11-12', '2021-11-17', '2021-11-22');
INSERT INTO Bill_details VALUES('646864205641',1234, 646864205641, 967, 813010 , 'Dec', '2021-12-12', '2021-12-17', '2021-12-22');
INSERT INTO Bill_details VALUES('746864205641',1234, 746864205641, 856, 813010 , 'Jan', '2022-01-12', '2021-12-17', '2021-12-22');



-- 13.	Feedback
CREATE TABLE Feedback(fb_id integer(3), user_id integer(6),fb_desc varchar(50), fb_date date, fb_time timestamp, Constraint PK_Feedback PRIMARY KEY(fb_id, user_id), FOREIGN KEY(user_id) REFERENCES customer_details(user_id)); 

<<<<<<< Updated upstream
INSERT INTO Feedback VALUES(127 ,136117 , "It was a really good user friendly website, made the paymenet process esier",'20 Jan 21','2021-01-20 23:30:23'); 
INSERT INTO Feedback VALUES(929 ,777811 ,"Had a problem with payment process",'02 Nov 21','2021-11-02 14:48:33'); 
INSERT INTO Feedback VALUES(244 ,442557 , "Payment was pretty smooth",'18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Feedback VALUES(743 ,992199 , "Auto renewal not working",'13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Feedback VALUES(192 ,367615 , "It is good",'09 Dec 21','2021-12-09 11:13:56'); 
INSERT INTO Feedback VALUES(632 ,644021 , "Auto renewal option is really helpful",'01 Oct 21','2021-10-01 17:00:45'); 
=======
INSERT INTO Feedback VALUES(127 ,136117 , "It was a really good user friendly website, made the paymenet process esier",'2021-02-17','2021-01-20 23:30:23'); 
INSERT INTO Feedback VALUES(929 ,777811 ,"Had a problem with payment process",'2021-01-23','2021-11-02 14:48:33'); 
INSERT INTO Feedback VALUES(244 ,442557 , "Payment was pretty smooth",'2021-11-12','2021-01-18 06:46:34'); 
INSERT INTO Feedback VALUES(743 ,992199 , "Auto renewal not working",'2021-12-22','2021-02-13 12:56:45'); 
INSERT INTO Feedback VALUES(192 ,367615 , "It is good",'2021-02-17','2021-09-09 11:13:56'); 
INSERT INTO Feedback VALUES(632 ,644021 , "Auto renewal option is really helpful",'2021-05-13','2021-10-01 17:00:45'); 
>>>>>>> Stashed changes



-- 

-- Bill_details-bill_no,user_id
--  Consumption-cons_category_id
--  Appliances-cons_appl_id
paid
SELECT * FROM `bill_details` WHERE issue_date < CURRENT_DATE();(>=)

current
$store = SELECT MONTH(CURRENT_DATE()) as bs;
check with ==>select SELECT MONTH(issue_date) FROM bill_details;
prev month(-1)
SELECT * FROM `bill_details` WHERE issue_date < CURRENT_DATE();


