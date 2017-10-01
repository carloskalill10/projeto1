create DATABASE projeto1;

use projeto1;

create TABLE vasao(
	id Int AUTO_INCREMENT,
    tag TEXT,
    valor float,
    data TIMESTAMP,
    PRIMARY key(id)
    
);

create TABLE pressao(
	id Int AUTO_INCREMENT,
    tag TEXT,
    valor float,
    data TIMESTAMP,
    PRIMARY key(id)
    
);
