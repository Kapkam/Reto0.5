use maxcenter;
insert into shops (name) values("Zara");
insert into shops (name) values("Mediamarket");
insert into shops (name) values("Soccerfactory");
insert into shops (name) values("Game");
select * from shops;
insert into products (name,description,img,stock,links,shop_id)
values ("Abrigo", "El abrigo que más se lleva este otoño","prod3.jpg",30,"https://www.zara.com/es/es/mujer-chaquetas-l1114.html",1);
insert into products (name,description,img,stock,links,shop_id)
values ("Samsung TV QLED", "Lo más parecido a ir al cine sin moverte de casa (108 Cm, 43 pulgadas)","qled.jpeg",5,"https://www.samsung.com/es/tvs/qled-q90r/QE75Q90RATXXC/",2);
insert into products (name,description,img,stock,links,shop_id)
values ("Botas de fútbol", "Las mismas botas de fúbtol que utiliza Cristiano Ronaldo","botas.jfif",1,"https://deportesblanes.com/botas-de-futbol-fg/botas-de-futbol-adidas-nemeziz-182-fg-hombre-2454.html",3);
insert into products (name,description,img,stock,links,shop_id)
values ("PS4", "La consola más utilizada de la historia, en su última versión","ps4.jfif",10,"https://www.playstation.com/es-mx/explore/gamefinder/",4);
select * from products;