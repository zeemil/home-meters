use home_meters;
INSERT into locations (id, street, zip, city, note) values 
(1,'rue du Gazomètre 34','6061','Montignies-sur-Sambre', null);


insert into meters(id,ean_code, location_id, type_id, note) values
(1,'541449020706144924', 1,2,'électricité jour'),
(2,'541449020706144924', 1,3, 'électricité nuit'),
(3,'541449020706144931', 1,4, 'gaz');

/* électricité jour */
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,4533,0,'2024-05-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,4434,0,'2024-04-24');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,4243,0,'2024-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,4160,0,'2024-03-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3990,0,'2024-02-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3916,0,'2024-01-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3869,0,'2024-01-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,4635,0,'2024-06-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3841,1,'2024-01-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3751,0,'2023-12-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3727,0,'2023-11-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3710,0,'2023-11-21');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3668,0,'2023-11-08');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3647,0,'2023-11-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3585,0,'2023-10-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3521,0,'2023-10-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3477,0,'2023-09-19');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3426,0,'2023-09-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3356,0,'2023-08-12');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3326,0,'2023-07-03');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3265,0,'2023-06-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3204,0,'2023-05-28');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3175,0,'2023-05-20');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3128,0,'2023-05-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3099,0,'2023-05-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3063,0,'2023-04-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,3024,0,'2023-04-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2996,0,'2023-04-06');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2975,0,'2023-03-31');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2931,0,'2023-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2905,0,'2023-03-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2885,0,'2023-03-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2864,0,'2023-02-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2855,0,'2023-02-22');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2824,0,'2023-02-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2811,0,'2023-02-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2727,0,'2023-01-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,1,2727,1,'2023-01-01');

/* électricité nuit */
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,4192,0,'2024-06-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,4125,0,'2024-05-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,4009,0,'2024-04-24');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3834,0,'2024-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3729,0,'2024-03-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3583,0,'2024-02-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3496,0,'2024-01-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3454,0,'2024-01-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3429,1,'2024-01-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3338,0,'2023-12-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3292,0,'2023-11-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3266,0,'2023-11-21');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3204,0,'2023-11-08');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3179,0,'2023-11-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3115,0,'2023-10-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3067,0,'2023-10-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,3017,0,'2023-09-19');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2972,0,'2023-09-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2899,0,'2023-08-12');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2863,0,'2023-07-03');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2793,0,'2023-06-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2732,0,'2023-05-28');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2704,0,'2023-05-20');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2663,0,'2023-05-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2637,0,'2023-05-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2614,0,'2023-04-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2563,0,'2023-04-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2538,0,'2023-04-06');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2510,0,'2023-03-31');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2470,0,'2023-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2441,0,'2023-03-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2412,0,'2023-03-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2403,0,'2023-02-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2389,0,'2023-02-22');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2365,0,'2023-02-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2348,0,'2023-02-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2266,0,'2023-01-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,2265,1,'2023-01-01');

/* gaz */

insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,26132,0,'2024-06-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,26092,0,'2024-05-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,26041,0,'2024-04-24');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25867,0,'2024-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25778,0,'2024-03-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25573,0,'2024-02-01');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25456,0,'2024-01-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25346,0,'2024-01-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25165,1,'2023-12-07');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25133,0,'2023-12-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25051,0,'2023-11-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,25014,0,'2023-11-21');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24930,0,'2023-11-08');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24891,0,'2023-11-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24829,0,'2023-10-18');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24805,0,'2023-10-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24797,0,'2023-09-19');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24788,0,'2023-09-04');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24772,0,'2023-08-12');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24772,0,'2023-07-03');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24759,0,'2023-06-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24747,0,'2023-05-28');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24738,0,'2023-05-20');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24706,0,'2023-05-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24684,0,'2023-04-25');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24629,0,'2023-04-13');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24595,0,'2023-04-06');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24553,0,'2023-03-31');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24495,0,'2023-03-17');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24451,0,'2023-03-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24388,0,'2023-03-02');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24350,0,'2023-02-26');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24320,0,'2023-02-22');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24273,0,'2023-02-14');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,24242,0,'2023-02-10');
insert into readings (unit_id, meter_id, value, isOfficial, created_at) values(1,2,23968,1,'2023-01-01');
