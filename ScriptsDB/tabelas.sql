create table categoriaConta(

    idCategoriaConta int AUTO_INCREMENT not null PRIMARY KEY,
    descricao        varchar(255)
       
);
 
create table conta(
 
    idConta          int AUTO_INCREMENT not null PRIMARY KEY,
    idCategoriaConta int not null,
    descricaoConta   varchar(500) not null, 
    data_registro    datetime,
    data_pagamento   date
    
);

alter table conta add FOREIGN KEY(idCategoriaConta) references categoriaconta(idCategoriaConta);