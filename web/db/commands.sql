CREATE TABLE public.appuser (
    user_id SERIAL NOT NULL PRIMARY KEY,
    user_email VARCHAR(100) NOT NULL UNIQUE,
    user_pw VARCHAR(255) NOT NULL,
    user_display_name VARCHAR(100) NOT NULL
);

CREATE TABLE public.allergy(
    allergy_id SERIAL NOT NULL PRIMARY KEY,
    allergy_name VARCHAR(100) NOT NULL UNIQUE
);

CREATE TABLE public.userXallergy (
    user_id INT NOT NULL REFERENCES public.appuser(user_id),
    allergy_id INT NOT NULL REFERENCES public.allergy(allergy_id),
    allergy_level SMALLINT NOT NULL
);

CREATE TABLE restaurant (
    restaurant_id SERIAL NOT NULL PRIMARY KEY,
    restaurant_name VARCHAR(100) NOT NULL UNIQUE,
);

CREATE TABLE recipe (
    recipe_id SERIAL NOT NULL PRIMARY KEY,
    recipe_name VARCHAR(100) NOT NULL UNIQUE,
    recipe_title VARCHAR(100) NOT NULL,
    recipe_description TEXT NOT NULL,
    recipe_creator INT FOREIGN KEY
);

insert into
    public.USER (user_id, username, pw, display_name)
VALUES
    (1001, "Lucas", "passwooord", "Luca$");

