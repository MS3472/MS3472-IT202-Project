/* ms3472*/
/* 10/19/2024*/
/* IT202-MC*/
/* Phase 2 */
/* MS3472@njit.edu*/

CREATE TABLE PortablePowerBanksCategories (
Protable_PowerBank_CategoryID       INT(11)        NOT NULL,
Portable_PowerBank_CategoryCode     VARCHAR(10)    NOT NULL   UNIQUE,
Portable_PowerBank_CategoryName     VARCHAR(255)   NOT NULL,
Portable_PowerBank_ShelfNum         VARCHAR(5)     NOT NULL,
DateCreated               DATETIME       NOT NULL,
PRIMARY KEY (Protable_PowerBank_CategoryID)
);