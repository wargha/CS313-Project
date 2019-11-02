-- -- Select allergies from one user
-- SELECT
--     u.id,
--     u.name,
--     a.id,
--     a.name
-- FROM
--     APP_USER u
--     JOIN USER_ALLERGY ua ON ua.user_id = u.id
--     JOIN ALLERGY a ON ua.allergy_id = a.id
-- WHERE u.id = 1
-- ORDER BY
--     u.name;
-- Select recipes according to the allergies of the user
SELECT
    u.name,
    a.name,
    r.title
FROM
    APP_USER u
    JOIN 
    USER_ALLERGY ua 
    ON ua.user_id = u.id
    JOIN 
    ALLERGY a 
    ON 
    ua.allergy_id = a.id
    JOIN 
    RECIPE_ALLERGY ra 
    ON 
    ra.allergy_id = a.id
    JOIN RECIPE r 
    ON
    ra.recipe_id = r.id
WHERE
    u.id = 1


-- DELETE FROM user_allergy WHERE allergy_id = :allergy_id AND user_id = :user_id 