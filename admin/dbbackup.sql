DROP TABLE IF EXISTS acadamic_calender;

CREATE TABLE `acadamic_calender` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `semister` varchar(500) NOT NULL,
  `dates` varchar(1000) NOT NULL,
  `activities` varchar(1000) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

INSERT INTO acadamic_calender VALUES("1","Semister one","Nehasie 22/2004 E.C-Meskerem 27/2014 E.C	\n	\n","-Registration for Senior Distance  Students\n\n-Application Dates  for New Distance Students	\n	\n");
INSERT INTO acadamic_calender VALUES("2","Semister one","Meskerem 29/2014 E.C - Tikimt 04/2014 E.C	\n	\n","-Late Registration with Penalty  for Distance Students	\n	\n");
INSERT INTO acadamic_calender VALUES("3","Semister one","Tikimt 05/2014 E.C	\n	\n","-Entrance Exam for New Applicant Students	\n	\n");
INSERT INTO acadamic_calender VALUES("4","Semister one","Tikimt 13-16/2014 E.C	\n	\n","-Registration for New Applicant Students who Passed Entrance Examination	\n	\n");
INSERT INTO acadamic_calender VALUES("5","Semister one","Hidar 15-17/2014 E.C	\n	\n","-First Round Tutorial Class for all Distance Students	\n	\n");
INSERT INTO acadamic_calender VALUES("6","Semister one","Tahissas 13-15/2014 E.C	\n	\n","-Second Round Tutorial Class for all Distance Students\n\n-Last Date for Make-up and Re sit Application	\n	\n");
INSERT INTO acadamic_calender VALUES("7","Semister one","Tirr 23-27/2014 E.C	\n	\n","-Exam Program for all Distance Students\n\n-Last Date for Submission of Seminar, Project and Senior Essay	\n	\n");
INSERT INTO acadamic_calender VALUES("8","Semister one","Yekatit 17/2014 E.C	\n	\n","-Last Date of Submitting First Semester Grades on SIMS	\n	\n");
INSERT INTO acadamic_calender VALUES("9","Semister Two","Yekatit 15 - 30/2014 E.C	\n	\n","-Registration for Senior Distance  Students\n\n-2ND Round  Makeup Registration	\n	\n");
INSERT INTO acadamic_calender VALUES("10","Semister Two","Megabit 01 - 04/2014 E.C	\n	\n","-Late Registration with Penalty  for Distance Students	\n	\n");
INSERT INTO acadamic_calender VALUES("11","Semister Two","Megabit 10-14	\n	\n","-Registration slip submission period(Including makeup registration)to the Registrar	\n	\n");
INSERT INTO acadamic_calender VALUES("12","Semister Two","Megabit 21 - 23/2014 E.C	\n	\n","-First Round Tutorial Class for all Distance Students	\n	\n");
INSERT INTO acadamic_calender VALUES("13","Semister Two","Megabit 24 & 25/2014 E.C	\n	\n","-Make up examination Period for all distance students	\n	\n");
INSERT INTO acadamic_calender VALUES("14","Semister Two","Miazia 19-21/2014 E.C	\n	\n","-Second Round Tutorial Class for all Distance Student	\n	\n");
INSERT INTO acadamic_calender VALUES("15","Semister Two","Sene 30-Hamlie 04/2014 E.C	\n	\n","-Exam Program for all Distance Students\n\n-Last Date for Submission of Seminar, Project and Senior Essay	\n	\n");
INSERT INTO acadamic_calender VALUES("16","Semister Two","Hamlie 30/2014 E.C	\n	\n","-Last Date of Submitting second Semester Grades on SIMS	\n	\n");


DROP TABLE IF EXISTS account;

