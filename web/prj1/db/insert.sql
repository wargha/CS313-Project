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

INSERT INTO
       RECIPE (
              title,
              descr
       )
VALUES
       (
              'Dairy Free Bread',
              'In a large mixing bowl or the bowl of a standing mixer with a hook attachment, combine 2 cups of warm almond milk, 1/4 cup sugar, and 1 1/2 tablespoons yeast, stirring gently to dissolve. Let the mixture rest for 5 to 10 minutes, or until foamy (showing the yeast is active).


Meanwhile, in a medium-large mixing bowl, combine 6 cups flour and 1 1/2 teaspoons salt.

Add 1/4 cup oil to the yeast mixture. Gradually add the flour, about one cup at a time.

Turn the dough out onto a lightly floured surface and knead it until the dough is elastic and firm.

Place the dough in a lightly oiled bowl, cover the bowl with plastic wrap, and put it in a warm place for 1 hour, or until the dough is doubled in bulk.

Preheat the oven to 350 F. Oil two 9x5 inch loaf pans.

Punch down the dough, and turn out onto a dry surface, kneading the dough for 3 to 4 minutes. Divide the dough in half, shape each half into a loaf, and place them in the prepared loaf pans. Let the loaves rise in a warm place for 30 to 40 minutes more, or until the loaves have risen above the edges of the pans.

Bake for 30 minutes or until golden brown.

Remove the loaves from the oven and allow them to cool slightly in the pans before slicing and serving.'
       );

INSERT INTO
       RECIPE (
              title,
              descr
       )
VALUES
       (
              'Soy Free Bread',
              'In a large mixing bowl or the bowl of a standing mixer with a hook attachment, combine 2 cups of warm almond milk, 1/4 cup sugar, and 1 1/2 tablespoons yeast, stirring gently to dissolve. Let the mixture rest for 5 to 10 minutes, or until foamy (showing the yeast is active).


Meanwhile, in a medium-large mixing bowl, combine 6 cups flour and 1 1/2 teaspoons salt.

Add 1/4 cup oil to the yeast mixture. Gradually add the flour, about one cup at a time.

Turn the dough out onto a lightly floured surface and knead it until the dough is elastic and firm.

Place the dough in a lightly oiled bowl, cover the bowl with plastic wrap, and put it in a warm place for 1 hour, or until the dough is doubled in bulk.

Preheat the oven to 350 F. Oil two 9x5 inch loaf pans.

Punch down the dough, and turn out onto a dry surface, kneading the dough for 3 to 4 minutes. Divide the dough in half, shape each half into a loaf, and place them in the prepared loaf pans. Let the loaves rise in a warm place for 30 to 40 minutes more, or until the loaves have risen above the edges of the pans.

Bake for 30 minutes or until golden brown.

Remove the loaves from the oven and allow them to cool slightly in the pans before slicing and serving.'
       );

INSERT INTO
       RECIPE (
              title,
              descr
       )
VALUES
       (
              'Peanut Free Bread',
              'In a large mixing bowl or the bowl of a standing mixer with a hook attachment, combine 2 cups of warm almond milk, 1/4 cup sugar, and 1 1/2 tablespoons yeast, stirring gently to dissolve. Let the mixture rest for 5 to 10 minutes, or until foamy (showing the yeast is active).


Meanwhile, in a medium-large mixing bowl, combine 6 cups flour and 1 1/2 teaspoons salt.

Add 1/4 cup oil to the yeast mixture. Gradually add the flour, about one cup at a time.

Turn the dough out onto a lightly floured surface and knead it until the dough is elastic and firm.

Place the dough in a lightly oiled bowl, cover the bowl with plastic wrap, and put it in a warm place for 1 hour, or until the dough is doubled in bulk.

Preheat the oven to 350 F. Oil two 9x5 inch loaf pans.

Punch down the dough, and turn out onto a dry surface, kneading the dough for 3 to 4 minutes. Divide the dough in half, shape each half into a loaf, and place them in the prepared loaf pans. Let the loaves rise in a warm place for 30 to 40 minutes more, or until the loaves have risen above the edges of the pans.

Bake for 30 minutes or until golden brown.

Remove the loaves from the oven and allow them to cool slightly in the pans before slicing and serving.'
       );
        -- INSERT SOME TEST COMBINED ALLERGIES WITH USER
INSERT INTO
       RECIPE_ALLERGY (
              recipe_id,
              allergy_id
       )
VALUES
       (1, 1);

INSERT INTO
       RECIPE_ALLERGY (
              recipe_id,
              allergy_id
       )
VALUES
       (2, 2);

INSERT INTO
       RECIPE_ALLERGY (
              recipe_id,
              allergy_id
       )
VALUES
       (3, 3);