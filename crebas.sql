/*==============================================================*/
/* DBMS name:      MySQL 5.0                                    */
/* Created on:     2020/5/8 9:04:34                             */
/*==============================================================*/


drop table if exists comment;

drop table if exists post;

drop table if exists vip;

/*==============================================================*/
/* Table: comment                                               */
/*==============================================================*/
create table comment
(
   comment_id           varchar(255) not null,
   comment_name         varchar(1024) not null,
   post_id              int not null,
   coment_text          text not null,
   comment_time         datetime not null,
   primary key (comment_id)
);

/*==============================================================*/
/* Table: post                                                  */
/*==============================================================*/
create table post
(
   post_id              int not null,
   vip_id               int not null,
   post_time            datetime not null,
   heading              varchar(1024) not null,
   post_text            text not null,
   post_kind            int,
   primary key (post_id)
);

/*==============================================================*/
/* Table: vip                                                   */
/*==============================================================*/
create table vip
(
   vip_id               int not null,
   vip_name             varchar(255) not null,
   vip_job              varchar(1024),
   vip_age              varchar(1024),
   primary key (vip_id)
);

alter table comment add constraint FK_Reference_2 foreign key (post_id)
      references post (post_id) on delete restrict on update restrict;

alter table post add constraint FK_Reference_1 foreign key (vip_id)
      references vip (vip_id) on delete restrict on update restrict;

