CREATE TABLE NOTES ( note_id INTEGER NOT NULL, speaker_id INTEGER NOT NULL, session_id INTEGER NOT NULL, talk_length varchar(30));

CREATE TABLE SPEAKERS (
    speaker_id INTEGER NOT NULL,
    speaker_name varchar(30),
    note_id INTEGER NOT NULL,
    PRIMARY KEY (speaker_id),
    FOREIGN KEY (note_id) REFERENCES NOTES(note_id)
);

CREATE TABLE SESSIONSS (
session_id INTEGER NOT NULL,
    speaker_id INTEGER NOT NULL,
    note_id INTEGER NOT NULL,
    session_name varchar(30) NOT NULL,
    PRIMARY KEY (session_id),
    FOREIGN KEY (note_id) REFERENCES NOTES(note_id),
    FOREIGN KEY (speaker_id) REFERENCES SPEAKERS(speaker_),
);