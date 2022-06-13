SELECT
    t.id,
    u.nom,
    u.prenom,
    t.descriptionTicket,
    t.typeTicket
FROM
    ticket as t,
    users as u
WHERE
    t.idUser = u.id;