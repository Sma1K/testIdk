SELECT users.email, COUNT(*)
FROM users
GROUP BY users.email
HAVING COUNT(*) > 1;