-- Select allergies from one user
SELECT
    u.id,
    u.name,
    a.id,
    a.name
FROM
    APP_USER u
    JOIN USER_ALLERGY ua ON ua.user_id = u.id
    JOIN ALLERGY a ON ua.allergy_id = a.id
WHERE u.id = 1
ORDER BY
    u.name;