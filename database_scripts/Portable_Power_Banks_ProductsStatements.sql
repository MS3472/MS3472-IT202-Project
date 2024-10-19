CREATE TABLE PortablePowerBanksProducts (
    Portable_PowerBank_ProductID        INT(11)        NOT NULL,
    Portable_PowerBank_ProductCode      VARCHAR(10)    NOT NULL UNIQUE,
    Portable_PowerBank_ProductName      VARCHAR(255)   NOT NULL,
    Portable_PowerBank_description      TEXT           NOT NULL,
    Portable_PowerBank_model            VARCHAR(15)    NOT NULL,
    Portable_PowerBank_CategoryID       INT(11)        NOT NULL,
    Portable_PowerBank_listPrice        DECIMAL(10, 2) NOT NULL,
    Portable_PowerBank_WholesalePrice    DECIMAL(10, 2) NOT NULL,
    DateCreated                         DATETIME       NOT NULL,
    PRIMARY KEY (Portable_PowerBank_ProductID)
);





