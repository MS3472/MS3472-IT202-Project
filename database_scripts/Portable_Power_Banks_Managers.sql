/* ms3472*/
/* 10/04/2024*/
/* IT202-MC*/
/* Phase 1 */
/* MS3472@njit.edu*/




CREATE TABLE PortablePowerBanksManagers (
Power_Banks_ManagerID     INT(11)        NOT NULL   AUTO_INCREMENT,
 emailAddress           VARCHAR(255)   NOT NULL   UNIQUE,
 password               VARCHAR(64)    NOT NULL,
  pronouns               VARCHAR(60)    NOT NULL,
  firstName              VARCHAR(60)    NOT NULL,
 lastName               VARCHAR(60)    NOT NULL,
 dateCreated            DATETIME       NOT NULL,
 PRIMARY KEY (Power_Banks_ManagerID)
);


INSERT INTO `Portable_Power_Banks_Managers`
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('John@PortablePower.com', SHA2('IlovethisJOb!', 256), 'He/Him', 'John', 'Long', NOW());

INSERT INTO `Portable_Power_Banks_Managers`
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Louis@PortablePower.com', SHA2('Green1232', 256), 'He/Him', 'Louis', 'Gomes', NOW());

INSERT INTO `Portable_Power_Banks_Managers`
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('Tyshima@PortablePower.com', SHA2('Lasvagas123', 256), 'She/Her', 'Tyshima', 'Myers', NOW());

INSERT INTO `Portable_Power_Banks_Managers`
(emailAddress, password, pronouns, firstName, lastName, dateCreated)
VALUES
('carlos@PortablePower.com', SHA2('Jeeplove', 256), 'He/Him', 'Carlos', 'Santos', NOW());
