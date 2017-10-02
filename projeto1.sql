create DATABASE projeto1;

use projeto1;

create TABLE vazao(
	id Int AUTO_INCREMENT,
    tag TEXT,
    valor float,
    data TIMESTAMP default CURRENT_TIMESTAMP,
    PRIMARY key(id)
    
);

create TABLE pressao(
	id Int AUTO_INCREMENT,
    tag TEXT,
    valor float,
    data TIMESTAMP default CURRENT_TIMESTAMP,
    PRIMARY key(id)
    
);
