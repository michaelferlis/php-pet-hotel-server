    CREATE TABLE "owners" (
    "owner_id" SERIAL PRIMARY KEY,
    "owner_name" VARCHAR (80) UNIQUE NOT NULL,
    "number_of_pets" INT NOT NULL
);

CREATE TABLE "pets" (
    "pet_id" SERIAL PRIMARY KEY,
    "pet_name" VARCHAR(100),
    "breed" VARCHAR(1000),
    "color" VARCHAR(1000),
    "checked_in" text DEFAULT 'true'::text,
    "pet_owner_id" INT REFERENCES "owners"
    
);