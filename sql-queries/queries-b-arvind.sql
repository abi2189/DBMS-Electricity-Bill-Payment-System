-- 1.	user_details
CREATE TABLE user_details(user_id integer(6) AUTO_INCREMENT, first_name varchar(30), last_name varchar(30), DOB date, phone_no integer(10), email_id varchar(30), passw varchar(20), CONSTRAINT PK_Customer PRIMARY KEY(user_id, phone_no), CHECK (user_id >= 100000);
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER, postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
CREATE TABLE Address(pincode integer, city varchar(20), state varchar(20), CONSTRAINT PK_Address PRIMARY KEY(pincode));

INSERT INTO user_details(first_name, last_name, DOB, phone_no, email_id, passw) VALUES('Aravind', 'Suresh', '20 Jan 22', 11111111111,'lol', '200')
INSERT INTO user_details(first_name, last_name, DOB, phone_no, email_id, passw) VALUES('Aravind', 'Suresh', '20 Jan 22',)

-- 2.	customer_details
CREATE TABLE customer_details(user_id integer(6), auto_renewal INTEGER(6), postal_code integer(6), account_no varchar(18), card_holder_name varchar(20), expiry_date date, CONSTRAINT PK_cust PRIMARY KEY(user_id);

INSERT INTO customer_details VALUES('675343', '12435', '679543','icici9981365427765','parag','22 jan 24');
INSERT INTO customer_details VALUES('333221', '909876', '537341','hdfc23998136154776','adithya','15 feb 23');
INSERT INTO customer_details VALUES('124390', '789012', '479001','cub12345098764512','amir','02 jan 25');
INSERT INTO customer_details VALUES('115098', '876098', '432098','canara56789012342','oscar','29 jul 26');
INSERT INTO customer_details VALUES('333222', '089765', '324561','indian76543209123','william','20 jun 23');
-- 3.	Admin_details
CREATE TABLE Admin_details(admin_id integer(6), user_id integer(6), admin_control_area INTEGER, CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));

CREATE TABLE Admin_details(admin_id varchar(6), user_id varchar(6), admin_control_area varchar(15), CONSTRAINT PK_Admin PRIMARY KEY(admin_id, user_id));
insert into Admin_details values('300011','xyz011','dehli'); 
insert into Admin_details values('766090','abc090','karnataka');
insert into Admin_details values('504044','qrs044','tamilnadu');
insert into Admin_details values('872022','lmn022','mumbai'); 
insert into Admin_details values('772902','lmn022','mumbai'); 
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



INSERT INTO service_details VALUES('234516','600632');
INSERT INTO service_details VALUES('089543','456732');
INSERT INTO service_details VALUES('780523','462735');
INSERT INTO service_details VALUES('246890','713908');
INSERT INTO service_details VALUES('546890','586213');

-- 6.	Billing
CREATE TABLE Billing(bill_no varchar(10) AUTO_INCREMENT, cons_category_id integer AUTO_INCREMENT, cons_appl_id integer AUTO_INCREMENT, ec_id integer AUTO_INCREMENT, oc_id  integer AUTO_INCREMENT, units_consumed_cycle integer(5), FOREIGN key(ec_id) REFERENCES Energy_charge(ec_id), FOREIGN key(oc_id) REFERENCES other_charge(oc_id),
FOREIGN key(cons_appl_id) REFERENCES Appliances(cons_appl_id),
);

INSERT INTO Billing(units_consumed_cycle) VALUES('1200');
INSERT INTO Billing(units_consumed_cycle) VALUES('1650');
INSERT INTO Billing(units_consumed_cycle) VALUES('2100');
INSERT INTO Billing(units_consumed_cycle) VALUES('970');
INSERT INTO Billing(units_consumed_cycle) VALUES('2250');
-- 7.	Energy_charge
CREATE TABLE Energy_charge(ec_id integer AUTO_INCREMENT , energy_charge_per_unit float, tariff_slab varchar(10), total_energy_charges float, CONSTRAINT PK_EC PRIMARY KEY(ec_id));

INSERT INTO Energy_charge(energy_charge_per_unit , tariff_slab , total_energy_charges) VALUES('1200','2342','4366');
INSERT INTO Energy_charge(energy_charge_per_unit , tariff_slab , total_energy_charges)) VALUES('2200','3442','2340');
INSERT INTO Energy_charge(energy_charge_per_unit , tariff_slab , total_energy_charges) VALUES('3200','4442','2531');
INSERT INTO Energy_charge(energy_charge_per_unit , tariff_slab , total_energy_charges) VALUES('1908','2341','1234');
INSERT INTO Energy_charge(energy_charge_per_unit , tariff_slab , total_energy_charges) VALUES('4312','1231','3421');

-- 8.	other_charge
CREATE TABLE Energy_charge(ec_id integer AUTO_INCREMENT , energy_charge_per_unit float, tariff_slab varchar(10), total_energy_charges float, CONSTRAINT PK_EC PRIMARY KEY(ec_id));





-- 9.	Appliances
CREATE TABLE Appliances(cons_appl_id integer AUTO_INCREMENT, office integer(5), laundry integer(5), Heating_Cooling integer(5), lights integer(5), kitchen integer(5), misc integer(5), tools integer(5) CONSTRAINT PK_EC PRIMARY KEY(cons_appl_id));

INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES('23545','23423','32423','32435','23455','12300','23131'); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES('24313','23413','23211','22111','11231','22113','11223'); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES('11233','34521','334421','23232''13132','45321','12323'); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES('23231','19867','18881','14341','10932','54123','12342'); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES('11223','45421','90213','32412','32675','45451','23421'); 
INSERT INTO Appliances( office , laundry  , Heating_Cooling, lights, kitchen, misc, tools) VALUES( ); 


-- 10.	Consumption
CREATE TABLE Consumption(cons_category_id integer AUTO_INCREMENT, units_consumed_heavy integer(5), units_consumed_medium integer(4), units_consumed_low integer(3) CONSTRAINT PK_EC PRIMARY KEY(cons_category_id));

INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('10400','2341','300'); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('20320','4441','123'); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('30333','2221','212'); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('23434','1231','120'); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('55785','7676','671'); 
INSERT INTO Consumption( units_consumed_heavy , units_consumed_medium  , units_consumed_low) VALUES('20321','2345','567'); 



-- 11.	Payment_details
CREATE TABLE Payment_details(transaction_id varchar(10), pay_amt float, pay_status varchar(10), pay_date date, pay_time timestamp, CONSTRAINT PK_Payment PRIMARY KEY(transaction_id));

INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES("642583757212 ",4791,"Paid",'20 Jan 21','2021-01-20 23:30:23'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES("569225387797" ,4326, "Paid", '02 Nov 21','2021-11-02 14:48:33'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "159320833161 ", 4873,"Paid",  '18 Jan 21','2021-01-18 06:46:34'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "640961225729", 7931 ,"Paid", '13 Feb 21','2021-02-13 12:56:45'); 
INSERT INTO Payment_details( transaction_id , pay_amt  , pay_status, pay_date, pay_time) VALUES( "629331870828" ,6080, "Paid",'09 Dec 21','2021-12-09 11:13:56'); 
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

-- Bill_details-bill_no,user_id
--  Consumption-cons_category_id
--  Appliances-cons_appl_id

