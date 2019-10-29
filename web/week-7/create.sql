CREATE TABLE EVENT 
(
    id       SERIAL             NOT NULL PRIMARY KEY,
    location VARCHAR(255) NOT NULL,
    name     VARCHAR(200),
    date     DATE
);

CREATE TABLE PARTICIPANT 
(
    id serial NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL
);

CREATE TABLE EVENT_PARTICIPANT
(
    id serial PRIMARY KEY NOT NULL,
    event_id INT NOT NULL REFERENCES EVENT(ID),
    participant_id INT NOT NULL REFERENCES PARTICIPANT(ID)

)

SELECT e.event_id, e.participant_id, p.name, ev.name
        FROM EVENT_PARTICIPANT e
        JOIN PARTICIPANT p
        ON p.id = e.participant_id
        JOIN EVENT ev 
        ON ev.id = e.participant_id;
