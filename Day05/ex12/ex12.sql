SELECT last_name, first_name
FROM db_mbaloyi.member INNER JOIN db_mbaloyi.user_card 
ON member.id_user_card=user_card.id_user
WHERE last_name LIKE "%-%"
OR first_name LIKE "%-%"
ORDER BY last_name ASC, first_name ASC;