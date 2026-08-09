DELIMITER $$ 
CREATE PROCEDURE registerUser(
	IN u_username VARCHAR(100),
    IN u_email VARCHAR(255),
    IN u_password VARCHAR(255)
)

BEGIN
INSERT INTO users (username, email, password) VALUES (
	u_username,
	u_email,
	u_password
);
END $$ 

DELIMITER ;