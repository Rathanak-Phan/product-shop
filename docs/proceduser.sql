-- register user
DELIMITER $$ 
CREATE PROCEDURE registerUser(
	IN u_first_name VARCHAR(100),
	IN u_last_name VARCHAR(100),
    IN u_email VARCHAR(255),
    IN u_password VARCHAR(255)
)

BEGIN
INSERT INTO users (first_name, last_name, email, password) VALUES (
	u_first_name,
	u_last_name,
	u_email,
	u_password
);
END $$ 

DELIMITER ;

-- get user by email
DELIMITER $$
CREATE PROCEDURE getUserByEmail (
	IN u_email VARCHAR(255)
)

BEGIN 
SELECT * FROM users WHERE email = u_email LIMIT 1;
END $$

DELIMITER ;