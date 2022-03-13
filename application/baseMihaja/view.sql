CREATE VIEW viewDevis AS
SELECT
      clients.id As  clientsId,
      clients.nom AS  clientsNom,
      clients.adresse As  clientsAdresse ,
      clients.contact AS  clientsContact,
      devis.id AS  devisId ,
      devis.date AS  devisDate ,
      devis.status AS   devisStatus
FROM clients
    INNER JOIN devis ON devis.idClient = clients.id
  ;