CREATE TABLE `account` (
  `UID` varchar(20) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `Password` varchar(2000) DEFAULT NULL,
  `Role` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`),
  FULLTEXT KEY `UserName` (`UserName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO account VALUES("admn001","admin","$2y$10$3eYV2ppKalociM3JkiYLeeR0XcTzFhU65.8hKj9GAsAxDNTirrKpC","administrator","yes");
INSERT INTO account VALUES("CDEO","cde","$2y$10$RFJHcv3QrI51.38QUI4uGupVow43Oawh/ooVdfNMc6OthwV8JluMW","cdeofficer","yes");
INSERT INTO account VALUES("CDFB","cdfb","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","collage_dean","yes");
INSERT INTO account VALUES("DHA","dha","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","department_head","yes");
INSERT INTO account VALUES("DHL","dhl","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","department_head","yes");
INSERT INTO account VALUES("FIN","fin","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","financestaff","yes");
INSERT INTO account VALUES("INSTA","insta","$2y$10$tMIfL6LibnH.nE1KCJUjEudu1sUqU8/KyCMJ.s3BWE8Q5ZcJXzR2q","instructor","yes");
INSERT INTO account VALUES("INSTL","instl","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","instructor","yes");
INSERT INTO account VALUES("R1","reg","r40tXLqSv9m/peVnAhDM+o7JSqE0qbz7S04PNk3qTi4=","registrar","yes");
INSERT INTO account VALUES("stud","stud","$2y$10$H4yjz8bsrrxYrbSCcYsnvujE14wvboVtdjKtg/1MZXIho4ipi5c72","student","yes");


DROP TABLE IF EXISTS assign_instructor;

CREATE TABLE `assign_instructor` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `corse_code` varchar(50) NOT NULL,
  `cname` varchar(100) NOT NULL,
  `chour` int(11) NOT NULL,
  `uid` varchar(23) NOT NULL,
  `Iname` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `section` varchar(10) NOT NULL,
  `Student_class_year` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `ayear` int(11) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `uid` (`uid`),
  KEY `uid_2` (`uid`),
  FULLTEXT KEY `corse_code` (`corse_code`),
  CONSTRAINT `fgfgr` FOREIGN KEY (`uid`) REFERENCES `user` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=latin1;

INSERT INTO assign_instructor VALUES("43","a11","php","3","INSTA","abebe  aschalew","Accounting","A","1st","I","2014");
INSERT INTO assign_instructor VALUES("44","a12","java","3","INSTA","abebe  aschalew","Accounting","A","1st","I","2014");


DROP TABLE IF EXISTS assignment;

CREATE TABLE `assignment` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `U_ID` varchar(20) NOT NULL,
  `asno` varchar(50) NOT NULL,
  `assignment_value` varchar(20) NOT NULL,
  `ccode` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `department` varchar(100) NOT NULL,
  `Student_class_year` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `Submission_date` date NOT NULL,
  `fileName` varchar(5000) NOT NULL,
  `tmpName` varchar(5000) NOT NULL,
  `fileSize` varchar(5000) NOT NULL,
  `fileType` varchar(5000) NOT NULL,
  `status` varchar(20) NOT NULL,
  `unread` varchar(10) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `U_ID` (`U_ID`),
  CONSTRAINT `oioiio` FOREIGN KEY (`U_ID`) REFERENCES `user` (`UID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

INSERT INTO assignment VALUES("26","INSTA","1","20","a11","php","Accounting","1st","I","2022-05-31","Assignment one.docx","C:wamp	mpphp2BE6.tmp","25133","application/vnd.openxmlformats-officedocument.wordprocessingml.document","inst","no");
INSERT INTO assignment VALUES("27","INSTA","2","15","a12","java","Accounting","1st","I","2022-07-06","Web based Distance Education management system.pdf","C:xampp	mpphpB3A8.tmp","2273179","application/pdf","inst","no");
INSERT INTO assignment VALUES("28","INSTA","2","15","a12","java","Accounting","1st","I","2022-07-06","Web based Distance Education management system.pdf","C:xampp	mpphpB3A8.tmp","2273179","application/pdf","inst","no");


DROP TABLE IF EXISTS attempt;

CREATE TABLE `attempt` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

INSERT INTO attempt VALUES("49");
INSERT INTO attempt VALUES("50");


DROP TABLE IF EXISTS collage;

CREATE TABLE `collage` (
  `Ccode` varchar(20) NOT NULL,
  `CName` varchar(50) DEFAULT NULL,
  `Location` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Ccode`),
  UNIQUE KEY `CName` (`CName`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO collage VALUES("CS001","ComputerScience","JIT");
INSERT INTO collage VALUES("fbcollage001","fbcollage","B22");
INSERT INTO collage VALUES("lawcollage001","lawcollage","B23");


DROP TABLE IF EXISTS course;

CREATE TABLE `course` (
  `Sender_name` varchar(20) NOT NULL,
  `course_code` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `chour` int(11) NOT NULL,
  `s_c_year` varchar(10) NOT NULL,
  `semister` varchar(10) NOT NULL,
  `ayear` int(11) NOT NULL,
  `department` varchar(50) NOT NULL,
  `other_department_takes` varchar(50) NOT NULL,
  `FileName` varchar(500) NOT NULL,
  `status` varchar(50) NOT NULL,
  `unread` varchar(10) NOT NULL,
  PRIMARY KEY (`course_code`),
  UNIQUE KEY `cname` (`cname`),
  KEY `department` (`department`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO course VALUES("INSTA","a11","php","3","2nd, ","II","2014","Accounting","Economics, ","Chapter 7.docx","yes","no");
INSERT INTO course VALUES("INSTA","a12","java","3","1st, ","I","2014","Accounting","Accounting, ","FM chapter 1handout - Copy.docx","yes","no");
INSERT INTO course VALUES("","cs","introductionComputer","5","","","0","law","","","","");


DROP TABLE IF EXISTS course_result;

CREATE TABLE `course_result` (
  `no` int(200) NOT NULL AUTO_INCREMENT,
  `S_ID` varchar(50) NOT NULL,
  `uid` varchar(20) NOT NULL,
  `C_Code` varchar(50) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `year` varchar(50) NOT NULL,
  `semister` varchar(50) NOT NULL,
  `section` varchar(50) NOT NULL,
  `Assignment` int(11) NOT NULL,
  `Final` int(11) NOT NULL,
  `Total` int(11) NOT NULL,
  `Grade` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `reject` varchar(50) NOT NULL,
  `send_to` varchar(20) NOT NULL,
  `status2` varchar(20) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `C_Code` (`C_Code`),
  KEY `uid` (`uid`),
  KEY `S_ID` (`S_ID`),
  CONSTRAINT `kk` FOREIGN KEY (`uid`) REFERENCES `user` (`UID`),
  CONSTRAINT `sdffd` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`),
  CONSTRAINT `xx` FOREIGN KEY (`C_Code`) REFERENCES `course` (`course_code`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS department;

CREATE TABLE `department` (
  `Dcode` varchar(20) NOT NULL DEFAULT '',
  `DName` varchar(50) NOT NULL,
  `Location` varchar(20) DEFAULT NULL,
  `Ccode` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`Dcode`),
  UNIQUE KEY `DName` (`DName`),
  KEY `Ccode` (`Ccode`),
  KEY `Ccode_2` (`Ccode`),
  CONSTRAINT `department_ibfk_1` FOREIGN KEY (`Ccode`) REFERENCES `collage` (`Ccode`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO department VALUES("accounting001","Accounting","B23","fbcollage001");
INSERT INTO department VALUES("economics001","Economics","B23","fbcollage001");
INSERT INTO department VALUES("law001","law","B22","lawcollage001");
INSERT INTO department VALUES("mngt001","Managament","B22","fbcollage001");


DROP TABLE IF EXISTS entrance_exam;

CREATE TABLE `entrance_exam` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `S_ID` varchar(50) NOT NULL,
  `result` int(11) NOT NULL,
  `year` varchar(20) NOT NULL,
  `status` varchar(50) NOT NULL,
  `account` varchar(50) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `S_ID` (`S_ID`),
  CONSTRAINT `hghgh` FOREIGN KEY (`S_ID`) REFERENCES `student` (`S_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS feed_back;

CREATE TABLE `feed_back` (
  `fbid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(20) NOT NULL,
  `role` varchar(30) DEFAULT NULL,
  `Comment` varchar(10000) NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`fbid`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS grade;

CREATE TABLE `grade` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `sid` varchar(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `year` varchar(20) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `section` varchar(20) NOT NULL,
  `stcrh` double NOT NULL,
  `stgpoint` double NOT NULL,
  `sgpa` double NOT NULL,
  `ptcrh` double NOT NULL,
  `ptgpoint` int(11) NOT NULL,
  `pgpa` double NOT NULL,
  `ncgpa` double NOT NULL,
  `status` varchar(30) NOT NULL,
  `checking` varchar(20) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `sid` (`sid`),
  KEY `sid_2` (`sid`),
  CONSTRAINT `fgg` FOREIGN KEY (`sid`) REFERENCES `student` (`S_ID`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS logfile;

CREATE TABLE `logfile` (
  `logid` int(100) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) NOT NULL,
  `role` varchar(40) NOT NULL,
  `status` varchar(40) NOT NULL,
  `start_time` varchar(40) NOT NULL,
  `activity_type` varchar(100) NOT NULL,
  `activity_performed` varchar(10000) NOT NULL,
  `date` date NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `end` varchar(40) NOT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=219 DEFAULT CHARSET=latin1;

INSERT INTO logfile VALUES("218","Admin","system admin","yes","01 Jul 2022 @ 15:12:28","add user","uid[stud12] name[Dagim] father name[Birhanu] sex[male] user id[stud12] phone[+251945803770] ","2022-07-01","127.0.0.1","");


DROP TABLE IF EXISTS message;

CREATE TABLE `message` (
  `M_ID` int(20) NOT NULL AUTO_INCREMENT,
  `M_sender` varchar(30) NOT NULL,
  `M_reciever` varchar(40) NOT NULL,
  `message` varchar(200) NOT NULL,
  `date_sended` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`M_ID`)
) ENGINE=InnoDB AUTO_INCREMENT=59 DEFAULT CHARSET=latin1;

INSERT INTO message VALUES("57","FIN","abebe    aschalew","Well come To finance and take payement for Preparing Module worked time","2022-05-28 14:12:36","no");
INSERT INTO message VALUES("58","FIN","INSTA","Well come To finance and take payement for Preparing Module worked time","2022-05-28 14:21:44","no");


DROP TABLE IF EXISTS module_schedule;

CREATE TABLE `module_schedule` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `information` mediumtext NOT NULL,
  `postedby` varchar(50) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

INSERT INTO module_schedule VALUES("4","	\n\nJimma University\nContinuing &Distance Education Coordinating Directorate\nEmployment contract For Module Preparation\n(Be filled in four copies)\nDepartment of the Instructors (s): _______________________________\nCourse Title which the module is prepared for: ___________________\nCourse code: __________________________________\nCredit Hour of the Course: ______________________________________\nHere by the contract agreement is made between the Office of the Continuing &Distance Education coordinating directorate here after (the employer) and _________________________\nHere after (the employee(s) to properly write, edit and submit course module according to the following contract agreement. \nThe Employee’s Agreement \nTo prepare the course module \nTo write the course module \nTo edit the module \nTo finally submit the module up to          /2014 E.C. \nThe Employer’s Agreement \nThe office makes the payments for Module Preparation __________________________ (________________________________________________________________________) birr; Module editing ___________ (___________________________________________________) birr and Writing/typing ____________ (____________________________________________________)birr, and of total _______ (____________________________________________________) birr in one installment up on the successful completion of your task, as per the standard of module set by the university, per page with the rate of 120.00 (seventy) birr for module preparation; 15.00 (seven) birr for module editing and 5.00 (three) birr for typing, when approval and acceptance of your work is assured by the concerned Collage dean. The total page number of the module is _______ pages. \n(see below the pages limit)\nIt should be noted that the office shall not make any payment for reasons the module preparation is interrupted or is not completed, and the University takes actions on the employee as per its rules and regulations.\nEmployee                                                                Department Head \nSignature: _______________________                        _________________________\nName: __________________________                         _________________________\nDate: ___________________________                         _________________________\nCollege Dean                                                         CDEP Director   \nSignature: ______________________                        _________________________\nName: __________________________                        _________________________\nDate: ___________________________                        ________________________ \nNote:- Number of pages\nFor 1 credit hour minimum 50 and maximum 60 \nFor 2 credit hour minimum 80 and maximum 90 \nFor 3 credit hour minimum 110 and maximum 120 \nFor 4 credit hour minimum 140 and maximum 150 \n	\n	\n	\n","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;");


DROP TABLE IF EXISTS payment_table;

CREATE TABLE `payment_table` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `UID` varchar(20) NOT NULL,
  `c_code` varchar(20) NOT NULL,
  `Instructors_Name` varchar(50) NOT NULL,
  `Course_Code` varchar(50) NOT NULL,
  `No_of_Sections` int(11) NOT NULL,
  `No_of_Assignment_Marked` int(11) NOT NULL,
  `No_of_Exams_Marked` int(11) NOT NULL,
  `Rank` varchar(50) NOT NULL,
  `CrHr` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `Year` varchar(50) NOT NULL,
  `Section` varchar(50) NOT NULL,
  `No_of_hours_she_he_gave_tutorial` int(11) NOT NULL,
  `No_of_Exams_prepared` int(11) NOT NULL,
  `No_of_pages_prepared` int(50) NOT NULL,
  `Payment_per` int(11) NOT NULL,
  `Payment_Per_Assignment` int(11) NOT NULL,
  `Total_Payment_for_Exams` int(11) NOT NULL,
  `Total_Payment_for_Assignments` int(11) NOT NULL,
  `Total_Payment` int(11) NOT NULL,
  `unread` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `payment` varchar(20) NOT NULL,
  `type` varchar(20) NOT NULL,
  PRIMARY KEY (`no`),
  KEY `UID` (`UID`),
  CONSTRAINT `id` FOREIGN KEY (`UID`) REFERENCES `user` (`UID`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

INSERT INTO payment_table VALUES("40","CDEO","","abebe    aschalew","A111    php","0","0","0","","3","","","","0","0","50","5","0","0","0","250","yes","yes","check","module");
INSERT INTO payment_table VALUES("41","DHA","fbcollage001","dffd","php","0","0","30","dgree","3","Accounting","I","","0","0","0","23","0","0","0","690","yes","yes","check","mexam");
INSERT INTO payment_table VALUES("42","DHA","fbcollage001","dffd","php","0","30","0","dgree","3","Accounting","I","","0","0","0","0","0","0","0","0","yes","no","","massignment");
INSERT INTO payment_table VALUES("43","DHA","fbcollage001","INSTA","php","0","0","0","degree","3","Accounting","I","A","20","0","0","50","0","0","0","1000","yes","no","","tutorial");
INSERT INTO payment_table VALUES("44","DHA","fbcollage001","INSTA","php","0","0","50","degree","3","Accounting","I","","0","0","0","0","0","0","0","0","no","","","mexam");
INSERT INTO payment_table VALUES("45","DHA","fbcollage001","INSTA","java","0","0","0","degree","3","","","","0","100","0","10","0","0","0","1000","yes","yes","check","pexam");
INSERT INTO payment_table VALUES("46","CDEO","","abebe    aschalew","a12    java","0","0","0","","3","","","","0","0","100","2","0","0","0","200","yes","yes","checked","module");
INSERT INTO payment_table VALUES("47","CDEO","","INSTA","a11    php","0","0","0","","3","","","","0","0","100","4","0","0","0","400","yes","yes","checked","module");


DROP TABLE IF EXISTS postss;

CREATE TABLE `postss` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `Title` varchar(100) NOT NULL,
  `types` varchar(5000) NOT NULL,
  `dates` date NOT NULL,
  `Ex_date` date NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `info` mediumtext NOT NULL,
  `posted_by` varchar(500) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

INSERT INTO postss VALUES("1","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-03-07","2018-05-30","0000-00-00","0000-00-00","&#4704;&#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722; &#4704;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611; &#4877;&#4709;&#4653; &#4704;&#4632;&#4635;&#4653; &#4619;&#4845; &#4843;&#4621;&#4733;&#4609; &#4720;&#4635;&#4650;&#4814;&#4733; &#4840;&#4634;&#4776;&#4720;&#4617;&#4725;&#4757; &#4873;&#4851;&#4846;&#4733; &#4725;&#4777;&#4648;&#4725; &#4656;&#4901;&#4723;&#4733;&#4609; &#4720;&#4877;&#4707;&#4651;&#4810; &#4773;&#4757;&#4853;&#4723;&#4848;&#4653;&#4873; &#4773;&#4755;&#4659;&#4661;&#4707;&#4616;&#4757;&#4961;&#4961; -&#4840;&#4782;&#4653;&#4661; &#4768;&#4659;&#4845;&#4632;&#4757;&#4726;&#4733;&#4757; &#4704;&#4840;&#4782;&#4653;&#4662;&#4733; &#4722;&#4726;&#4650;&#4843;&#4621; &#4616;&#4634;&#4656;&#4903;&#4733;&#4609; &#4632;&#4637;&#4613;&#4651;&#4757; &#4635;&#4661;&#4648;&#4776;&#4709; -&#4629;&#4757;&#4931; &#4673;&#4901;&#4653; 042 &#4706;&#4654; &#4673;&#4901;&#4653; 02 &#4808;&#4845;&#4637; 04 &#4704;&#4632;&#4612;&#4853; &#4776;&#4652;&#4869;&#4661;&#4725;&#4651;&#4653; &#4632;&#4723;&#4808;&#4674;&#4843; &#4632;&#4809;&#4656;&#4853; -&#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4840;&#4634;&#4656;&#4896;&#4809; &#4776;&#4840;&#4779;&#4722;&#4725; 16-18/2010 &#4819;.&#4637; &#4661;&#4616;&#4614;&#4752; &#4840;&#4779;&#4722;&#4725; 16/2010 &#4819;.&#4637; &#4776;&#4896;&#4811;&#4721;2:00 &#4704;&#4840;&#4637;&#4725;&#4632;&#4848;&#4705;&#4707;&#4728;&#4809; &#4840;&#4632;&#4936;&#4720;&#4763; &#4781;&#4941;&#4622;&#4733; &#4704;&#4632;&#4872;&#4760;&#4725; &#4632;&#4936;&#4720;&#4757; &#4635;&#4659;&#4656;&#4709;&#4843;&#4961; &#4632;&#4723;&#4814;&#4674;&#4843; &#4843;&#4621;&#4843;&#4824; &#4635;&#4752;&#4763;&#4809;&#4637; &#4720;&#4635;&#4650; &#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4632;&#4936;&#4720;&#4757; &#4768;&#4845;&#4733;&#4621;&#4637;","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","");
INSERT INTO postss VALUES("2","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-03-07","2018-05-31","0000-00-00","0000-00-00","&#4704;2014 &#4819;/&#4637; &#4704;&#4875; &#4616;&#4634;&#4656;&#4897; &#4782;&#4653;&#4662;&#4733; (&#4850;&#4661;&#4723;&#4757;&#4661; &#4782;&#4653;&#4662;&#4733;) &#4840;&#4609;&#4616;&#4720;&#4763; &#4825;&#4653; &#4637;&#4829;&#4872;&#4707; &#4776;&#4613;&#4851;&#4653; 24 &#4773;&#4661;&#4776; &#4723;&#4613;&#4659;&#4661; 27 &#4672;&#4757; 2010 &#4819;/&#4637; &#4707;&#4617;&#4725; &#4840;&#4661;&#4651; &#4672;&#4755;&#4725; &#4845;&#4779;&#4612;&#4851;&#4621;&#4961;&#4961; &#4661;&#4616;&#4614;&#4752;&#4637; &#4704;&#4632;&#4864;&#4632;&#4650;&#4843;&#4813; &#4825;&#4653; &#4637;&#4829;&#4872;&#4707; &#4843;&#4619;&#4779;&#4612;&#4851;&#4733;&#4609; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4720;&#4896;&#4672;&#4657;&#4725; &#4672;&#4755;&#4725; &#4773;&#4757;&#4853;&#4725;&#4632;&#4824;&#4872;&#4705; &#4773;&#4843;&#4659;&#4656;&#4709;&#4757;","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","");
INSERT INTO postss VALUES("3","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-05-13","2018-04-30","2018-05-13","2018-05-15","\n\n&#4840; 2014 &#4819;/&#4637; &#4840;&#4725;&#4637;&#4725; &#4824;&#4632;&#4757; &#4609;&#4616;&#4720;&#4763;&#4809; &#4808;&#4656;&#4752; &#4725;&#4637;/&#4725; &#4637;&#4829;&#4872;&#4707; &#4840;&#4634;&#4779;&#4612;&#4848;&#4809; &#4704; 26/09/2014 &#4819;/&#4637; &#4773;&#4755; &#4704;27/09/2014 &#4819;/&#4637; &#4632;&#4614;&#4753;&#4757; &#4773;&#4843;&#4659;&#4808;&#4677;&#4757; &#4704;&#4720;&#4896;&#4672;&#4657;&#4725; &#4672;&#4755;&#4725; &#4773;&#4757;&#4853;&#4725;&#4632;&#4824;&#4872;&#4705; &#4704;&#4901;&#4709;&#4677; &#4773;&#4755;&#4659;&#4661;&#4707;&#4616;&#4757;&#4961;&#4961;\n	\n			\n	\n","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","register");
INSERT INTO postss VALUES("4","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-05-13","2018-04-30","2018-05-01","2018-05-05","	\n	\n&#4704;&#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722; &#4704;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611; &#4877;&#4709;&#4653; &#4704;&#4632;&#4635;&#4653; &#4619;&#4845; &#4843;&#4621;&#4733;&#4609; &#4720;&#4635;&#4650;&#4814;&#4733; &#4840;&#4634;&#4776;&#4720;&#4617;&#4725;&#4757; &#4873;&#4851;&#4846;&#4733; &#4725;&#4777;&#4648;&#4725; &#4656;&#4901;&#4723;&#4733;&#4609; &#4720;&#4877;&#4707;&#4651;&#4810; &#4773;&#4757;&#4853;&#4723;&#4848;&#4653;&#4873; &#4773;&#4755;&#4659;&#4661;&#4707;&#4616;&#4757;&#4961;&#4961; -&#4840;&#4782;&#4653;&#4661; &#4768;&#4659;&#4845;&#4632;&#4757;&#4726;&#4733;&#4757; &#4704;&#4840;&#4782;&#4653;&#4662;&#4733; &#4722;&#4726;&#4650;&#4843;&#4621; &#4616;&#4634;&#4656;&#4903;&#4733;&#4609; &#4632;&#4637;&#4613;&#4651;&#4757; &#4635;&#4661;&#4648;&#4776;&#4709; -&#4629;&#4757;&#4931; &#4673;&#4901;&#4653; 042 &#4706;&#4654; &#4673;&#4901;&#4653; 02 &#4808;&#4845;&#4637; 04 &#4704;&#4632;&#4612;&#4853; &#4776;&#4652;&#4869;&#4661;&#4725;&#4651;&#4653; &#4632;&#4723;&#4808;&#4674;&#4843; &#4632;&#4809;&#4656;&#4853; -&#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4840;&#4634;&#4656;&#4896;&#4809; &#4776;&#4840;&#4779;&#4722;&#4725; 16-18/2010 &#4819;.&#4637; &#4661;&#4616;&#4614;&#4752; &#4840;&#4779;&#4722;&#4725; 16/2010 &#4819;.&#4637; &#4776;&#4896;&#4811;&#4721;2:00 &#4704;&#4840;&#4637;&#4725;&#4632;&#4848;&#4705;&#4707;&#4728;&#4809; &#4840;&#4632;&#4936;&#4720;&#4763; &#4781;&#4941;&#4622;&#4733; &#4704;&#4632;&#4872;&#4760;&#4725; &#4632;&#4936;&#4720;&#4757; &#4635;&#4659;&#4656;&#4709;&#4843;&#4961; &#4632;&#4723;&#4814;&#4674;&#4843; &#4843;&#4621;&#4843;&#4824; &#4635;&#4752;&#4763;&#4809;&#4637; &#4720;&#4635;&#4650; &#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4632;&#4936;&#4720;&#4757; &#4768;&#4845;&#4733;&#4621;&#4637;	\n		\n	\n","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","apply");
INSERT INTO postss VALUES("12","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-05-29","2018-05-27","0000-00-00","0000-00-00","	\n\nhhghgfhghhggghhg&#4704;&#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722; &#4704;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611; &#4877;&#4709;&#4653; &#4704;&#4632;&#4635;&#4653; &#4619;&#4845; &#4843;&#4621;&#4733;&#4609; &#4720;&#4635;&#4650;&#4814;&#4733; &#4840;&#4634;&#4776;&#4720;&#4617;&#4725;&#4757; &#4873;&#4851;&#4846;&#4733; &#4725;&#4777;&#4648;&#4725; &#4656;&#4901;&#4723;&#4733;&#4609; &#4720;&#4877;&#4707;&#4651;&#4810; &#4773;&#4757;&#4853;&#4723;&#4848;&#4653;&#4873; &#4773;&#4755;&#4659;&#4661;&#4707;&#4616;&#4757;&#4961;&#4961; -&#4840;&#4782;&#4653;&#4661; &#4768;&#4659;&#4845;&#4632;&#4757;&#4726;&#4733;&#4757; &#4704;&#4840;&#4782;&#4653;&#4662;&#4733; &#4722;&#4726;&#4650;&#4843;&#4621; &#4616;&#4634;&#4656;&#4903;&#4733;&#4609; &#4632;&#4637;&#4613;&#4651;&#4757; &#4635;&#4661;&#4648;&#4776;&#4709; -&#4629;&#4757;&#4931; &#4673;&#4901;&#4653; 042 &#4706;&#4654; &#4673;&#4901;&#4653; 02 &#4808;&#4845;&#4637; 04 &#4704;&#4632;&#4612;&#4853; &#4776;&#4652;&#4869;&#4661;&#4725;&#4651;&#4653; &#4632;&#4723;&#4808;&#4674;&#4843; &#4632;&#4809;&#4656;&#4853; -&#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4840;&#4634;&#4656;&#4896;&#4809; &#4776;&#4840;&#4779;&#4722;&#4725; 16-18/2010 &#4819;.&#4637; &#4661;&#4616;&#4614;&#4752; &#4840;&#4779;&#4722;&#4725; 16/2010 &#4819;.&#4637; &#4776;&#4896;&#4811;&#4721;2:00 &#4704;&#4840;&#4637;&#4725;&#4632;&#4848;&#4705;&#4707;&#4728;&#4809; &#4840;&#4632;&#4936;&#4720;&#4763; &#4781;&#4941;&#4622;&#4733; &#4704;&#4632;&#4872;&#4760;&#4725; &#4632;&#4936;&#4720;&#4757; &#4635;&#4659;&#4656;&#4709;&#4843;&#4961; &#4632;&#4723;&#4814;&#4674;&#4843; &#4843;&#4621;&#4843;&#4824; &#4635;&#4752;&#4763;&#4809;&#4637; &#4720;&#4635;&#4650; &#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4632;&#4936;&#4720;&#4757; &#4768;&#4845;&#4733;&#4621;&#4637;&#4961;&#4961;\n	\n	\n","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","");
INSERT INTO postss VALUES("13","&#4635;&#4661;&#4723;&#4808;&#4674;&#4843;","&#4616;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611;-&#4877;&#4709;&#4653; &#4720;&#4635;&#4650;&#4814;&#4733; &#4704;&#4633;&#4617;","2018-05-29","2018-05-31","0000-00-00","0000-00-00","	\n\nhhghgfhghhggghhg&#4704;&#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722; &#4704;&#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4632;&#4653;&#4611; &#4877;&#4709;&#4653; &#4704;&#4632;&#4635;&#4653; &#4619;&#4845; &#4843;&#4621;&#4733;&#4609; &#4720;&#4635;&#4650;&#4814;&#4733; &#4840;&#4634;&#4776;&#4720;&#4617;&#4725;&#4757; &#4873;&#4851;&#4846;&#4733; &#4725;&#4777;&#4648;&#4725; &#4656;&#4901;&#4723;&#4733;&#4609; &#4720;&#4877;&#4707;&#4651;&#4810; &#4773;&#4757;&#4853;&#4723;&#4848;&#4653;&#4873; &#4773;&#4755;&#4659;&#4661;&#4707;&#4616;&#4757;&#4961;&#4961; -&#4840;&#4782;&#4653;&#4661; &#4768;&#4659;&#4845;&#4632;&#4757;&#4726;&#4733;&#4757; &#4704;&#4840;&#4782;&#4653;&#4662;&#4733; &#4722;&#4726;&#4650;&#4843;&#4621; &#4616;&#4634;&#4656;&#4903;&#4733;&#4609; &#4632;&#4637;&#4613;&#4651;&#4757; &#4635;&#4661;&#4648;&#4776;&#4709; -&#4629;&#4757;&#4931; &#4673;&#4901;&#4653; 042 &#4706;&#4654; &#4673;&#4901;&#4653; 02 &#4808;&#4845;&#4637; 04 &#4704;&#4632;&#4612;&#4853; &#4776;&#4652;&#4869;&#4661;&#4725;&#4651;&#4653; &#4632;&#4723;&#4808;&#4674;&#4843; &#4632;&#4809;&#4656;&#4853; -&#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4840;&#4634;&#4656;&#4896;&#4809; &#4776;&#4840;&#4779;&#4722;&#4725; 16-18/2010 &#4819;.&#4637; &#4661;&#4616;&#4614;&#4752; &#4840;&#4779;&#4722;&#4725; 16/2010 &#4819;.&#4637; &#4776;&#4896;&#4811;&#4721;2:00 &#4704;&#4840;&#4637;&#4725;&#4632;&#4848;&#4705;&#4707;&#4728;&#4809; &#4840;&#4632;&#4936;&#4720;&#4763; &#4781;&#4941;&#4622;&#4733; &#4704;&#4632;&#4872;&#4760;&#4725; &#4632;&#4936;&#4720;&#4757; &#4635;&#4659;&#4656;&#4709;&#4843;&#4961; &#4632;&#4723;&#4814;&#4674;&#4843; &#4843;&#4621;&#4843;&#4824; &#4635;&#4752;&#4763;&#4809;&#4637; &#4720;&#4635;&#4650; &#4635;&#4896;&#4675;&#4616;&#4843; &#4936;&#4720;&#4755; &#4632;&#4936;&#4720;&#4757; &#4768;&#4845;&#4733;&#4621;&#4637;&#4961;&#4961;\n	\n	\n","&#4720;&#4776;&#4723;&#4723;&#4845;&#4755; &#4653;&#4672;&#4725; &#4725;&#4637;&#4613;&#4653;&#4725; &#4635;&#4661;&#4720;&#4707;&#4704;&#4650;&#4843; &#4851;&#4845;&#4652;&#4781;&#4726;&#4652;&#4725; &#4848;&#4709;&#4648; &#4635;&#4653;&#4678;&#4661; &#4841;&#4754;&#4712;&#4653;&#4661;&#4722;","");


DROP TABLE IF EXISTS rejected_stud;

CREATE TABLE `rejected_stud` (
  `no` int(11) NOT NULL AUTO_INCREMENT,
  `S_ID` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL DEFAULT 'no',
  `mname` varchar(20) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_No` int(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `year` varchar(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `program` varchar(100) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Education_level` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `unread` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;



DROP TABLE IF EXISTS student;

CREATE TABLE `student` (
  `S_ID` varchar(50) NOT NULL,
  `FName` varchar(50) NOT NULL DEFAULT 'no',
  `mname` varchar(20) NOT NULL,
  `LName` varchar(50) NOT NULL,
  `Sex` varchar(20) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_No` int(100) NOT NULL,
  `College` varchar(100) NOT NULL,
  `Department` varchar(100) NOT NULL,
  `year` varchar(11) NOT NULL,
  `section` varchar(20) NOT NULL,
  `semister` varchar(20) NOT NULL,
  `program` varchar(100) NOT NULL,
  `Location` varchar(50) NOT NULL,
  `Education_level` varchar(50) NOT NULL,
  `Date` varchar(50) NOT NULL,
  `unread` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`S_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO student VALUES("stud","dagi","Birhanu","lelisa","m","dagilelisa19@gmail.com","945803770","fbaccounting","Accounting","1st","A","I","Distance and continuing","jimma","Degree","","yes","yes");
INSERT INTO student VALUES("stud1","Feleke","Getachew","H/mariam","M","fele@gmail.com","934567890","Economics","Economics","2nd","A","II","Distance","jimma","Degree","7/9/1022","yes","yes");
INSERT INTO student VALUES("stus12","dani","Abe","nega","m","dani@gmail.com","987654321","fbaccounting","economics","2","A","1","distance and continunig","jimma","degree","7/9/1022","yes","yes");


DROP TABLE IF EXISTS user;

CREATE TABLE `user` (
  `UID` varchar(20) NOT NULL,
  `fname` varchar(30) DEFAULT NULL,
  `lname` varchar(30) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `Email` varchar(50) DEFAULT NULL,
  `phone_No` int(11) DEFAULT NULL,
  `location` varchar(20) DEFAULT NULL,
  `photo` varchar(3000) NOT NULL,
  `d_code` varchar(20) DEFAULT NULL,
  `c_code` varchar(20) NOT NULL,
  PRIMARY KEY (`UID`),
  UNIQUE KEY `UID` (`UID`),
  KEY `Dcode` (`d_code`),
  KEY `c_code` (`c_code`),
  CONSTRAINT `aa` FOREIGN KEY (`d_code`) REFERENCES `department` (`Dcode`) ON DELETE SET NULL ON UPDATE SET NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO user VALUES("admn001","abebe","alemu","male","abebe@gmail.com","2147483647","B29","userphoto/a.jpg","","");
INSERT INTO user VALUES("CDEO","worku","alemu","male","cde@gmail.com","2147483647","B709","userphoto/w.jpg","","");
INSERT INTO user VALUES("CDFB","abebe","alemu","male","coll@gmail.com","2147483647","B709","userphoto/im.png","","fbcollage001");
INSERT INTO user VALUES("DHA","worku","aschalew","male","w@gmail.com","2147483647","B709","userphoto/a.jfif","accounting001","fbcollage001");
INSERT INTO user VALUES("DHL","worku","alemu","male","gh@gmail.com","2147483647","B709","userphoto/ab.jpg","law001","lawcollage001");
INSERT INTO user VALUES("FIN","worku","alemu","male","fin@gmail.com","2147483647","B709","userphoto/w.jpg","","");
INSERT INTO user VALUES("INSTA","abebe","aschalew","male","abb@gmail.com","2147483647","B709","userphoto/ab.jpg","accounting001","fbcollage001");
INSERT INTO user VALUES("INSTL","abebe","alemu","male","inst@gmail.com","2147483647","B709","userphoto/a.jpg","law001","lawcollage001");
INSERT INTO user VALUES("R1","abebe","alemu","male","ab@gmail.com","2147483647","B709","userphoto/a.jpg","","");
INSERT INTO user VALUES("stud","Dani","Abe","male","dani@gmail.com","2147483647","jimma","userphoto/a.jfif","","");
INSERT INTO user VALUES("VIC","worku","aschalew","male","vice@gmail.com","2147483647","B709","userphoto/ab.jpg","","");


