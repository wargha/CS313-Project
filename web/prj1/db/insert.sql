-- INSERT SOME TEST USERS
INSERT INTO
       APP_USER (
              name,
              email,
              pw
       )
VALUES
       (
              'Lucas Wargha',
              'lucaswargha@Hotmail.com',
              '123456'
       );

INSERT INTO
       APP_USER (
              name,
              email,
              pw
       )
VALUES
       (
              'Sarah Wargha',
              'sarahwargha@Hotmail.com',
              '123456'
       );

INSERT INTO
       APP_USER (
              name,
              email,
              pw
       )
VALUES
       (
              'Nelson Wargha',
              'nwargha@Hotmail.com',
              '123456'
       );

-- INSERT SOME TEST ALLERGIES
INSERT INTO
       ALLERGY (name)
VALUES
       ('dairy');

INSERT INTO
       ALLERGY (name)
VALUES
       ('soy');

INSERT INTO
       ALLERGY (name)
VALUES
       ('peanuts');

-- INSERT SOME TEST COMBINED ALLERGIES WITH USER
INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (1, 1);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (1, 2);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (1, 3);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (2, 1);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (2, 2);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (2, 3);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (3, 1);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (3, 2);

INSERT INTO
       USER_ALLERGY (
              user_id,
              allergy_id
       )
VALUES
       (3, 3);