-- Active: 1650949481625@@127.0.0.1@3306@ipa

SELECT
    COUNT(status)
FROM
    ticket
WHERE
    idUser = "1"
    AND status = "open";