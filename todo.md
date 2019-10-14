Data management:
	modify and remove data (ongoing)

User management:
	create user (check)
	delete user (check)
	update user (check)
	fill basket without login
		(require login on checkout) -- working on it --

Basket:
	list of products
	- price 
	- quantity
	- total cost
	- validation button (are you sure? )

catogories:
	catogorize products (needs to be built)

landing page:
	-attractive and intuitive

admin section:
	exclusive access to some users to modify site content
	(show orders from that users made)


tabels: users, (check)
		orders, (working on it)
		products, (check)



:P orders :
	on checkout clicked 
	if user logged in
	{
	add to item tabel
			order=>id
			product=>id
			product=>amount
	
	add to order tabel
			username
			items
	
	add to users tabel
			order id
	}
	else {
		please login to checkout!
	}