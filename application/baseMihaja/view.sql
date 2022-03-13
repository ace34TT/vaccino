/*dose_rquests;
+----+------------+---------+------------+----------+
| id | date       | user_id | vaccine_id | quantity |

 vaccines;
+----+--------------+
| id | nom          |



users;
+----+------------------+----------+---------+-----------+
| id | email            | password | role_id | person_id |

roles;
+----+---------+
| id | nom     |


persons;
+----+-----------------+-----------+---------------+--------------+--------+
| id | firstname       | lastname  | date_of_birth | fokontany_id | cin    |



 drop view viewDemandeVaccin;
*/


CREATE VIEW viewDemandeVaccin AS
SELECT
      dose_rquests.id As  dose_rquestsId,
      dose_rquests.date AS  dose_rquestsDate,
      dose_rquests.quantity As  dose_rquestsQuantity ,
      vaccines.id AS  vaccinesId,
      vaccines.nom AS vaccinesNom,
      users.id AS usersId,
      users.email AS  usersEmail,
      roles.id AS rolesId,
      roles.nom AS rolesNom,
      persons.id AS personsId,
       persons.firstname AS firstname,
        persons.lastname AS lastname,
        fokontanys.id AS fokontanysId,
         fokontanys.nom AS  fokontanysNom
FROM dose_rquests
    INNER JOIN vaccines ON vaccines.id = dose_rquests.vaccine_id
    INNER JOIN users ON  users.id = dose_rquests.user_id
    INNER JOIN roles ON  roles.id = users.role_id
    INNER JOIN persons ON  persons.id = users.person_id
    INNER JOIN fokontanys ON fokontanys.id = persons.fokontany_id
  ;
