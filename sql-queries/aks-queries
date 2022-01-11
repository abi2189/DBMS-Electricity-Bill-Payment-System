-- 1.	user_details
CREATE TABLE user_details(user_id integer(6) AUTO_INCREMENT, first_name varchar(30), last_name varchar(30), DOB date, phone_no integer(10), email_id varchar(30), passw varchar(20), CONSTRAINT PK_Customer PRIMARY KEY(user_id, phone_no), CHECK (user_id >= 100000);
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER, postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

INSERT INTO user_details(first_name, last_name, DOB, phone_no, email_id, passw) VALUES('Aravind', 'Suresh', '20 Jan 22',)
INSERT INTO user_details(first_name, last_name, DOB, phone_no, email_id, passw) VALUES('Aravind', 'Suresh', '20 Jan 22',)

-- 2.	customer_details
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER, postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);

-- 3.	Admin_details
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));

-- 4.	Address
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

-- 5.	service_details
CREATE TABLE service_details(service_no integer(6), pincode integer, CONSTRAINT PK_ser PRIMARY KEY(service_no), FOREIGN key(pincode) REFERENCES Address(pincode));
-- 6.	Billing
CREATE TABLE Billing(bill_no varchar(10) AUTO_INCREMENT, cons_category_id integer AUTO_INCREMENT, cons_appl_id integer AUTO_INCREMENT, ec_id integer AUTO_INCREMENT, oc_id  integer AUTO_INCREMENT, units_consumed_cycle integer, FOREIGN key(ec_id) REFERENCES Energy_charge(ec_id), FOREIGN key(oc_id) REFERENCES other_charge(oc_id),
FOREIGN key(cons_appl_id) REFERENCES Appliances(cons_appl_id),
);

-- 7.	Energy_charge
CREATE TABLE Energy_charge(ec_id integer AUTO_INCREMENT , energy_charge_per_unit float, tariff_slab varchar(10), total_energy_charges float, CONSTRAINT PK_EC PRIMARY KEY(ec_id));

-- 8.	other_charge
CREATE TABLE other_charge(oc_id integer AUTO_INCREMENT, Duty float, GST float, fixed_charges float, total_other_charges float CONSTRAINT PK_EC PRIMARY KEY(oc_id));

-- 9.	Appliances
CREATE TABLE Appliances(cons_appl_id integer AUTO_INCREMENT, office integer, laundry integer, Heating_Cooling integer, lights integer, kitchen integer, misc integer, tools integer CONSTRAINT PK_EC PRIMARY KEY(cons_appl_id));

INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 


-- 10.	Consumption
CREATE TABLE Consumption(cons_category_id integer AUTO_INCREMENT, units_consumed_heavy integer, units_consumed_medium integer, units_consumed_low integer CONSTRAINT PK_EC PRIMARY KEY(cons_category_id));

INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES( ); 



-- 11.	Payment_details
CREATE TABLE Payment_details(transaction_id varchar(10), pay_amt float, pay_status varchar(10), pay_date date, pay_time timestamp, CONSTRAINT PK_Payment PRIMARY KEY(transaction_id));

INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES("642583757212 ",4791,"Paid",'20 Jan 21','2021-01-20 23:30:23'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES("569225387797" ,4326, "UnPaid", '02 Nov 21','2021-11-02 14:48:33'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "159320833161 ", 4873,"Paid",  '18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "640961225729", 7931 ,"Paid", '13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "629331870828" ,6080, "UnPaid",'09 Dec 21','2021-12-09 11:13:56'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "954297254243 " ,7347 ,"Paid",'01 Oct 21','2021-10-01 17:00:45'); 



-- 12.	Bill_details
CREATE TABLE Bill_details(bill_no varchar(10), user_id integer(6), transaction_id integer(10), bill_amt float, bill_area integer, issue_month varchar(9), issue_date date, CONSTRAINT PK_billDet PRIMARY KEY(bill_no, user_id), FOREIGN key(bill_no) REFERENCES Billing(bill_no), FOREIGN key(user_id) REFERENCES customer_details(user_id), FOREIGN KEY(transaction_id) REFERENCES Payment_details(transaction_id));


INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES("642583757212 " ,4791 ,231348 ,"Jan" ,'20 Jan 21' ); 
INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES( "569225387797" ,4326,611273 ,"Nov", '02 Nov 21' ); 
INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES( "159320833161 ",4873  ,893958 ,"Jan" ,  '18 Jan 21'); 
INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES("640961225729" , 7931,388011 , "Feb", '13 Feb 21' ); 
INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES( "629331870828" ,6080,818357 ,"Dec"  ,'09 Dec 21'); 
INSERT INTO Bill_details( transaction_id , bill_amt  , bill_area, issue_month, issue_date) VALUES("954297254243 " ,7347  ,813010 ,"Oct" ,'01 Oct 21'); 





-- 13.	Feedback
CREATE TABLE Feedback(fb_id integer AUTO_INCREMENT, user_id integer(6),fb_desc varchar(50), fb_date date, fb_time timestamp, Constraint PK_Feedback PRIMARY KEY(fb_id, user_id), FOREIGN KEY(user_id) REFERENCES customer_details(user_id)); 

INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES(136117 , "It was a really good user friendly website, made the paymenet process esier",'20 Jan 21','2021-01-20 23:30:23'); 
INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES( 777811 ,"Had a problem with payment process",'02 Nov 21','2021-11-02 14:48:33'); 
INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES(442557 , "Payment was pretty smooth",'18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES(992199 , "Auto renewal not working",'13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES(367615 , "It is good",'09 Dec 21','2021-12-09 11:13:56'); 
INSERT INTO Feedback(user_id , fb_desc , fb_date  , fb_time) VALUES(644021 , "Auto renewal option is really helpful",'01 Oct 21','2021-10-01 17:00:45'); 



-- 

Bill_details-bill_no,user_id
 Consumption-cons_category_id
 Appliances-cons_appl_id

