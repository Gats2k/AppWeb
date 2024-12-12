/*==============================================================*/
/* Nom de SGBD :  MySQL 5.0                                     */
/* Date de cr�ation :  18/01/2024 14:51:14                      */
/*==============================================================*/

drop database if exists Emploi;

create database if not exists Emploi;

use Emploi;

/*==============================================================*/
/* Table : DEMANDEUR                                            */
/*==============================================================*/
create table DEMANDEUR
(
   NOM_DEMANDEUR        varchar(254),
   DATE_DE_NAISSANCE    datetime,
   TELEPHONE            numeric(8,0),
   EMAIL                varchar(254),
   role                 varchar(56),
   login varchar(50),
   ID_DEMANDEUR         int not null,
   NUMERO_OFFRE         int not null,
   ID_EMPLOI            int not null,
   ID_LOCALISATION      int not null,
   primary key (ID_DEMANDEUR)
);

/*==============================================================*/
/* Table : EMPLOYEUR                                            */
/*==============================================================*/
create table EMPLOYEUR
(
   ID_EMPLOYEUR         int not null,
   ID_LOCALISATION      int not null,
   ID_EMPLOI            int not null,
   NUMERO_DEMANDE       int not null,
   NOM_ENTREPRISE       varchar(254),
   role                 varchar(56),
   TELEPHONE            numeric(100),
   EMAIL                varchar(254),
   login varchar(50),
   ROLE                 varchar(50),
   ADRESSE              varchar(254),
   primary key (ID_EMPLOYEUR)
);

/*==============================================================*/
/* Table : LOCALISATION                                         */
/*==============================================================*/
create table LOCALISATION
(
   ID_LOCALISATION      int not null,
   PAYS                 varchar(254),
   VILLE                varchar(254),
   primary key (ID_LOCALISATION)
);

/*==============================================================*/
/* Table : OFFRE_EMPLOI                                         */
/*==============================================================*/
create table OFFRE_EMPLOI
(
   COMPETENCES          varchar(254),
   REMUNERATION         varchar(254),
   DESCRIPTION_POSTE    varchar(254),
   NOM_EMPLOI           varchar(254),
   ID_EMPLOI            int not null,
   SECTEUR_ACTIVITE     varchar(254),
   primary key (ID_EMPLOI)
);

/*==============================================================*/
/* Table : STATUS_DEMANDE                                       */
/*==============================================================*/
create table STATUS_DEMANDE
(
   NUMERO_DEMANDE       int not null,
   primary key (NUMERO_DEMANDE)
);

/*==============================================================*/
/* Table : STATUS_OFFRE                                         */
/*==============================================================*/
create table STATUS_OFFRE
(
   NUMERO_OFFRE         int not null,
   primary key (NUMERO_OFFRE)
);

alter table DEMANDEUR add constraint FK_analyser foreign key (NUMERO_OFFRE)
      references STATUS_OFFRE (NUMERO_OFFRE) on delete restrict on update restrict;

alter table DEMANDEUR add constraint FK_posseder foreign key (ID_LOCALISATION)
      references LOCALISATION (ID_LOCALISATION) on delete restrict on update restrict;

alter table DEMANDEUR add constraint FK_postuler foreign key (ID_EMPLOI)
      references OFFRE_EMPLOI (ID_EMPLOI) on delete restrict on update restrict;

alter table EMPLOYEUR add constraint FK_avoir foreign key (ID_LOCALISATION)
      references LOCALISATION (ID_LOCALISATION) on delete restrict on update restrict;

alter table EMPLOYEUR add constraint FK_publier foreign key (ID_EMPLOI)
      references OFFRE_EMPLOI (ID_EMPLOI) on delete restrict on update restrict;

alter table EMPLOYEUR add constraint FK_verifier foreign key (NUMERO_DEMANDE)
      references STATUS_DEMANDE (NUMERO_DEMANDE) on delete restrict on update restrict;

INSERT INTO utilisateur (login, email, role, etat, pwd) VALUES
    ('admin', 'tresorgatsobeau@gmail.com', 'ADMIN',1,md5('123')),
    ('user', 'user1@gmail.com', 'DEMANDEUR',0,md5('123')), 
    ('user2', 'user2@gmail.com', 'EMPLOYEUR',1,md5('123'));