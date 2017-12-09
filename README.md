# CS3380Fall17FinalProject
## CS3380 Semester Final Project

### Group Members:
1. Anand Kulkarni
2. Nick Duncan
3. John Conrad

### Description of Application
This is a Dungeons and Dragons Character Sheet Application. It allows users to log in, create, and save character sheet data for a role playing board game. With this app, users keep their character sheets stored in our online database, and they can access them from anywhere. Never lose a character sheet again!

### Schema for the Database
#### Database 1 = Characters
Table is named "data". Columns in that are "char_race", "char_strength", "char_defense", "char_agility", and "char_dexterity".
#### Database 2 = loginsystem
Table is called "users". Columbs in that are "user_id", "user_first", "user_last", "user_email", and "user_pwd".

#### Entity Relationship Diagram
![alt text](http://ec2-54-174-89-40.compute-1.amazonaws.com/Tables.png)

### CRUD Implementation
Creation of database data done in our "characterSheet.php" and "characterSheetInclude.php" documents. Stats are stored in variables laid out in these documents and sent to the database with reformatted SQL code. Reading data is done in "logininclude.php" where the code checks the username and password fields to see if there is a match. If there is a match, the user is logged in. We felt it pertinent with each of these areas to include SQL Injection Attack prevention code.

### Video Demo
Follow the link to our YouTube demonstration: https://youtu.be/APGnI7e_wIM
