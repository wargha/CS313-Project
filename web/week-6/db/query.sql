SELECT
    e.event_id,
    e.participant_id,
    p.name,
    ev.name
FROM
    EVENT_PARTICIPANT e
    JOIN PARTICIPANT p ON p.id = e.participant_id
    JOIN EVENT ev ON ev.id = e.participant_id
ORDER BY
    p.name;