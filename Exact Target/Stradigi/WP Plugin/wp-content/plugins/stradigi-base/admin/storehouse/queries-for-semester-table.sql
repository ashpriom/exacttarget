## Query to obtain a list of existing semesters ##

SELECT semester_id, semester_name_en, semester_name_fr, start_date, end_date FROM syn1_syn_semester;


## Query to obtain details on an individual semester - this example uses semester_id = 1  ###

SELECT semester_name_en, semester_name_fr, start_date, end_date FROM syn1_syn_semester WHERE semester_id = 1;


## Query to add a new semester - this example adds a Fall 2105 semester  ##

INSERT INTO syn1_syn_semester (semester_name_en, semester_name_fr, start_date, end_date) VALUES ("Fall 2015", "Automne 2015", "2015-09-26", "2015-12-14");


## Query to edit an existing semester - this example edits semester_id = 2 and changes the start and end dates ##

UPDATE syn1_syn_semester SET start_date = "2015-09-27", end_date = "2015-12-17"  WHERE semester_id = 2;


## Query to delete a semester entry - this example deletes the entry with a semester_id of 2 ###

DELETE FROM syn1_syn_semester WHERE semester_id = 2;


