## Query to obtain list of existing Classrooms ###

SELECT classroom_id, classroom_capacity, classroom_name_en, classroom_name_fr FROM syn1_syn_classroom;


## Query to obtain details of an individual classroom (use classroom_id, this example uses an ID of "1" ###

SELECT classroom_id, classroom_capacity, classroom_name_en, classroom_name_fr FROM syn1_syn_classroom WHERE classroom_id = 1;


## Query to add a new classroom - This example adds a class named "New Class" ("Nouvreau Classe" in French) with a capacity of 10 ###

INSERT INTO syn1_syn_classroom (classroom_capacity, classroom_name_en, classroom_name_fr) VALUES (10,"New Class","Nouveau Classe");


## Query to modify an existing class - This example modifies the class with classroom_id of 4 to change the capacity to 12  ###

UPDATE syn1_syn_classroom SET classroom_capacity = 12 WHERE classroom_id = 4;


## Query to delete a classroom entry - this example deletes the entry with a classroom_id of 4 ###

DELETE FROM syn1_syn_classroom WHERE classroom_id = 4;
